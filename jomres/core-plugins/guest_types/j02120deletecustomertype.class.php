<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Deletes a customer type
 #
* @package Jomres
#
 */
class j02120deletecustomertype {
	/**
	#
	 * Constructor: Deletes a customer type
	#
	 */
	function j02120deletecustomertype()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$id=jomresGetParam( $_REQUEST, 'id', 0 );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE',_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE,FALSE);
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		//$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message($saveMessage);
		$query="DELETE FROM #__jomres_customertypes WHERE id = '".(int)$id."' AND property_uid = '".(int)$defaultProperty."'";
		if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_EXTRA',_JOMRES_MR_AUDIT_DELETE_EXTRA,FALSE)))
			trigger_error ("Unable to delete from customertypes table, mysql db failure", E_USER_ERROR);
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listCustomerTypes"), $saveMessage );
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