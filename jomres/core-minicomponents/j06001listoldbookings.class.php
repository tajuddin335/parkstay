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
 * Constructs and displays all bookings
#
 *
 * @package Jomres
#
 */
class j06001listoldbookings
	{
	/**
	#
	 * Constructor: Constructs and displays all bookings
	#
	 */
	function j06001listoldbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;

		$arrivalDates = jomresGetParam( $_REQUEST, 'arrivalDates', '' );
		if ( $arrivalDates == '%' ) unset( $arrivalDates );
		$defaultProperty = getDefaultProperty();
		if ( isset( $arrivalDates ) && !empty( $arrivalDates ) )
			{
			$query = "SELECT c.contract_uid,c.invoice_uid,c.tag, c.arrival, c.departure,c.booked_in,c.cancelled,c.cancelled_timestamp,c.cancelled_reason,c.bookedout, g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid)  AND c.property_uid = '" . (int) $defaultProperty . "' AND c.arrival = '$arrivalDates' AND (c.cancelled = 1 OR c.bookedout = 1)
			ORDER BY c.arrival";
			}
		else
			{
			$query = "SELECT c.contract_uid,c.invoice_uid,c.tag, c.arrival, c.departure,c.booked_in,c.cancelled,c.cancelled_timestamp,c.cancelled_reason,c.bookedout, g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid) AND c.property_uid = '" . (int) $defaultProperty . "' AND (c.cancelled = 1 OR c.bookedout = 1)
			ORDER BY c.arrival";
			}

		$contractsList = doSelectSql( $query );

		$dates = array ();
		if ( count( $contractsList ) > 0 )
			{
			foreach ( $contractsList as $contract )
				{
				$arrivalDateArray[ ] = $contract->arrival;
				}
			if ( !empty( $arrivalDateArray ) )
				{
				$dates = array_unique( $arrivalDateArray );
				asort( $dates );
				}
			}
		$arrivaldateDropdown = filterForm( 'arrivalDates', $dates, "date", "listoldbookings" );
		showLiveBookings( $contractsList, jr_gettext( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', _JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS, false ), $arrivaldateDropdown );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', _JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>