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

if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "router.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "router.php" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "router.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "router.php
		automatically, please do this manually through FTP</h1><br/>";

?>