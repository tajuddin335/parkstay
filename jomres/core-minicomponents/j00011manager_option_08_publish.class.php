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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 *
 * @package Jomres
#
 */
class j00011manager_option_08_publish
	{

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00011manager_option_08_publish( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$published = get_showtime( 'this_property_published' );
		if ( $published )
			{
			$pubmsg = jr_gettext( '_JOMRES_COM_MR_VRCT_UNPUBLISH', _JOMRES_COM_MR_VRCT_UNPUBLISH, false );
			$image  = 'PublishProperty';
			}
		else
			{
			$pubmsg = jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISH', _JOMRES_COM_MR_VRCT_PUBLISH, false );
			$image  = 'UnpublishProperty';
			}
		$this->cpanelButton = jomres_mainmenu_option( jomresURL( JOMRES_SITEPAGE_URL . '&no_html=1&task=publishProperty' ), $image . ".png", $pubmsg, null, jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS, false, false ) );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}

?>