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
 * Deletes a tariff
 #
* @package Jomres
#
 */
class j02217deletetariff {
	/**
	#
	 * Constructor: Deletes a tariff
	#
	 */
	function j02217deletetariff()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$defaultProperty=getDefaultProperty();

		$tarifftypeid		=intval(jomresGetParam( $_REQUEST, 'tarifftypeid', 0 ));
		if ($tarifftypeid > 0)
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_DELETED',_JOMRES_COM_MR_LISTTARIFF_DELETED,FALSE);
			$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
			$jomres_messaging->set_message($saveMessage);
			// we need to find all the tariff uids that are associated with this tariff type
			$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id = '$tarifftypeid' AND property_uid = '$defaultProperty'";
			$rateIds=doSelectSql($query);
			if (count($rateIds) == 0)
				trigger_error ("Unable to update tariff details, incorrect tarifftype id / property uid combination. Possible hack attempt", E_USER_ERROR);
			$rates=array();
			foreach ($rateIds as $r)
				{
				$rates[]=$r->tariff_id;
				}

			// Now we can start trashing the tariff details
			$query="DELETE FROM #__jomcomp_tarifftypes WHERE id = '$tarifftypeid'";
			//echo $query."<br>";
			if (!doInsertSql($query,'') ) trigger_error ("Unable to delete tariff, mysql db failure", E_USER_ERROR);
			$gor=genericOr($rates,'rates_uid');
			// now we can remove the old tariffs
			if (count($rateIds)>0)
				{
				$query="DELETE FROM #__jomres_rates WHERE ".$gor."";
				//echo $query."<br>";
				if (!doInsertSql($query,'') ) trigger_error ("Unable to delete tariff, mysql db failure", E_USER_ERROR);
				}
			// delete the old __jomcomp_tarifftype_rate_xref records
			$gor=genericOr($rates,'tariff_id');
			if (count($rateIds)>0)
				{
				$query="DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE ".$gor."";
				//echo $query."<br>";
				//$result=doInsertSql($query,'');
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_TARIFF',_JOMRES_MR_AUDIT_DELETE_TARIFF,FALSE)))
					returnToPropertyConfig($saveMessage);
				trigger_error ("Unable to delete tariff xref, mysql db failure", E_USER_ERROR);
				}
			returnToPropertyConfig($saveMessage);
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