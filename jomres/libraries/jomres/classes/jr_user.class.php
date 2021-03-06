<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Manages the jomres user's access rights
#
 *
 * @package Jomres
#
 */
class jr_user
	{
	/**
	#
	 * Constructor. Sets the user up based on the $my variable
	#
	 */
	private static $configInstance;
	private static $internal_debugging;

	public function __construct()
		{
		self::$internal_debugging           = false;
		$this->id                           = 0;
		$this->userid                       = false;
		$this->username                     = false;
		$this->userIsManager                = false;
		$this->accesslevel                  = false;
		$this->defaultproperty              = false;
		$this->currentproperty              = false;
		$this->authorisedProperties         = array ();
		$this->authorisedPropertyDetails    = array ();
		$this->superPropertyManager         = false;
		$this->superPropertyManagersAreGods = true; // Change this to false to prevent super property managers from having rights to ALL properties
		$this->userIsRegistered             = false;
		//$this->users_timezone					= "America/Lima";
		$this->jomres_manager_id = 0;
		$this->userIsSuspended   = false;

		$this->id = jomres_cmsspecific_getcurrentusers_id();

		if ( $this->id > 0 && $this->id != 0 && !is_null( $this->id ) )
			{
			$this->userIsRegistered = true;

			$query           = "SELECT * FROM #__jomres_managers WHERE userid = '" . (int) $this->id . "' LIMIT 1";
			$authorisedUsers = doSelectSql( $query );

			if ( count( $authorisedUsers ) > 0 )
				{
				$this->userIsManager = true;

				foreach ( $authorisedUsers as $authUser )
					{
					$this->userid          = $authUser->userid;
					$this->username        = $authUser->username;
					$this->accesslevel     = $authUser->access_level;
					$this->defaultproperty = $authUser->currentproperty;
					$this->currentproperty = $authUser->currentproperty;
					$this->jomres_manager_id = $authUser->manager_uid;
					if ( isset( $authUser->users_timezone ) ) 
						$this->users_timezone = $authUser->users_timezone;
					if ( $authUser->suspended == "1" ) 
						$this->userIsSuspended = true;

					$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );

					if ( $authUser->pu == "1" ) //this user is a super property manager and has access to all properties
						{
						$this->superPropertyManager = true;

						$this->authorisedProperties=get_showtime('all_properties_in_system');
						if ( count( $this->authorisedProperties ) > 0 )
							{
							$basic_property_details->get_property_name_multi( $this->authorisedProperties );
							foreach ( $this->authorisedProperties as $p )
								{
								$this->authorisedPropertyDetails[ $p ] = array ( 'property_name' => $basic_property_details->property_names[$p] );
								}
							}
						}
					else //this user is a manager or receptionist and has access only to it`s own  properties
						{
						$this->superPropertyManager = false;

						$query = "SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '" . (int) $this->id . "'";
						$managersToPropertyList = doSelectSql( $query );
						if (count($managersToPropertyList)==0)
							{
							return;
							}
						foreach ( $managersToPropertyList as $x )
							{
							$this->authorisedProperties[] = $x->property_uid;
							}
						if ( count( $this->authorisedProperties ) > 0 )
							{
							$basic_property_details->get_property_name_multi( $this->authorisedProperties );
							foreach ( $this->authorisedProperties as $p )
								{
								$this->authorisedPropertyDetails[ $p ] = array ( 'property_name' => $basic_property_details->property_names[$p] );
								}
							}
						else if ( !defined( '_JOMRES_INITCHECK_ADMIN' ) )
							{
							trigger_error( "This manager " . (int) $this->id . "  hasn't got any properties.", E_USER_ERROR );
							}
						}
					if ( count($this->authorisedProperties)>0)
						{
						if (!in_array( $this->currentproperty, $this->authorisedProperties ))
							{
							$this->currentproperty = $this->setToAnyAuthorisedProperty();
							}
						}
					}
				}
			else
				{
				$this->userid               = false;
				$this->username             = false;
				$this->userIsManager        = false;
				$this->accesslevel          = false;
				$this->defaultproperty      = false;
				$this->currentproperty      = false;
				$this->authorisedProperties = array ();
				}
			}
		else
			{
			$this->userIsManager=false;
			}
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jr_user();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}

	public function __set( $setting, $value )
		{
		if ( self::$internal_debugging ) echo "Setting " . $setting . " to " . $value . " <br>";
		$this->$setting = $value;

		return true;
		}

	public function __get( $setting )
		{
		if ( self::$internal_debugging ) echo "Getting " . $setting . " which is " . $this->$setting . "<br>";
		if ( isset( $this->$setting ) ) return $this->$setting;

		return null;
		}


	/**
	#
	 * Get the manger's current property. If it is unset (the manager has just deleted a property) then resets the current property to the first property encountered in the propertys table
	#
	 */
	function check_currentproperty()
		{
		$query         = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid = '" . (int) $this->currentproperty . "'";
		$propertycount = doSelectSql( $query );
		if ( count( $propertycount ) == 0 )
			{
			$this->setToAnyAuthorisedProperty(); // The super admin's current property is unset. Let's find the first property uid in the database & set to that.
			}
		}

	/**
	#
	 * Sets the users current property to N. Used by the select property dropdown, typically.
	#
	 */
	function set_currentproperty( $currentProperty )
		{

		if ( in_array( $currentProperty, $this->authorisedProperties ) )
			{
			$query = "UPDATE #__jomres_managers SET `currentproperty`='".(int)$currentProperty."' WHERE userid = '" . (int) $this->id . "'";
			if ( !doInsertSql( $query, false ) ) trigger_error( "Unable to set current property, mysql db failure", E_USER_ERROR );
			$this->currentproperty = $currentProperty;
			}
		}

	/**
	#
	 * Typically called when a manager has deleted a property, finds another property that they are authorised to manage and makes this their current property
	#
	 */
	function setToAnyAuthorisedProperty()
		{
		if ( count( $this->authorisedProperties ) > 0 )
			{
			if ( $this->authorisedProperties[ 0 ] > 0 )
				{
				$this->set_currentproperty( $this->authorisedProperties[ 0 ] );

				return $this->authorisedProperties[ 0 ];
				}
			else
				{
				$this->set_currentproperty( $this->authorisedProperties[ 1 ] );

				return $this->authorisedProperties[ 1 ];
				}
			}
		elseif ( !defined( '_JOMRES_INITCHECK_ADMIN' ) )
			{
			trigger_error( "Unable to reassign a manager to any existing, authorised property. Either last property in database has been deleted, or this manager has rights to no properties.", E_USER_ERROR );
			}
		}
	}

?>