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

class j06002my_commission_invoices
	{
	function j06002my_commission_invoices()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser      = jomres_singleton_abstract::getInstance( 'jr_user' );
		$defaultProperty = getDefaultProperty();
		$infoIcon        = '<img src="' . get_showtime( 'live_site' ) . '/jomres/images/SymbolInformation.png" border="0" alt="info" />';
		$status          = jomresGetParam( $_REQUEST, 'status', "" );

		if ( $thisJRUser->userIsManager )
			{
			switch ( $status )
			{
				case "unpaid":
					$stat = 0;
					break;
				case "paid":
					$stat = 1;
					break;
				case "cancelled":
					$stat = 2;
					break;
				case "pending":
					$stat = 3;
					break;
			}

			$invoices = invoices_getinvoicesfor_juser( $thisJRUser->id, $stat );

			$property_guests = array ();
			$query           = "SELECT guests_uid,firstname,surname,mos_userid  FROM #__jomres_guests  WHERE property_uid = " . (int) $defaultProperty;
			$guestList       = doSelectSql( $query );
			if ( count( $guestList ) > 0 )
				{
				foreach ( $guestList as $guest )
					{
					$property_guests[ $guest->mos_userid ][ 'guests_uid' ]  = $guest->guests_uid;
					$property_guests[ $guest->mos_userid ][ 'firstname' ]   = $guest->firstname;
					$property_guests[ $guest->mos_userid ][ 'surname' ]     = $guest->surname;
					$property_guests[ $guest->mos_userid ][ 'cms_user_id' ] = $guest->mos_userid;
					}
				}


			//if (count($invoices)>0)
			//{
			$output     = array ();
			$pageoutput = array ();
			$rows       = array ();

			$invoice_id_array = array ();
			foreach ( $invoices as $invoice )
				{
				$invoice_id_array[ ] = $invoice[ 'id' ];
				}
			$invoices_items = invoices_getalllineitems_forinvoice_ids( $invoice_id_array );


			$output[ 'PAGETITLE' ]     = jr_gettext( "_JRPORTAL_INVOICES_TITLE", _JRPORTAL_INVOICES_TITLE,false );
			$output[ 'HUSER' ]         = jr_gettext( "_JRPORTAL_INVOICES_USER", _JRPORTAL_INVOICES_USER,false );
			$output[ 'HSTATUS' ]       = jr_gettext( "_JRPORTAL_INVOICES_STATUS", _JRPORTAL_INVOICES_STATUS,false );
			$output[ 'HRAISED' ]       = jr_gettext( "_JRPORTAL_INVOICES_RAISED", _JRPORTAL_INVOICES_RAISED,false );
			$output[ 'HDUE' ]          = jr_gettext( "_JRPORTAL_INVOICES_DUE", _JRPORTAL_INVOICES_DUE,false );
			$output[ 'HPAID' ]         = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
			$output[ 'HSUBSCRIPTION' ] = jr_gettext( "_JRPORTAL_INVOICES_SUBSCRIPTION", _JRPORTAL_INVOICES_SUBSCRIPTION,false );
			$output[ 'HINITTOTAL' ]    = jr_gettext( "_JRPORTAL_INVOICES_INITTOTAL", _JRPORTAL_INVOICES_INITTOTAL,false );
			$output[ 'HRECURTOTAL' ]   = jr_gettext( "_JRPORTAL_INVOICES_RECUR_TOTAL", _JRPORTAL_INVOICES_RECUR_TOTAL,false );
			$output[ 'HFREQ' ]         = jr_gettext( "_JRPORTAL_INVOICES_RECUR_FREQUENCY", _JRPORTAL_INVOICES_RECUR_FREQUENCY,false );
			$output[ 'HDOM' ]          = jr_gettext( "_JRPORTAL_INVOICES_RECUR_DOMONTH", _JRPORTAL_INVOICES_RECUR_DOMONTH,false );
			$output[ 'HCURRENCYCODE' ] = jr_gettext( "_JRPORTAL_INVOICES_CURRENCYCODE", _JRPORTAL_INVOICES_CURRENCYCODE,false );

			if ( !using_bootstrap() )
				{
				//if ($thisJRUser->userIsManager)
				//{
				$output[ 'TASK_FILTER_ANY' ]       = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=my_commission_invoices">' . jr_gettext( "_JOMRES_FRONT_ROOMSMOKING_EITHER", _JOMRES_FRONT_ROOMSMOKING_EITHER,false ) . '</a>';
				$output[ 'TASK_FILTER_UNPAID' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=my_commission_invoices&status=unpaid">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false ) . '</a>';
				$output[ 'TASK_FILTER_PAID' ]      = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=my_commission_invoices&status=paid">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false ) . '</a>';
				$output[ 'TASK_FILTER_CANCELLED' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=my_commission_invoices&status=cancelled">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false ) . '</a>';
				$output[ 'TASK_FILTER_PENDING' ]   = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=my_commission_invoices&status=pending">' . jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false ) . '</a>';
				//}
				//else
//						{
//						$output['TASK_FILTER_ANY']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices';
//						$output['_JOMRES_FRONT_ROOMSMOKING_EITHER']=_JOMRES_FRONT_ROOMSMOKING_EITHER;
//						$output['TASK_FILTER_UNPAID']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=unpaid';
//						$output['_JRPORTAL_INVOICES_STATUS_UNPAID']=_JRPORTAL_INVOICES_STATUS_UNPAID;
//						$output['TASK_FILTER_PAID']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=paid';
//						$output['_JRPORTAL_INVOICES_STATUS_PAID']=_JRPORTAL_INVOICES_STATUS_PAID;
//						$output['TASK_FILTER_CANCELLED']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=cancelled';
//						$output['_JRPORTAL_INVOICES_STATUS_CANCELLED']=_JRPORTAL_INVOICES_STATUS_CANCELLED;
//						$output['TASK_FILTER_PENDING']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=pending';
//						$output['_JRPORTAL_INVOICES_STATUS_PENDING']=_JRPORTAL_INVOICES_STATUS_PENDING;
//						}
				}
			else
				{
				$output[ 'TASK_FILTER_ANY' ]                     = JOMRES_SITEPAGE_URL . '&task=my_commission_invoices';
				$output[ '_JOMRES_FRONT_ROOMSMOKING_EITHER' ]    = jr_gettext( "_JOMRES_FRONT_ROOMSMOKING_EITHER", _JOMRES_FRONT_ROOMSMOKING_EITHER,false );
				$output[ 'TASK_FILTER_UNPAID' ]                  = JOMRES_SITEPAGE_URL . '&task=my_commission_invoices&status=unpaid';
				$output[ '_JRPORTAL_INVOICES_STATUS_UNPAID' ]    = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false );
				$output[ 'TASK_FILTER_PAID' ]                    = JOMRES_SITEPAGE_URL . '&task=my_commission_invoices&status=paid';
				$output[ '_JRPORTAL_INVOICES_STATUS_PAID' ]      = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
				$output[ 'TASK_FILTER_CANCELLED' ]               = JOMRES_SITEPAGE_URL . '&task=my_commission_invoices&status=cancelled';
				$output[ '_JRPORTAL_INVOICES_STATUS_CANCELLED' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false );
				$output[ 'TASK_FILTER_PENDING' ]                 = JOMRES_SITEPAGE_URL . '&task=my_commission_invoices&status=pending';
				$output[ '_JRPORTAL_INVOICES_STATUS_PENDING' ]   = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false );
				}

			foreach ( $invoices as $invoice )
				{
				$r = array ();
				if ( $invoice[ 'is_commission' ] == 1 )
					{
					$inv_id      = $invoice[ 'id' ];
					$r[ 'ID' ]   = $inv_id;
					$cms_user_id = $invoice[ 'cms_user_id' ];
					if ( !array_key_exists( $cms_user_id, $property_guests ) || (int) $cms_user_id == 0 )
						{
						$query        = "SELECT guest_uid FROM #__jomres_contracts WHERE contract_uid = " . (int) $invoice[ 'contract_id' ] . " LIMIT 1";
						$guest_uid    = doSelectSql( $query, 1 );
						$query        = "SELECT firstname,surname FROM #__jomres_guests WHERE guests_uid = " . (int) $guest_uid . " LIMIT 1";
						$guest_name   = doSelectSql( $query, 2 );
						$r[ 'GUEST' ] = $guest_name[ 'firstname' ] . " " . $guest_name[ 'surname' ];
						//$r['GUEST']=_JOMRES_MR_AUDIT_UNKNOWNUSER;
						}
					else
						{
						//$r['USER']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_usersinvoices&id='.$invoice['cms_user_id'].'">'.$user_deets['name'].'</a>';
						$r[ 'GUEST' ] = $property_guests[ $cms_user_id ][ 'firstname' ] . " " . $property_guests[ $cms_user_id ][ 'surname' ];
						}

					$invoice_items    = $invoices_items[ $inv_id ];
					$item_name_string = "";
					foreach ( $invoice_items as $invoice_item )
						{
						if ( $item_name_string != "Commission<br/>" ) // We can filter out other line items as Commission only needs to be named once in the invoices list. Also, invoices of commission should not have other items added to them.
						$item_name_string .= $invoice_item[ 'name' ] . "<br/>";
						}
					$r[ 'ITEMS' ] = $item_name_string;
					jr_import( 'jrportal_user_functions' );
					$user_obj    = new jrportal_user_functions();
					$user_deets  = $user_obj->getJoomlaUserDetailsForJoomlaId( $invoice[ 'cms_user_id' ] );
					$r[ 'USER' ] = $user_deets[ 'name' ];
					if ( $invoice[ 'status' ] == "0" ) $r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID,false );
					elseif ( $invoice[ 'status' ] == "1" ) $r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID,false );
					elseif ( $invoice[ 'status' ] == "2" ) $r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED,false );
					else
					$r[ 'STATUS' ] = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING,false );
					$r[ 'RAISED' ] = $invoice[ 'raised_date' ];
					$r[ 'DUE' ]    = $invoice[ 'due_date' ];
					$r[ 'PAID' ]   = $invoice[ 'paid' ];
					if ( $invoice[ 'subscription' ] == "1" ) $r[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_YES", _JOMRES_COM_MR_YES,false );
					else
					$r[ 'SUBSCRIPTION' ] = jr_gettext( "_JOMRES_COM_MR_NO", _JOMRES_COM_MR_NO,false );
					$r[ 'INITTOTAL' ]    = output_price( $invoice[ 'init_total' ], $invoice[ 'currencycode' ] );
					$r[ 'RECURTOTAL' ]   = output_price( $invoice[ 'recur_total' ], $invoice[ 'currencycode' ] );
					$r[ 'FREQ' ]         = $invoice[ 'recur_frequency' ];
					$r[ 'CURRENCYCODE' ] = $invoice[ 'currencycode' ];

					$jrportal_paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
					$paypal_settings          = $jrportal_paypal_settings->get_paypal_settings();

					if ( ( $invoice[ 'subscription' ] == 1 || $invoice[ 'is_commission' ] == 1 ) && $paypal_settings[ 'email' ] != "" && $invoice[ 'status' ] != "1" )
						{
						$r[ 'PAYNOW' ] = '<a href="' . JOMRES_SITEPAGE_URL . '&task=immediatepay&id=' . $invoice[ 'id' ] . '"><img src = "' . get_showtime( 'live_site' ) . '/jomres/images/btn_paynow_SM.gif" /></a>';
						}

					$r[ 'EDITLINK' ]  = '<a href="' . JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $invoice[ 'id' ] . '">' . $infoIcon . '</a>';
					$r[ 'EDIT_TEXT' ] = jr_gettext( 'COMMON_VIEW', COMMON_VIEW, false );
					$r[ 'EDIT_URL' ]  = JOMRES_SITEPAGE_URL . '&task=view_invoice&id=' . $invoice[ 'id' ];
					$rows[ ]          = $r;
					}
				}
			$output[ 'JOMRES_SITEPAGE_URL' ] = JOMRES_SITEPAGE_URL;

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'frontend_list_invoices.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			//}
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}