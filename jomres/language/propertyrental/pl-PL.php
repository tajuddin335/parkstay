<?php

/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
* @Polska adaptacja Patryk Doering - http://www.rekinet.pl - kontakt@rekinet.pl
* @Aktualizacja wersji językowej z 25-09-2013r.
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('_JOMRES_COM_MR_QUICKRESDESC','Bezpośrednia rezerwacja');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Użytkownicy');
jr_define('_JOMRES_COM_MR_QUICK______DESC','Zostawić puste');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Konfiguracja systemu');
jr_define('_JOMRES_COM_MR_BACK','Wróć');
jr_define('_JOMRES_COM_MR_YES','Tak');
jr_define('_JOMRES_COM_MR_NO','Nie');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Dodaj');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Nowa oferta');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nowa cecha oferty');
jr_define('_JOMRES_COM_MR_NEWGUEST','Nowy klient');
jr_define('_JOMRES_COM_MR_SAVE','Zapisz');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nazwisko');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Rezerwacja do');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Puste');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Prawa dostępu dla użytkownika');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nazwa użytkownika');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Imię i nazwisko');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Obecnie autoryzowany');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Oferta domyślna');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Zmień');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Prawa dostępu');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Użytkownik został zmieniony.');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','Nie wymagane');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcja');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Manager ofert');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Manager rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nowe i nie opłacone rezerwacje');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Zmień rezerwację dla');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Rezerwacja od/Rezerwacja do');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Klient');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Płatności');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Imię');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nazwisko');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Informacje dla personelu');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Uwaga! Proszę zauważyć, że dodatkowe usługi dla tej rezerwacji wiązać mogą się z naliczeniem dodatkowych kosztów.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miejscowość');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Rezerwacja nie może zostać anulowana, klient już dotarł.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Anuluj rezerwację');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potwierdź anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezerwacja została anulowana.');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dni do początku rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Rodzaj rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Wyłączenie');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcja');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Nazwa przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Nr przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Piętro');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Przedmiot rezerwacji dla niepełnosprawnych');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista cech ofert');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Wpłacona przedpłata');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Wpisz wysokość przedpłaty');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Wartość rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Uwagi do przedpłaty');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Nr rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Wysokość przedpłaty');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Przedpłata została zapisana.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Dostępność');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Oferta');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edytuj dane');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Imię');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nazwisko');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr domu');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Miejscowość');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Kod pocztowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon komórkowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Nr karty kredytowej');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Ważna od');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Ważna do');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Wydana');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Właściciel karty');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Wybór cennika');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Ilość dni');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Ilość klientów');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Razem');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Ceny i przedmioty rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Oferta');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Rodzaj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nr');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Piętro');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Dla niepełnosprawnych');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Charakterystyka');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Przedmiot rezerwacji został dodany.');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edytuj');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Cechy');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zapisz cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zapisz zmiany cech oferty');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Nazwa przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Opis przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zapisz przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Aktualizuj przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edytuj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Miejscowość');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Województwo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Kraj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Kod pocztowy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Strona WWW');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Zapisz dane oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Aktualizuj dane oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Nazwa przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opis cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Zapisz cechę oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Aktualizuj cechę oferty');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Ceny');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Ważny od dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Ważny do dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Cena za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimum dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maks dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimum klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignoruj warunek za osobę za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekendy dozwolone');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Dodaj cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Aktualizuj cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edytuj tekst');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dodaj jako kopię');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Cennik został usunięty.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edytuj cennik');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Dni świąteczne');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezerwacja została zapisana.');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezerwacja');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Wymeldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Nowe rezerwacje');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Zarządzanie');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Zestawienia klientów');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Edycja ofert');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Sprawdź dostępność');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Zatwierdź dane');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Imię');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nazwisko');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr domu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miejscowość');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon stacjonarny');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Niestety obecna oferta nie spełnia wymaganych kryteriów.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<h4>Dziękujemy. Rezerwacja została przyjęta.</h4><br />Wkrótce skontaktujemy się w celu ustalenia sposobu płatności.<br /><br /><small>Prosimy wziąść pod uwagę, że ta rezerwacja jest tymczasowa i dopiero po otrzymaniu potwierdzenia transakcji lub dokonania wpłaty w systemie płatności elektronicznych będzie wiążąca dla obu stron. Wszystkie informacje zostały przesłane na podany w formularzu adres e-mail.</small>');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezerwacja internetowa:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezerwacja dla:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Rezerwacja od:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Rezerwacja do:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nazwisko:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon stacjonarny:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon komórkowy:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Łączna cena:');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Wybór klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Zamelduj klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','W dniu dzisiejszym nie ma żadnych rozpoczynających się rezerwacji klientów.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Wymeldowanie klienta');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','W dniu dzisiejszym nie ma żadnych kończących się rezerwacji klientów.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Dopłaty');
jr_define('_JOMRES_COM_A_TARIFFS','Ceny');
jr_define('_JOMRES_COM_A_DISCOUNTS','Rabaty');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Transfer plików');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktualne ustawienia');
jr_define('_JOMRES_COM_A_EXPLANATION','Objaśnienie');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Dopłata do przedmiotu rezerwacji dla jednej osoby');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zaznacz Tak, jeżeli ma być pobierana dopłata.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Wysokość dopłaty');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Przedpłata obliczana procentowo');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Jeżeli Nie, to będzie naliczana w sposób ryczałtowy.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Wysokość przedpłaty');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Za osobę za dobę');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Jeżeli Nie, cena będzie obliczana za przedmiot rezerwacji za dobę.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Wielkość pliku');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maksymalna wielkość pliku w KB.');
jr_define('_JOMRES_FRONT_MR_BOOKED','Zajęty');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','E-mail potwierdzający');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Szanowna Pani/Szanowny Panie');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za dobę za przedmiot rezerwacji');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Termin rezerwacji:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Dziękujemy za dokonaną rezerwację');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Poniżej znajduje się podsumowanie Pani/Pana rezerwacji. Prosimy o dokładne jej sprawdzenie. Jeżeli wystąpił jakiś błąd, prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Nasza doba hotelowa trwa od 14:00 do 10:00 dnia następnego. Zamldowanie w godzinach od 14:00 do 20:00. W razie spodziewanego późniejszego przyjazdu prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Cieszymy się i oczekujemy Pani/Pana przyjazdu.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Już teraz życzymy zadowolenia z wyboru naszej oferty.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Proszę uważnie przeczytać:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Zwracamy uwagę na fakt, że ta rezerwacja jest wiążącą umową. Oznacza to, że w przypadku rezygnacji, może Pani/Pan zostać obciążona/ny kosztami w pełnej wysokości ceny rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Za nieskorzystanie z oferty nie może zostać wypłacony zwrot. Z tego powodu sugerujemy zawarcie specjalnego ubezpieczenia. Oferuje je większość biur podróży, agentów ubezpieczeniowych, są również dostępne w ofertach banków.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Warunki zmiany lub anulowania rezerwacji. W wypadku anulowania rezerwacji, musi być ona dokonana w formie pisemnej. Poniżej znajduje się zestawienie związanych z tym kosztów:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Wcześniej niż 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','Tylko już dokonane przedpłaty.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Od 14 dnia przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','100% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Wszystkie ceny zawierają podatek VAT.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Drukuj potwierdzenie rezerwacji');
jr_define('_JOMRES_COM_INVOICE_TITLE','Drukuj fakturę');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Ilość dób:');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Warunki umowy:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za dobę:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Suma:');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Dziękujemy serdecznie.');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Mamy nadzieję, że nasza oferta spełniła wszystkie Pani/Pana oczekiwania.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Drukuj fakturę');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Dodane do rachunku usługi dodatkowe');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usługi');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Cena usługi');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Dodatkowe pozycje');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Suma dodatkowych pozycji:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Dodaj pozycje do rachunku');
jr_define('_JOMRES_UPLOAD_IMAGE','Zapisz zdjęcie');
jr_define('_JOMRES_FILE_UPLOAD','Transfer wybranych plików na serwer');
jr_define('_JOMRES_FILE_ERROR_TYPE','Plik może mieć format:');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Proszę wybrać plik.');
jr_define('_JOMRES_FILE_ERROR_NAME','Nazwa pliku może zawierać tylko znaki a-z, A-Z, 0-9, proszę nie używać spacji w nazwach plików.');
jr_define('_JOMRES_FILE_ERROR_SIZE','Ten plik jest niestety większy niż dopuszczalny rozmiar pliku.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','Plik nie został zapisany na serwerze.');
jr_define('_JOMRES_FILE_UPDATED','Plik został pomyślnie zaktualizowany na serwerze.');
jr_define('_JOMRES_COM_A_JSCALENDAR','Kalendarz');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','Język kalendarza');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Ustaw używaną wersję językową kalendarza.');
jr_define('_JOMRES_COM_A_CALENDARCSS','Plik CSS kalendarza');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Ustaw plik CSS kalendarza.');
jr_define('_JOMRES_COM_A_ODDS','Pozostałe');
jr_define('_JOMRES_COM_A_ERRORCHECKING','Lista przekierowań');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Ustaw na Tak, aby zobaczyć dziennik wyświetlany na dole strony po zakończeniu uruchomionej funkcji Jomres. Zostanie również wyłączone wewnętrzne przekierowanie funkcji. Jest to przydatne jeśli próbujesz określić, który plugin wykonuje jakie funkcje.');
jr_define('_JOMRES_FILE_DELETE','Usuń zdjęcie');
jr_define('_JOMRES_FILE_DELETED','Zdjęcie zostało usunięte.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Wszystkie oferty');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Usuń');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nie można usunąć tego przedmiotu rezerwacji, ponieważ został już zarezerwowany. Proszę anulować rezerwacje i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Przedmiot rezerwacji został usunięty.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Usuń ustawienia przedmiotu rezerwacji');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wykorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Ustawienia przedmiotu rezerwacji zostały usunięte.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Usuń ustawienia oferty');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wyKorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Ustawienia oferty zostały usunięte.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Usuń przedmiot rezerwacji');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Ten przedmiot rezerwacji nie może zostać usunięty, ponieważ istnieją przedmioty rezerwacji, które są do niego przypisane. Proszę przypisać przedmioty rezerwacji do innego przedmiotu rezerwacji i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Ten przedmiot rezerwacji nie może zostać usunięty, ponieważ istnieje cennik do którego jest przypisany. Proszę przypisać ten cennik do innego przedmiotu rezerwacji i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Przedmiot rezerwacji został usunięty.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Usuń ofertę');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','Oferta została usunięta.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Ta oferta nie może zostać usunięta. Nie posiadasz wystarczających uprawnień.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Szerokość dużego zdjęcia');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Zameldowanie w godzinach');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Atrakcje w okolicy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Opis dojazdu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Lotniska');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Inne możliwości połączeń komunikacyjnych');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Warunki regulaminu');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Możliwa rezerwacja on-line');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Ustaw na Tak, jeśli chcesz umożliwić rezerwację on-line.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Stała długość pobytu');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Ustaw na Tak, jeżeli rezerwacja ma być możliwa tylko na z góry ustawiony czas.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Stała długość rezerwacji');
jr_define('_JOMRES_COM_A_BOOKING','Rezerwacje');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maks cyklicznych rezerwacji, np: 3 x 7 cykli = 21 dni.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Multi rezerwacje');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Nie dla wynajmowanego całego np. apartamentu, domku letniskowego. Tak dla przedmiotów rezerwacji w hotelu, pensjonacie.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Sprawdź rezerwację');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Potwierdź rezerwację');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Poniedziałek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Wtorek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Środa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Czwartek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Piątek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Niedziela');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pn');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Wt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Śr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Cz');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','So');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Nd');
jr_define('_JOMRES_COM_A_AVLCAL','Kalendarz');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Kolor czcionki aktualnego dnia');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Kolor czcionki aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Kolor czcionki wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Kolor pól dni aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Kolor pól dni wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Kolor pól zarezerwowanych dni');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Kolor pól wolnych dni');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Kolor pól minionych dni');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zajęty');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Wolny');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Rezerwacja niepotwierdzona');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Startowy dzień rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Dla stałych okresów rezerwacji wybierz dzień tygodnia, będący pierwszym dniem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Rezerwacje od dnia');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Okres rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Pokaż kalendarz rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ustaw Tak, jeżeli kalendarz rezerwacji ma być widoczny.');
jr_define('_JOMRES_FRONT_AVAILABILITY','Kalendarz');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Aby przejść do formularza rezerwacji proszę kliknąć na wybraną datę.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Wyłączenia');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Dodaj');
jr_define('_JOMRES_FRONT_DELETEGUEST','Usuń gościa');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Klient został usunięty.');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Ten klient nie może zostać usunięty. Istnieją dane, które są do niego przypisane i to najpierw one muszą zostać usunięte.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktualny koszt przedmiotu rezerwacji:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Witamy!');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Dziękujemy bardzo za rezerwację na');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Zestawienie danych rezerwacji:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Jeżeli ma Pan/Pani jakieś pytanie odnośnie tej rezerwacji, prosimy o kontakt telefoniczny.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nasz numer telefonu');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Może Pan/Pani skontaktować się także przez e-mail.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Dla palaczy');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Obojętne');
jr_define('_JOMRES_COM_CALENDAROUTPUT','Format daty');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','Tutaj można zmienić format daty w kalendarzu.');
jr_define('_JOMRES_COM_CALENDARINPUT','Format dodawania daty z kalendarza');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Tutaj można zmienić format dodawania daty z kalendarza.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Stosowanie przerw w kalendarzu dla stałych okresów rezerwacji.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Ilość dni przerwy');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Opublikuj');
jr_define('_JOMRES_COM_A_PAYPAL','PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Podsumowanie');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Godzina');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Użytkownik');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacja');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Pokaż szczegóły');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtruj wg daty');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtruj wg użytkownika');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtruj wg operacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Brak początku rezerwacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Koniec rezerwacji dzisiaj');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktualny klient');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Koniec rezerwacji dzisiaj');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Przekroczony termin końca rezerwacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Klient nie dotarł');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nieznany użytkownik');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Przedmiot rezerwacji został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Przedmiot rezerwacji został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Przedmiot rezerwacji został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Cecha oferty została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Cecha oferty została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Cecha oferty została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Kategoria przedmiotu rezerwacji została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Kategoria przedmiotu rezerwacji została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Kategoria przedmiotu rezerwacji została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Oferta została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Oferta została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Oferta została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Ustawienia oferty zostały utworzone.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Ustawienia oferty zostały zaktualizowane.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Ustawienia oferty zostały usunięte.');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Ustawienia oferty zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Oferta została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Cennik został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Cennik został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Cennik został usunięty.');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Cena usługi dodatkowej została dodana.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Klient został zameldowany.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Klientzostał wymeldowany.');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Dodaj przedpłatę');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Klient został dodany.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Klient został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Klient został usunięty.');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Przedmiot rezerwacji został zarezerwowany.');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Usługa dodatkowa została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Usługa dodatkowa została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Usługa dodatkowa została usunięta.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Usługa dodatkowa została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Wyłączenie rezerwacji zostało wprowadzone.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Wyłączenie rezerwacji zostało usunięte.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Usługi dodatkowe');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Usługi dodatkowe zostały zaktualizowane.');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edytuj usługi dodatkowe');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Usługa dodatkowa została usunięta.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Usługi dodatkowe');
jr_define('_JOMRES_COM_A_EXTRAS','Usługi dodatkowe dla rezerwacji');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Ustaw Tak, aby oferować usługi dodatkowe na etapie rezerwacji.');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Usługi dodatkowe');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Data początkowa wyłączenia');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Data końcowa wyłączenia');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Edycja wyłączenia');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Przy próbie wyłączenia przedmiotu rezerwacji doszło do błędu. Jeden lub więcej z nich nie jest wolny.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Przedmioty rezerwacji wybrane do wyłączenia');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Pokaż wyłączenie');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nie ma żadnych wyłączeń.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Ilość gwiazdek');
jr_define('_JOMRES_COM_A_SMOKING','Pokaż palący/niepalący');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Ustaw Tak, jeżeli opcja wyboru palący/niepalący ma być dostępna.');
jr_define('_JOMRES_COM_A_RESET','Cofnij zmiany');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezerwacja anulowana');
jr_define('_JOMRES_FRONT_MR_SEARCH_PROPERTYNAME','Szukaj wg nazw ofert:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Palący/Niepalący - Ustawienia');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Kod waluty');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Np. &amp;Euro&#59; proszę zauważyć, że najlepsze jest dodanie w tym miejscu czystego kodu HTML.');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Waluta');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Np. PLN, USD, EUR. Ustawienie wymagane dla prawidłowej obsługi płatności w systemie.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Informacje');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ograniczenie czasu rezerwacji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ustaw Tak, aby ograniczyć czas rezerwacji do X dni do przodu. To oznacza, że jeżeli klienci będą próbować wybrać datę, która leży dalej w przyszłości, system przestawi datę początku rezerwacji automatycznie na datę dzisiejszą.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Możliwy czas rezerwacji ograniczyć do ilości dni');
jr_define('_JOMRES_COM_A_TAX_WARNING','<span style="color:red;">Wskazówka: nie zaleca się ustawienia obu dalszych opcji na Tak. Poprawnie jest wybrać tylko jedną z opcji kalkulacji podatków.</span>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX','Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Cena przedmiotu rezerwacji będzie zwiększona o tą wartość. Możliwy jest wybór pomiędzy cenami ryczałtowymi, opodatkowanie procentowe albo kombinacja obu możliwości. Proszę jednak zauważyć, że ta wartość ma wpływ tylko na cenę przedmiotów rezerwacji.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Wysokość ryczałtowa podatku');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Wysokość procentowa podatku');
jr_define('_JOMRES_COM_A_EUROTAX','Podatek ryczałtowy');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Podatek procentowy');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Archiwuj wszystkie wpisy');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','Wpisy dodane do archiwum.');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Administrator zarchiwizował dane.');
jr_define('_JOMRES_FRONT_TARIFFS','Ceny');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Nazwa cennika');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Opis cennika');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Przedmiot rezerwacji');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Ważny od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Ważny do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Za osobę za noc');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Za noc');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Bez weekendów');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dni');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maks dni');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minimum osób');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks osób');
jr_define('_JOMRES_FRONT_PREVIEW','Podgląd ofert');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Edycja włączona');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktualny tekst');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Nowy tekst');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst został zaktualizowany.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wybierz język');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Ilość niezarchiwowanych rekordów');
jr_define('_JOMRES_FRONT_PTYPE','Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','Rodzaje ofert');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edytuj rodzaje ofert');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis rodzaju oferty');
jr_define('_JOMRES_COM_PTYPES_SAVED','Rodzaj oferty został zapisany.');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Anulowanie rodzaju ofert jest niemożliwe. Rodzaj oferty jest przypisany do jednej lub więcej ofert. Usuń to przypisanie i spróbuj ponownie.');
jr_define('_JOMRES_COM_PTYPES_DELETED','Rodzaj oferty został anulowany.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Przypomnienie o płatności');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Brak dodatkowych płatnych usług.');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Przedpłata');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Pełna kwota');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Kwota pobrana w czasie rezerwacji');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Określ sposób pobierania płatności w czasie rezerwacji.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Ilość miesięcy');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','Ilość miesięcy pokazywanych w kalendarzu.');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Podpisane w imieniu');
jr_define('_JOMRES_COM_A_GATEWAYLIST','Płatności');
jr_define('_JOMRES_COM_A_CANCEL','Anuluj');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Wybierz przedmiot/y rezerwacji które chcesz wyłączyć ze sprzedaży i odpowiednie daty.
					<br />
					Jeżeli przy przedmiocie rezerwacji nie ma pola wyboru, oznacza to że nie może on być zablokowany do czasu, aż istniejąca rezerwacja/e nie zostanie zrealizowana lub anulowana.
					<br />
					Po wybraniu odpowiednich dat kliknij "Dodaj" aby sprawdzić ponownie dostępność przedmiotu/ów rezerwacji.');

jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Prawdopodobnie serwer wylogował Cię z powodu zbyt długiego okresu braku aktywności.</b>
					<br />
					Zaloguj się i spróbuj ponownie.</center>');

jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Powód');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Płatności on-line');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ustaw Tak, jeżeli chcesz korzystać z płatności elektronicznych.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Wybierz metodę płatności.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Płatności on-line');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Ustawienia wtyczek zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Ustawienia wtyczek zostały dodane.');
jr_define('_JOMRES_FRONT_GALLERYLINK','Zobacz tą ofertę');
jr_define('_JOMRES_COM_A_GALLERYLINK','Adres URL');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Możesz umieścić tu adres swojej strony WWW.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Karta kredytowa została zweryfikowana.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Karta kredytowa została zaktualizowana.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Edytuj dane karty kredytowej');
jr_define('_JOMRES_COM_A_EDITICON','Edytuj rozmiar ikony');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Transfer zdjęć na serwer');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Dodane zdjęcia');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Slajdy');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Pokaż odsyłacz do pokazu slajdów');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Pokaż slajdy w ramach strony');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Wysokość miniaturek slajdów');
jr_define('_JOMRES_FRONT_SLIDESHOW','Slajdy');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Brak zdjęć tej oferty.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Pokaż odsyłacz do cennika');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Zezwól na wyskakujące okna');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Jeżeli Nie, to odsyłacz który otwiera nowe okno będzie otwierany w ramach strony.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Transfer zdjęć');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Formularz ten umożliwia przesłanie zdjęć oferty na serwer. Pamiętaj, że każde zdjęcie z tą samą nazwą zostanie zastąpione nowym. Zwróć także uwagę, że ten formularz nie umożliwia transferu na serwer zdjęć konkretnego przedmiotu rezerwacji lub loga oferty. Można tego dokonać z sekcji administracyjnej ofert.');
jr_define('_JOMRES_A_TABS_MISC','Różne');
jr_define('_JOMRES_A','Konfiguracja systemu');
jr_define('_JOMRES_A_GLOBALPFEATURES','Używaj globalnych cech ofert');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Ustaw Tak, jeżeli chcesz wymusić używanie we wszystkich ofertach tylko cech zdefiniowanych przez administratora serwisu.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','Aby powiązać cechę z ikoną, należy najpierw przetransferować na serwer pliki ikon do katalogu /images/stories/jomres/pfeatures/ .');
jr_define('_JOMRES_A_ICON','Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wybierz wtyczkę wyszukiwania, której chcesz używać.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Twoje wyszukiwanie nie dało żadnych rezultatów. Zmień kryteria i spróbuj ponownie.</b>');
jr_define('_JOMRES_AREYOUSURE','Czy jesteś pewny/a?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezerwacja');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Kod CCV (kod bezpieczeństwa karty)');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Pokaż cennik w ramach strony');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informacja szczegółowa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknij aby sprawdzić dostępność');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Pokaż cennik');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Pokaż informację adresową pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Pokaż informację o ofercie pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Pokaż przedmioty rezerwacji i ich dostępność pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Pokaż cennik pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Stałe ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Średnie ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Wybierz model cennika, jaki chcesz używać.');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Masz do wyboru dwie metody kalkulacji cen. Pierwsza - stałe ceny - pozwala na oferowanie wielu różnych cenników, a cena za rezerwację jest stała przez cały okres rezerwacji. Jest to użyteczne, jeżeli chcesz oferować w tym samym okresie różne ceny, np za nocleg ze śniadaniem, nocleg z półwyżywieniem, nocleg z pełnym wyżywieniem. Wybierz - ceny średnie - jeżeli chcesz ustalić ceny zależnie od daty. Aplikacja znajdzie cenę dla każdego dnia w ramach razerwacji, doda je do siebie i wskaże uśrednioną cenę dla całego okresu rezerwacji.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Pozwól na wprowadzenie ostatniego dnia rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Ustaw Nie, jeśli akceptujesz fakt, że ostatnim dniem rezerwacji będzie dzień następny.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Długość skruconego opisu');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Podaj ilość znaków dla skróconego opisu na listach ofert.");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Własny format daty');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Ustaw Tak, jeżeli chcesz ustalić format daty zgodnie z funkcją date() (Zobacz <a href="http://www.php.net/manual/en/function.date.php">Tutaj</a>). Ustaw na Nie, jeżeli chcesz użyć formatu funkcji strftime() (zobacz <a href="http://www.php.net/manual/en/function.strftime.php">Tutaj</a> np. %b %d %Y .');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknij aby opublikować ofertę w portalu');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Wycofaj publikację');
jr_define('_JOMRES_A_GLOBALROOMTYPES','Używaj globalnych przedmiotów rezerwacji');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ustaw Tak, jeżeli chcesz aby wszystkie oferty używały tylko przedmiotów rezerwacji zdefiniowanych przez administratora.  Należy ustawić na Tak, jeżeli ma być możliwe wyszukiwanie wg przedmiotów rezerwacji.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','Aby powiązać przedmiot rezerwacji z ikoną, należy najpierw przetransferować na serwer pliki ikon do katalogu /images/stories/jomres/rmtypes/ .');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Błąd w kolorze tła.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Domyślny kraj w formularzu rezerwacji');
jr_define('_JOMRES_JAVASCRIPT_','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Użytkownicy mogą dodawać swoje oferty');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Ustaw Tak, jeżeli chcesz aby użytkownicy mogli dodawać swoje oferty bez interwencji administratora serwisu.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Proszę wybrać kraj i województwo swojej oferty.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Proszę wprowadzić dane oferty.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Oferta została dodana.');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Przykro nam, ale nie możesz dodać nowej oferty. Musisz być zarejestrowanym i zalogowanym użytkownikiem.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Dodana oferta:');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Właściciel:');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Kalendarz od początku roku');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Pokazywany kalendarz rozpoczyna się od początku bieżącego roku.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Ilość dostępnych przedmiotów rezerwacji');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Powrót do informacji o ofercie');
jr_define('_JOMRES_FRONT_ROOMTYPES','Przedmioty rezerwacji');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit przypadkowego wyszukiwania');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Pokaż odsyłacz do przelicznika walut Google w liście cenników');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Przelicz cene na:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','Pozwól użytkownikom używać edytora HTML');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz przedmiot rezerwacji z listy dostępnych. Kliknij dowolny dostępny przedmiot rezerwacji aby dodać go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz przedmiot rezerwacji z listy dostępnych. Kliknij dowolny dostępny przedmiot rezerwacji aby dodac go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Szczegóły rezerwacji');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Określ szczegóły Twojej rezerwacji.');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Dostępność');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Wybierz przedmiot rezerwacji');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Sprawdź tutaj, czy oferta jest dostępna w wybranym terminie.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Usługi dodatkowe');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wybierz dowolne usługi dodatkowe, które chcesz dodać do rezerwacji.');
jr_define('_JOMRES_COM_PERDAY','Za noc');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Dane bilingowe');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Podaj swoje dane.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostępne przedmioty rezerwacji');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Wybrane przedmioty rezerwacji');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br />Najwcześniejsza możliwa data początku rezerwacji:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Razem:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Usługi dodatkowe:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Podatek:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Zniżka:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Koszt całkowity:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Klientów');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknij, aby dodać ten przedmiot rezerwacji do listy wyboru');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknij, aby usunąć ten przedmiot rezerwacji z listy wyboru');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Rodzaje gości');
jr_define('_JOMRES_VARIANCES_TYPE','Rodzaj');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Rodzaje gości, np. dzieci w wieku 5 - 10 lat, student.');
jr_define('_JOMRES_VARIANCES_NOTES','Uwagi');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Uwagi dotyczące danego rodzaju klientów.');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maks');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksymalna ilość klientów jaka może być wybrana w formularzu rezerwacji.');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','Procent');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Suma jest procentem z sumy podstawowej skalkulowanej dla przedmiotu rezerwacji. Jeżeli ustawione na Nie, podana kwota będzie dodana lub odjęta od ceny rezerwacji przedmiotu rezerwacji.');
jr_define('_JOMRES_VARIANCES_POSNEG','Dodać wariant');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Kalkulowana kwota jest dodawana lub odejmowana od ceny rezerwacji przedmiotu rezerwacji. Ustaw na Nie, jeżeli chcesz, aby była to zniżka od ceny podstawowej.');
jr_define('_JOMRES_VARIANCES_VARIANCE','Wariant');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Wartość wariantu');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Rodzaj klientów został zmodyfikowany.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Rodzaj klientów został opublikowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Rodzaj klientów został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Rodzaj klientów został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Pokaż odsyłacz do listy przedmiotów rezerwacji na stronie informacyjnej oferty');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Pokaż tylko kalendarz dostępności/listę przedmiotów rezerwacji');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Ustaw Tak, jeżeli nie chcesz wyświetlać informacji o ofercie (listy przedmiotów rezerwacji i ich dostępności) w części informacyjnej oferty. Przeznaczone dla użytkowników mających oferty typu apartament, domek letniskowy itp.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimalna długość rezerwacji');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalna długość rezerwacji oferowana w formularzu rezerwacji (tym samym w ofercie).');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Numery przedmiotów rezerwacji w formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Nazwy przedmiotów rezerwacji w formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Nazwa cennika w formularzu rezerwacji');
jr_define('_JOMRES_ORDER','Kolejność');
jr_define('_JOMRES_REQUIREDFIELDS','Wymagane');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dni do początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimalna ilość dni, jaka musi pozostać między datą dokonywania razerwacji a datą realizacji przedmiotowej rezerwacji.');
jr_define('_JOMRES_DTV','Warianty typu daty');
jr_define('_JOMRES_DTV_DOW','Dzień tygodnia');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Domyślny rodzaj klientów');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Domyślny rodzaj klientów (o ile używasz rozróżnienia ich rodzajów), nadawany pierwszemu klientowi w formularzu rezerwacji.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezerwacje on-line tylko dla zarejestrowanych użytkowników');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Musisz być zarejestrowanym i zalogowanym użytkownikiem, aby móc rezerwować on-line. Kliknij tutaj, aby się zarejestrować lub zalogować.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Kolor odsyłaczy do aktualnych rezerwacji');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Ramki tygodni');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Przedmiot rezerwacji zarezerwowany');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Wyłączenie');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrąglaj przedpłaty do pełnych kwot');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Przedpłata jest wymagana');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Zapisz cennik jako opłaty tygodniowe');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Masz możliwość zapisania cennika jako opłaty dzienne lub tygodniowe. Jeżeli chcesz zapisać cennik tygodniowy ustaw na Tak.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena za tydzień');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Powtarzanie stałych dat rezerwacji co');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Jeżeli wybrano stałe daty rezerwacji daty te będą pokazywane na liście wyboru w trakcie procesu rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcja dla palących niedostępna.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Błędna data początku rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Błędna data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Okres rezerwacji jest zbyt krótki. Między datą początku rezerwacji i jej końca musi być minimum dni:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Twój okres rezerwacji wynosi:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Błędny rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wybierz odpowiednią ilość/rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Rezerwacja dotyczy zbyt dużej ilości osób dla dostępnego cennika.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Wybrano więcej przedmiotów rezerwacji niż ilość osób.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zbyt dużo osób w stosunku do dostępnych miejsc w tej ofercie.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musisz wybrać więcej przedmiotów rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Wybierz przedmiot rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Wymagane jest imię.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Wymagane jest nazwisko.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Wymagany jest nr domu.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Wymagana jest nazwa ulicy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Wymagana jest nazwa miejscowości.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Wymagane jest województwo.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Wymagany jest kod pocztowy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Wymagany jest kraj.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Wymagany jest numer telefonu stacjonarnego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Wymagany jest numer telefonu komórkowego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Wymagany jest adres e-mail.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Adres e-mail jest błędny.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nie udało się sprawdzić adresu e-mail.');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Mamy jeszcze wolne miejsca.');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Jeszcze nie wybrano przedmiotu rezerwacji.');
jr_define('_JOMRES_BOOKING_NUMBER','Rezerwacja nr');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok dla rezerwacji, tło pola tekstowego');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Zmienne szablonu');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Uaktywnij, aby umożliwić wpisywanie zmiennych DHTML w szablonie strony. Pomocne, jeżeli chcesz widzieć, czy ten konkretny element jest dostępny w danym szablonie.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Kwota jest procentem');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ustaw Tak, jeżeli cena za pojedyncze wykorzystanie jest procentem pełnej ceny. Jeżeli Nie, to cena zostanie ustalona kwotowo.');
jr_define('_JOMRES_COM_LIMITROOMSLIST','Ograniczenie dostępności przedmiotów rezerwacji/cenników');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Wprowadź tą daną aby ograniczyć ilość dostępnych przedmiotów rezerwacji i cenników, pokazywanych w formularzu rezerwacji. Jeżeli nie chcesz ograniczenia, ustaw na zero.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktualnie brak wolnych miejsc.');
jr_define('_JOMRES_BOOKITNOW','Zarezerwuj teraz');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Globalny tryb edycji');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Jeśli Tak, w ofertach zastosowane zostaną teksty globalne.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Globalny symbol waluty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent owinięty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ustaw Tak, jeśli moduł i nagłówek nie mają być widoczne.');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Manager');
jr_define('_JOMRES_COM_WEEKENDONLY','Tylko w weekendy');
jr_define('_JOMRES_COM_WEEKENDDAYS','Dni weekendowe');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Ustaw ceny w dni weekendowe.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Wybierz swój kraj przed dodaniem jakichkolwiek informacji.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Zapisz zmiany przed wysłaniem zdjęcia.');
jr_define('_JOMRES_TARIFFSFROM','Ceny już od');
jr_define('_JOMRES_SEARCH_ALL','Wszystko');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Szukaj według krajów');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Szukaj według województw');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Szukaj wg miejscowości');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Szukaj wg cech');
jr_define('_JOMRES_SEARCH_BUTTON','Szukaj');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Wpisz szukane słowo i naciśnij przycisk.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Wyszukaj');
jr_define('_JOMRES_SEARCH_AVL_INFO','Podaj datę początku i końca rezerwacji a następnie naciśnij przycisk, aby znaleźć oferty dostępne w wybranym zakresie dat.');
jr_define('_JOMRES_SEARCH_PTYPES','Lista wszystkich przedmiotów rezerwacji dla tego rodzaju ofert.');
jr_define('_JOMRES_SEARCH_RTYPES','Lista wszystkich rodzajów ofert dla tego przedmiotu rezerwacji.');
jr_define('_JOMRES_SORTORDER_DEFAULT','Domyślnie');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Nazwa oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Województwo oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Miejscowość oferty');
jr_define('_JOMRES_SORTORDER_STARS','Ilość gwiazdek');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Lista ofert');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Szczegóły');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Formularz rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Zaktualizuj swoje dane adresowe');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Ponowne sprawdzanie dostępności przedmiotu rezerwacji (wybór przedmiotu rezerwacji zostanie zresetowany).');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Ponowne sprawdzanie dostępności');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modyfikacja dodatkowego wyposażenia w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Zmiana wybranego przedmiotu rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Aktualizacja danych adresowych w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Jedno lub więcej pól adresowych jest wypełnionych nieprawidłowo.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Zdjęcie przedmiotu rezerwacji');
jr_define('_JOMRES_CURRENCYFORMAT','Kalkulator');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Zarządzanie opcjami zdjęć');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opcje wyszukiwania');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Rodzaje operacji');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','Brak wpisów. Jest to normalne, trzeba ręcznie modyfikować jomres.php by wywołać logowania.');
jr_define('JOMRES_COM_A_MESSAGE','Wiadomość');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Podstawowy');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Rozszerzony');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Zaawansowany');
jr_define('JOMRES_COM_A_TARIFFMODE','Tryb konfiguracji cen');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Ostrzeżenie! Przełączanie pomiędzy różnymi trybami konfiguracji cen może spowodować utratę danych, przeczytaj poniższe uwagi.</b>
					<br /><br />
					Dostępne są trzy opcje możliwości konfiguracji cen.
					<ul>
					  <li>Tryb podstawowy - Będziesz miał jedną cenę dla każdego przedmiotu rezerwacji.</li>
					  <li>Rozszerzony - Można modyfikować cenę za każdy dzień i za każdy przedmiot rezerwacji w danym rodzaju oferty.</li>
					  <li>Zaawansowany - Dowolna możliwość kształtowania cen.</li>
					</ul>");

jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','lista przedmiotów rezerwacji na stronie szczegółów oferty');
jr_define('JOMRES_PROPERTYTYPE','Rodzaj oferty');
jr_define('JOMRES_COM_A_SRPONLY','Tylko SRP');
jr_define('JOMRES_MAXPEOPLEINROOM','Maks klientów dla przedmiotu rezerwacji');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Maks klientów dla rezerwacji');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Dodaj notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Edytuj notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Usuń notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Zobacz notatki');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Notatka została dodana.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notatka została zmieniona.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notatka została usunięta.');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','Moje opcje');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Zobacz rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Moje ulubione');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Nie dodano jeszcze żadnych ulubionych.');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Dodaj do ulubionych');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Rodzaj oferty');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Oferta na stronie');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Last minute');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Aktywny');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ta opcja pozwala włączyć i dynamicznie skonfigurować ceny za przedmioty rezerwacji.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Funkcja umożliwia przyciągnięcie klientów do przedmiotów rezerwacji które mogłyby być pominięte i niezarezerwowane w danym czasie. Włączenie i konfiguracja opcji pozwala zaoferować regulację cen na podstawie liczby przedmiotów rezerwacji, które są dostępne w danym dniu. Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny przedmiotów rezerwacji zostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu przedmiotów rezerwacji które mogą być dostępne przed zastosowaniem danego rabatu.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Ilość dni (liczba dni pomiędzy datą początku rezerwacji i dniem dzisiejszym)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Przedmioty rezerwacji zajęte w < 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Przedmioty rezerwacji zajęte w < 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Przedmioty rezerwacji zajęte w < 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Przedmioty rezerwacji zajęte w < 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabat %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' została odrzucona z ');
jr_define('_JOMCOMP_WISEPRICE_TO',' do ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED','Podsumowanie Twojej płatności.');
jr_define('JOMRES_COM_A_MAPSKEY','Klucz API map Google');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Klucz API map Google można wygenerować tu: <a href="https://code.google.com/apis/consol" target="_blank">Mapy Google</a>. Po jego wprowadzeniu mapy będą wyświetlane na stronie szczegółów danej oferty.');
jr_define('JOMRES_COM_A_USE_SSL','SSL w formularzu rezerwacji');
jr_define('JOMRES_COM_A_USE_SSL_DESC','Musisz się upewnić, że masz ważny certyfikat SSL dla');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktywny?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Ustaw Tak, jeśli chcesz zaoferować oferty Last minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Ilość dni');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Jeśli rezerwacja zostanie wykonana i data początku rezerwacji jest tylko X dni od daty dokonania rezerwacji zostanie udzielony rabat.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabat');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','W procentach');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Rabat został zastosowany do tej rezerwacji.');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Cena rezerwacji została zmniejszona o: ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Oferta Last Minute ze zniżkami od : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','%, dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE','% lub więcej dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Rezerwuj teraz, aby skorzystać z tej oferty.');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Więcej info o cenach');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Ustaw Tak, aby pokazać bardziej szczegółowe informacje cen w szczegółach ofert w oknie popup.');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimum opcji konfiguracyjnych');
jr_define('_JOMCOMP_AMEND','Zmień rezerwacje - Wybór oferty');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Wybór nowej oferty');
jr_define('_JOMCOMP_AMEND_HEADER','Pierwotne zamówienie:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Kałcja wpłacona');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Kałcja nie wpłacona');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Zastąp całkowicie');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Całkowity depozyt');
jr_define('_JRPORTAL_CANCEL','Anuluj');
jr_define('_JRPORTAL_CPANEL','Mój kokpit');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Domyślna wysokość prowizji');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Wybierz domyślną wysokość prowizji stosowanej dla podstawowych ofert.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','Lista prowizji');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Prowizje');
jr_define('_JRPORTAL_CRATE_TITLE','Tytuł');
jr_define('_JRPORTAL_CRATE_TYPE','Typ');
jr_define('_JRPORTAL_CRATE_VALUE','Wysokość prowizji');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Kod waluty');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','Lista ofert');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nazwa oferty');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adres oferty');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Oferty które mają kolor tła czerwony jeszcze nie zostały zatwierdzone.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statystyki');
jr_define('_JRPORTAL_STATS_STATTYPE','Statystyka dla:');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Oferta - Kliknięcia');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Widok ofert');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Liczba rezerwacji');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Wartość rezerwacji');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Szacunkowa prowizja');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Wysokość prowizji');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id oferty');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id klienta');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id partnera');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id faktury');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Rezerwacja całkowita');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id umowy');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Nr umowy');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kod waluty');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Utworzona');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiwizacja');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Data archiwizacji');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Dodaj element do warunków umowy');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Zarządzanie fakturami');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Powiązane oferty (jeśli dotyczy)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Wartość');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Opis');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Pomyślnie wstawiony element rozliczeniowy w");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Zobacz zlecenia");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Nie udało się wprowadzić elementu rozliczeniowego w");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Nie ustawiono wartości projektu ustawy.");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Możesz mieć specyficzne pliki językowe dla różnych rodzajów ofert. Ustawiając opis z nazwą podkatalogu, np. "yachtbrokerage" i kopiując plik językowy do tego podfolderu. Następnie można zmodyfikować ten plik językowy dla danego typu ofert np. domki letniskowe i tp.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Nie możesz usunąć tej oferty ponieważ jest to podstawowa oferta do której masz dostęp. Jeśli chcesz ją wyłączyć, skorzystaj z funkcji nie-publikowania w pasku narzędzi.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Jeśli jest to instalacja demo i zamierzasz uaktualnić system do Jomres Solo (tylko obsługa jednej oferty) należy utworzyć nową ofertę a następnie usunąć ją przed zmianą klucza licencyjnego do wersji Solo.');
jr_define('_JOMRES_COM_EMAILERRORS',"Wiadomości e-mail dziennika błędów");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Ustaw Tak, jeśli chcesz automatycznie przesyłać dziennik błędów do jomres.net . Pozwala to błyskawicznie reagować na raportowane błędy i usuwać je zanim wykryjesz ich istnienie. Uwaga! Ta funkcja jest wyłączona na 'localhost'.");
jr_define('_JOMRES_COM_ISTHISANMRP',"Czy to oferta typu hotel/pensjonat");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Opcje konfiguracji różnią się w zależności czy są to wynajmowane pokoje w ofercie (np. hotel) lub cała oferta (np. domek letniskowy). Wybierz MRP jeśli oferujesz wynajem pokoii w ofercie, wybierz SRP, jeśli oferujesz do wynajęcia całą ofertę.");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"Użyj sprawdzania adresu e-mail?");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Wymusza ściślejszą kontrolę wysyłki wiadomości e-mail. Niektóre bezpieczne serwery WWW zgłoszą błąd 500 (wewnętrzny błąd serwera) przy próbie wysłania wiadomości na nieistniejący adres e-mail. Ustawienie to pozwala na wykorzystanie funkcji checkdnsrr w php przed przystąpieniem do wysyłki wiadomości, zapobiegając wyświetlaniu błędu 500.");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Pełne zakwaterowanie");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"Noc/y");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"Za przedmiot rezerwacji");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Usługi dodatkowe");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Podsumowanie płatności");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Proszę przeczytać i zaakceptować");
jr_define('_JOMRES_CONFIRMATION_HEADER',"Podsumowanie rezerwacji jest pokazane poniżej.
					<br />
					Aby dokonać zmian, kliknij przycisk 'Zmień rezerwacje'.");

jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"Jeśli musisz zmienić jakiekolwiek z powyższych informacji kliknij w przycisk.");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Zmień dane rezerwacji");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"W miejscu tym można wpisać dodatkowe informacje dla personelu.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potwierdzam, że powyższe informacje są poprawne i akceptuję");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"za osobę za noc");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Domyślny plik językowy");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Wybierz domyślny plik językowy jeśli język ten nie został ustawiony przez JoomFish.");

if (!defined('_PN_OF'))
	jr_define('_PN_OF','z');

if (!defined('_PN_START'))
	jr_define('_PN_START','Start');

if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Wstecz');

if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Dalej');

if (!defined('_PN_END'))
	jr_define('_PN_END','Koniec');

if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Wyniki');

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Zauważ, że nie jest to formularz rezerwacji.
					<br />
					Proszę wpisać wiadomość, którą chcesz wysłać do ');

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Badanie ofert od');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Dziękujemy za kontakt z nami. Twoja wiadomość została wysłana do właściciela tej oferty i na Twój adres e-mail. Spodziewaj się szybkiej odpowiedzi.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' w sprawie ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Wpisz znaki widoczne na obrazku');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nie mogę odczytać znaków. Generuj nowe.');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Wyślij');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nowy obrazek');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Zapytanie');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Proszę wybrać odpowiedni przedmiot rezerwacji z listy po prawej.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Przedmioty rezerwacji min już wybrane');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimalna liczba przedmiotów rezerwacji już wybranych w rezerwacji przed cena/przedmiot rezerwacji typu combo może być oferowany. Pozwala to mieć zniżki gdy więcej niż przedmiotów rezerwacji X są');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Przedmioty rezerwacji max już wybrane');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maksymalna liczba przedmiotów rezerwacji już wybranych w rezerwacji przed cena/przedmiot rezerwacji combo nie są już oferowane. Umożliwia zaprzestanie oferowania tego typu przedmiotu rezerwacji/ceny.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC',' !!! Należy pamiętać, że pojedyncze osobowej ustalonej tutaj nie będzie używany, jeśli pojedyncze Suppliments Person są ustawione na Tak w ogólnej konfiguracji. Ustawienia tutaj są alternatywą dla zryczałtowanych pojedynczych Suppliements osobą, nie dodatek do mieszkania Stopa SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Dostępne");
jr_define('_JOMRES_AVLCAL_QUARTER',"Ruszyła rezerwacja");
jr_define('_JOMRES_AVLCAL_HALF',"Połowa już zarezerwowana");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Większość już zarezerwowana");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Komplet rezerwacji");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Prefix URL');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','To jest pierwszy element wyświetlany po nazwie domeny - zmień go jeśli potrzebujesz.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Alias oferty');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','Alias do strony oferty.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Alias rezerwacji');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','Alias do strony rezerwacji.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Alias strony wyszukiwania');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','Alias do strony wyszukiwania.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Dodaj kraj do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','Dodaje kraj do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Dodaj województwo do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','Dodaje województwo do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Dodaj miejscowość do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','Dodaje miejscowość do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Dodaj rodzaj oferty do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','Dodaje rodzaj oferty do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Dodaj nazwę oferty do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','Dodaje nazwę oferty do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Dołącz ID do nazwy oferty w URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Jeśli nazwa oferty jest ustawiona na Nie, to ID nie będzie używany. Jeśli jest włączony to URL będzie taki ...moja-oferta-1 .');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Struktura URL Szukaj - Dodaj kraj do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','Dodaje kraj do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Struktura URL Szukaj - Kraj domyślny');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Jeśli wszystkie oferty są w jednym kraju, to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu kraj domyślny jeśli chcesz wyświetlić go w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Struktura URL Szukaj - Dodaj województwo do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','Dodaje województwo do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Struktura URL Szukaj - Województwo domyślne');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Jeśli wszystkie oferty są w jednym województwie to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu województwo domyślne jeśli chcesz wyświetlić je w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Struktura URL Szukaj - Dodaj miejscowość do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','Dodaje miejscowość do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Struktura URL Szukaj - Miejscowość domyślna');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','Jeśli wszystkie oferty są w jednej miejscowości to nie będzie ona wyświetlana w URL wyniku szukania. Wprowadź tu miejscowość domyślną jeśli chcesz wyświetlić ją w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Struktura URL Szukaj - Rodzaj oferty');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','Dodaje rodzaj oferty do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Struktura URL Szukaj - Domyślny rodzaj oferty');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Używany w URL, jeśli poszukiwanie jest dla wszystkich rodzajów ofert.');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Komponent she404sef nie jest zainstalowany. Czy masz przekopiowane '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php do '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Po zainstalowaniu sh404sef i/lub skopiowaniu pliku, będzie można skonfigurować adresy URL SEF tutaj.');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetekcja języka kalendarzy');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Włącz automatyczne wykrywanie języka dla kalendarzy. Jeśli nie zostanie rozpoznany automatycznie wtedy powróci do języka skonfigurowanego poniżej.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dni');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per osoba per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per osoba per dzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per osoba per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dni (min dni)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dni X wybrany przedmiot rezerwacji');
jr_define('_JOMRES_REGISTRYREBUILD','Odbuduj rejestr wtyczek');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalnie rejestr wtyczek Jomres jest przebudowywany automatycznie przy wyświetlaniu Plugin Manager i dodawaniu lub usuwaniu wtyczki, jednak możliwe jest, że nie można wykorzystać tych funkcji z jakiegoś powodu, więc można użyć tej funkcji, aby odbudować rejestr ręcznie. Jeśli masz dostęp do Plugin Manager i Uaktualnień wtedy jest mało prawdopodobne, że będziesz musiał użyć tej funkcji. Możesz odbudować rejestr wtyczki w dowolnym momencie, dodać nowy dodatek i nie używać Plugin Manager.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Rejestr wtyczek został przebudowany poprawnie.');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Wystąpił błąd przy odbudowie rejestru wtyczek. Powinieneś sprawdzić błąd w dzienniku Jomres, aby sprawdzić, czy istnieje zapis mówiący o tym, co spowodowało błąd.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Szukaj w przedziale cenowym.');
jr_define('JOMRES_WORD_SAVING','Zapisywanie...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Użyj kompozytowych szczegółów ofert');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Wszystkie szczegóły wyjścia są przesyłane do jednego szablonu pliku (composite_property_details.html). Jeśli nie chcesz używać tej funkcji ustaw ją na Nie (tylko istniejący użytkownicy powinni ustawić na Nie, nowi użytkownicy będą prawdopodobnie chcieli pozostawić ustawiony na Tak).');

jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','To jest lista wszystkich użytkowników w systemie. Użytkownicy bez własnych ofert oznaczeni są ikoną Gość. Manager ofert oznaczeni są ikoną Satelity/Manager.
					<br />
					W czasie pierwszej instalacji Jomres "admin" jest dodawany automatycznie jako manager ofert i jest autoryzowanym użytkownikiem.
					<br />
					Super manager musi być przypisany do przynajmniej jednej oferty inaczej zobaczy błąd podczas próby zalogowania się i korzystania z systemu.
					<br />
					Użytkownik zalogowany może edytować swoje profile, przypisać je do oferty lub dać im rangę Super Manager.
					<br />
					Aby autoryzować użytkownika, kliknij na czerwony krzyżyk obok jego nazwy. Aby zdeautoryzować użytkownika, kliknij zielone kleszcze.
					<br />
					Możesz przypisywać użytkowników do specyficznych właściwości, dawać im uprawnienia Super Manager etc. Użytkownicy, którzy sami dodali swoje oferty będą automatycznie przypisani do tych ofert jako Super Manager. Otrzymają automatycznie pełne prawa i będą mieli do dyspozycji wszystkie opcje konfiguracji, nawet jeśli są one zminimalizowane w ustawieniach konfiguracji systemu.');

jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Tutaj możesz przypisać managera do wybranych ofert. Mają oni prawo do co najmniej jednej oferty w przeciwnym razie będą widzieli błąd, przy logowaniu. Aby dać rangę Recepcjonistka/Manager w ofercie, upewnij się, że Super Manager nie jest ustawiony na Tak.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Nie ma jeszcze żadnych rezerwacji.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Rodzaj oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edytuj rodzaj oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Wybierz rodzaj oferty');
jr_define('_JOMRES_COM_LOGGING','Logi systemu');
jr_define('_JOMRES_COM_LOGGING_WARNING','Opcje te pozwalają włączyć/wyłączyć rejestrowanie błędów w systemie Jomres. Rejestrowanie błędów jest zawsze włączone, ale pozostałe dzienniki mogą być włączane i wyłączane. <b>Włączenie dzienników błędów dla większej ilości funkcji jest wyłącznie sposobem na łatwiejsze debugowanie, niesie jednak ze sobą duże zagrożenie bezpieczeństwa.</b> Osoby trzecie mogą bez upoważnienia uzyskać dostęp do logów. Dlatego zaleca się pozostawienie dodatkowych dzienników błędów przez większość czasu jako wyłączone. Jeśli masz włączone rejestrowanie, po wyłączeniu ich należy również upewnić, się że folder <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> nie zawiera żadnych starych plików dziennika. Rejestrowanie dodatkowych dzienników znacząco może spowolnić system, gdyż gromadzi wiele informacji.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Logi silnika rezerwacji');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Logi bramek płatności');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Logi zapytań przychodzących');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Logi dodatkowe systemu');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Twoje zapytanie...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Obraz przedmiotu rezerwacji w formularzu rezerwacji');
jr_define('_JOMRES_COM_A_LISTLIMIT','Limit ofert na liście');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','Liczba ofert pokazywanych na stronie wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Wyszukiwarka');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Zintegrowana funkcja wyszukiwania pozwala użytkownikom przeszukiwać oferty zgodnie z zestawem funkcji. Jeśli już korzystałeś z funkcji wyszukiwania w Jomres w Joomla zapoznaj się z tymi ustawieniami.
					<br />
					Funkcja ta umożliwia obsługę wyszukiwania w Jomres dla tych użytkowników, którzy nie chcą używać dodatkowych modułów wyszukiwania Joomla.
					<br />
					Pamiętaj, że jeśli zdecydujesz się szukać czegoś za pośrednictwem linku (nie listy rozwijanej), inne opcje wyszukiwania nie będą realizowane, tylko kliknięty link.
					<br />
					Zauważ, że domyślnie układ tej zintegrowanej wyszukiwarki nie jest ładny. Jest tak ponieważ plik szablonu musi zawierać wszystkie możliwe opcje, a niektóre z nich są sprzeczne. Aby poprawić wygląd i dostosować go do własnych preferencji, trzeba zmienić <b>srch.html</b> w katalogu <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b>.');

jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Włącz integracje wyszukiwarki');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Jeśli Tak, to każde zapytanie do Jomres pokazuje listę ofert i wszystkie opcje wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Korzystaj z kolumn');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Każda opcja wyszukiwania pokazywana jako link pojawi się w kolumnach.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Ilość kolumn");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Liczba ikon funkcji, które mają być wyświetlane przed dodaniem br i przejściem do nowego wiersza.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Wyszukiwanie według województwa (wybór z listy rozwijanej)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Wyszukiwanie z listy rozwijanej, filtrowanie według krajów/województw/miejscowości. Jeśli zamierzasz korzystać z tej funkcji to nie używaj opcji wyszukiwania województw/miejscowości poniżej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Szukaj według nazwy oferty");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Szukanie przez wpisanie nazwy oferty.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Szukaj wg miejscowości lub województwa");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Szukanie przez wpisanie nazwy miejscowości lub województwa.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Wyszukiwanie według rodzaju ofert");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Szukanie przez wpisanie rodzaju oferty.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Szukaj według przedmiotu rezerwacji");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Szukanie przez wpisanie przedmiotu rezerwacji.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Szukanie według cechy");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Szukanie przez wpisanie cechy.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako ikonki i pola wyboru.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Szukaj w opisie");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Szukanie przez wpisanie frazy kluczowej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Szukaj według dostępności");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Szukanie przez wpisanie dostępności.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Szukaj w przedziałach cenowych");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Szukanie przez wpisanie przedziałów cenowych.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Taryfy w przedziale cenowym");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Sprawdzone zostaną wszystkie ceny i wyświetlone wyłącznie te mieszczące się w zdefiniowanych przedziałach.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Domyślnie, jeśli oferta nie została wybrana zostanie przeprowadzone wyszukiwanie. Jeżeli wyniki wyszukiwania nie zostały wywołane przez moduł wyszukiwania, wyszukiwanie będzie produkować losowe wyniki (celowo).');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron i dzienniki');
jr_define('_JOMRES_COM_A_CRON_DESC','Funkcjonalność ta jest wymagana dla fakturowania i prawidłowej obsługi prowizji.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Ręczne uruchamianie zadań crona korzystając z linków widocznych poniżej. Zauważ, że kliknięcie w link uruchamia zadanie, wyświetlona pusta strona nie jest błędem.');

global $jomresConfig_secret;

jr_define('_JOMRES_COM_A_CRON_METHOD','Metoda');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Jeśli nie masz dostępu do crona, ustaw funkcję uruchamiania cyklicznych zadań wbudowanych w Jomres. W przeciwnym razie ustaw uruchamianie zadań przez Twojego crona na serwerze.
					<br />
					<i>curl -s ".JOMRES_SITEPAGE_URL_NOHTML."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i>");

jr_define('_JOMRES_COM_A_CRON_LOGGING','Wyświetlanie logowania w przeglądarce');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Działa tylko jeśli metoda jest ustawiona na System Jomres.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logowanie włączone');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ustaw Tak by włączyć logowanie. Wyniki dzienników będą dostępne poniżej.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Pełne rejestrowanie');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Dużo logując wyjście');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Edycja szablonów');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','Ta funkcja pozwala edytować szablony frontu Jomres na serwerze i zapisywanie wyników do bazy danych.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nazwa szablonu');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Szablon został dostosowany');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Własne pola');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Tutaj można określić niestandardowe pola, które będą widoczne w formularzu rezerwacji.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nazwa pola (bez spacji)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Wartość domyślna');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Opis');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Wymagane');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maksymalna ilość');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Jeśli maksymalna ilość jest ustawiona na większy niż 1 to goście otrzymają możliwość wyboru z listy rozwijanej.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Faktury");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Podatki");
jr_define('_JRPORTAL_TAXRATES_CODE',"Ustawienia podatku");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Opis podatku");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Nie można usunąć tej stawki podatkowej.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Cena");
jr_define('_JRPORTAL_INVOICES_TITLE',"Faktury rezerwacji");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Niezapłacone");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Zapłacone");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Anulowane");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Oczekujące");
jr_define('_JRPORTAL_INVOICES_USER',"Użytkownik");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Zwiększona");
jr_define('_JRPORTAL_INVOICES_DUE',"Ze względu");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subskrypcja");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Znakomita całkowita");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Powtarzające się całkowite");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Częstotliwość powtarzania");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Cyklicznie dzień miesiąca");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Kod waluty");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Pozycje");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nazwa");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Opis");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Początkowa cena");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Początkowa ilość");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Początkowy rabat");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Początkowa całkowita");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Powtarzająca się cena");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Powtarzająca się ilość");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Powtarzający się rabat");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Powtarzająca się całkowita");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Kod podatku");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Opis podatku");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Stawka podatku");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Ustawienia PayPal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Kod waluty (np. PLN)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Użyj piaskownicy");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Twój adres e-mail PayPal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Uwaga! Aby korzystać z PayPal musisz zalogować się do swojego konta PayPal i wyłączyć Autoreturn. (Profil/WWW Preferencje płatności), a zestaw IPN (Profil / Instant Preferencje powiadomienia o płatności), aby w adresie URL:
					<br />
					<b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");

jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Ta faktura jest już wymagalna. Proszę kliknąć przycisk i opłacić ją przez system PayPal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Zastąpić standardowe ustawienia");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Jeśli opcja ustawień nadpisywania PayPal jest ustawiona na Tak konfiguracja ogólna nie pokazuje żadnych ustawień bramki.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Moje faktury");
jr_define('_JRPORTAL_COUPONS_TITLE',"Kody rabatowe");
jr_define('_JRPORTAL_COUPONS_DESC',"Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji. Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.");
jr_define('_JRPORTAL_COUPONS_CODE',"Kod kuponu");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Ważny od");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Ważny do");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Wysokość rabatu");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Rabat procentowy");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Tylko przedmiot rezerwacji");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Rabat ma zastosowanie tylko do kosztów przedmiotu rezerwacji. Jeśli Nie, to rabat ma zastosowanie do całego kosztu rezerwacji.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Błąd SQL podczas próby usunięcia/dodania kuponu.");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Jeśli masz kod promocyjny, wprowadź go w polu i kliknij przycisk "Zapisz kod".');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Zapisz kod');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Kod został zapisany dla rezerwacji.');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Nie znaleziono takiego kodu rabatowego.');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Wartość kodu rabatowego');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Rezerwacja promocyjna. Kod kuponu/Wartość rabatu/Ustawienia kuponu:');
jr_define('_JOMRES_COM_CACHING','Użyj funkcji buforowania Jomres');
jr_define('_JOMRES_COM_CACHING_DESC','Ustaw na Nie, aby wyłączyć funkcje buforowania Jomres.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Wybierz język');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Opcje językowe muszą być wybrane z listy wyboru języka.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Pokaż wybór języka z menu rozwijanego');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Anulowane rezerwacje');
jr_define('_JRPORTAL_NEWUSER_DEAR',"Drogi");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Dziękujemy za rejestrację.");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Nazwa użytkownika:");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Twoje hasło:");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Zaloguj się aby zobaczyć swoje rezerwacje");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kod rabatowy został zapisany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kod rabatowy został usunięty.');
jr_define('_JOMRES_COM_GROWL','Użyj wiadomości Jomres');
jr_define('_JOMRES_COM_GROWL_DESC','Aktualizacje informacji zwrotnej w formie wiadomości Javascript, gdy strona jest przeładowana, użyj tej opcji, aby włączyć/wyłączyć tę funkcję.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"SMS Clickatell");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Login");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Hasło");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API ID");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Numer telefonu komórkowego dla powiadomień SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Proszę używać formatu 'kod kraju, numer telefonu'. Na przykład polski numer telefonu komórkowego '48500600700'. Zostaw puste jeśli nie chcesz otrzymywać żadnych powiadomień SMS.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"<b>Oczywiście, nie można używać/testować tej bramki na localhost, trzeba to zrobić na produkcyjnym serwerze.</b>
					<br /><br />
					Aby korzystać z bramki Clickatell potrzebne jest konto Clickatell i co najmniej jedno zarejestrowane połączenie API między serwisem i bramką. Oto jak uruchomić Clickatel:
					<br /><br />
					<b>Krok 1 - Rejestracja na Clickatell.com</b>
					<br />
					Jeśli nie masz jeszcze konta w Clickatell, musisz się zarejestrować. W przeciwnym razie przejdź do kroku 2.
					<br />
					* Przejdź do http://www.clickatell.com/products/sms_gateway.php i wybierz odpowiedni subproduct API, metoda połączenia), którą chcesz użyć (Clickatell Centralny API).
					<br />
					* Kliknij na link rejestracji. 
					<br />
					* Wypełnij formularz rejestracyjny.
					<br />
					Po pomyślnym przesłaniu formularza zostaniesz automatycznie zalogowany na nowe konto i przeniesiony na stronę, gdzie można dodawać wybrane połączenia API.
					<br />
					<b>Krok 2 - Dodaj połączenia API (sub-produkt)</b>
					<br />
					Jeżeli nie jesteś jeszcze zalogowany na swoim koncie, należy to zrobić na http://www.clickatell.com/login.php .
					<br />
					* Wybierz \"Manage my Products\" z górnego menu.
					<br />
					* Wybierz typ połączenia API, który chcesz użyć (HTTP API) z rozwijanego menu ('Dodaj połączenie').
					<br />
					* Wypełnij formularz. Upewnij się, że możesz wejść do zablokowanego IP (IP tego serwera), ustaw oddzwanianie do HTTP POST. Musisz ustawić IP oddzwonienia ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback i identyfikator użytkownika oraz hasło.
					 <br />
					Jeśli zarejestrujesz więcej niż jedno połączenie API nazwę i opis należy wprowadzić dla każdego z nich i muszą być one unikalne - nie można mieć kilku interfejsów API o tej samej nazwie.
					<br />
					Po pomyślnym wysłaniu formularza wyświetlone zostaną dane uwierzytelniające. Każde połączenie ma unikalne API ID (api_id). Te dane uwierzytelniania są wymagane podczas podłączania do bramki Clickatell, aby możliwe było wysłanie wiadomości SMS.
					<br /><br />
					Użyj nazwy użytkownika, hasła i api_id i wypełnij pola poniżej. 
					<br /><br />");

jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Lista rezerwacji przedmiotu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Lista rezerwacji przedmiotu rezerwacji dla maks klientów');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Należy pamiętać, że ceny podane za przedmiot rezerwacji są szacunkowe i pełna cena rezerwacji nie będzie obliczana, dopóki nie jest dodany przedmiot lub przedmioty rezerwacji do wyboru.");
jr_define('_JOMRES_LASTEDITED_DB','Ostatnio edytowany szablon w bazie danych');
jr_define('_JOMRES_LASTEDITED_DISK','Ostatnio edytowany szablon na dysku serwera');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Ostrzeżenie! Szablon bazy danych');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Szablon bazy danych może być nieaktualny.');
jr_define('_JOMRES_LASTEDITED_WARNING','Wykryto, że szablon przechowywany w bazie danych <strong><i>może</i></strong> być starszy niż przechowywany na dysku. W takim przypadku możliwe jest, że szablon został zaktualizowany w nowszej wersji Jomres. Jeśli tak jest, to możliwe, że korzystanie z nowych, dodanych funkcji może być niemożliwe, a istniejące funkcje mogą nie działać zgodnie z oczekiwaniami. Należy porównać szablon z bazy z tym na dysku i upewnić, się że nie brakuje nowej funkcji.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Pakiety abonamentowe");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nazwa");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Opis");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Opublikowany");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Częstotliwość");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Okres testowy");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Ilość próbna");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Całkowity koszt");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Ograniczyć przedmioty rezerwacji");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limit ofert");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Częstotliwość: M/Q/B/A - Monthly/Quarterly/Bianually/Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Okres testowy: 0 (zero) nie ustawiać, 1 (jeden miesiąc), 2 (dwa miesiące) itd.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subskrybcja");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Proszę wpisać/zaktualizować dane abonenta. Należy pamiętać, że wszystkie pola są wymagane.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Imię");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Nazwisko");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adres");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Kraj");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Kod pocztowy");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Abonament musi być ważny aby dodawać nowe oferty. Został zakupiony na");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2',"opublikowane.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Można zwiększyć liczbę ofert, które można tworzyć przez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>zakup pakietu abonamentowego tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4',"Użyłeś");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5',"sloty ofert.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Aby zobaczyć listę bieżących ofert kliknij <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Aby zobaczyć listę dostępnych pakietów abonamentowych kliknij <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Niestety, nie można opublikować tej oferty, osiągnięto maksymalną liczbę dostępnych slotów ofert w Twoim abonamencie.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Dziękujemy za zamówienie abonamentu. <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>Kliknij tutaj, aby kontynuować.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Z przykrością informujemy, że nie zdecydowałeś się zapisać w naszym serwisie. Daj nam znać, jeśli istnieje jakikolwiek sposób, w który możemy Ci pomóc.");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Przykro nam, ale nie spotkałem limitu liczby ofert które zostały opublikowane w tym systemie w dowolnym czasie. Można zwiększyć liczbę ofert które można publikować przez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>zakup większego pakietu abonamentowego tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Obsługa abonamentów");

jr_define('_JOMRES_COM_NEWUSER','Utwórz nowego użytkownika');
jr_define('_JOMRES_COM_NEWUSER_DESC','Utwórz nowe konto użytkownika.');
jr_define('_JOMRES_CLICKTOREGISTER','Dodaj nową ofertę');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktywne abonamenty");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id abonamentu");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Dziękujemy za rezerwacje - nowe dane użytkownika po");
jr_define('_JOMRES_LATLONG_DESC',"Użyj myszki do poruszania się po mapie, a następnie przeciągnij wskaźnik do lokalizacji oferty, aby ustawić długość i szerokość geograficzną.");
jr_define('_JOMRES_CONTROLPANEL','Mój kokpit');
jr_define('_JOMRES_COM_FAUXHEADERS','Nagłówki Jomres Javascript w BODY HTML?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Ustaw na Tak, jeśli masz problemy z konfliktem Mootools i Jomres jQuery w IE. To zmusi Jomres do wyprowadzania JavaScript w BODY zamiast w HEAD. Powinno to rozwiązać problem z jQuery i Mootools sprzecznymi ze sobą.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Pokaż fakturę');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Faktury rezerwacji');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Dodaj nową ofertę');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Ostrzeżenie:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Możesz mieć jeden darmowy pakiet abonamentowy w systemie. Jeśli chcesz, możesz ustawić pakiet by zarówno ilość próbna i koszt całkowity na 0,00.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Przykro nam, ale ID pakietu abonamentowego nie został rozpoznany.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Przykro nam, jesteś już zapisany do darmowego pakietu abonamentowego, nie można zapisać się do tego pakietu ponownie.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL',"Status <b>0:</b> Do czasu zapłaty <b>1:</b> Stworzony <b>2:</b> Anulowane <b>3:</b> Koniec.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Moje abonamenty");
jr_define('_JOMRES_COM_YOURBUSINESS','Firma');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','Nazwa firmy');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','NIP');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Numer budynku');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>UWAGA: Poniższe stawki podatkowe są przeznaczone do wykorzystania przez rynek amerykański. Jeśli chcesz skorzystać z podatku liniowego w miejscu zakwaterowania, należy wybrać stawkę podatku w opcji powyżej.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Faktura nr');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Wybierz daty, które chcesz zablokować w kalendarzu rezerwacji. Po wybraniu odpowiednich dat, kliknij przycisk "Zastosuj", aby ponownie sprawdzić dostępność.
					<br /><br />
					Jeżeli w ofercie istnieje jedna lub więcej rezerwacji w wybranym okresie, to nie będzie można zablokować możliwości rezerwacji w wybranym terminie.');

jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Przepraszamy, nie możesz zablokować rezerwacji tej oferty w wybranym terminie.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Możesz zablokować rezerwację tej oferty w wybranym terminie.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Twoja oferta jest skonfigurowana do pobierania płatności za osobę za noc, ale nie masz utworzonych lub opublikowanych żadnych rodzajów klientów. Należy stworzyć i opublikować jeden lub więcej rodzaj klientów.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Jeśli nie masz jeszcze skonfigurowanych cen, nie będzie można składać żadnych rezerwacji w Twojej ofercie.');
jr_define('_JOMRES_EDITINGMODE_ON','Tryb edycji włączony');
jr_define('_JOMRES_EDITINGMODE_OFF','Tryb edycji wyłączony');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Zmienne kwoty depozytów');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Zmienne kwoty depozytów pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Liczba dni, za które cała kwota zostanie pobrana jako depozyt.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Wyślij wiadomość e-mail na alternatywny adres');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Ustaw Tak, jeśli chcesz wysyłać wiadomości e-mail na alternatywny adres podany poniżej. Zostaw ustawione na Nie, aby wysyłać maile na adres określony w obszarze konfiguracji ofert.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternatywny adres e-mail.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Wiadomość e-mail z potwierdzeniem została wysłana. Możesz zamknąć to okno.');
jr_define('_JOMRES_REALESTATE_TITLE','Prawdziwy wykaz ofert');
jr_define('_JOMRES_REALESTATE_YESNO','Obsługa pojedyńczej oferty');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Ustaw Tak, jeśli oferójesz możliwość rezerwacji całej oferty (domek letniskowy), wybierz Nie, jeśli twoja oferta to hotel/pensjonat gdzie wynajmowane będą pomieszczenia.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Kontakt');
jr_define('_JOMRES_INVOICE_MARKASPAID','Oznacz faktury jako zapłacone');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Faktura oznaczona jako płatna');

jr_define('_JOMRES_APIKEY_REMAKE','Dodaj nowy klucz API');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Użyj Google dla pierwszych tłumaczeń');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','Funkcja ta jest nowa i eksperymentalna, więc używaj jej na własne ryzyko. Celem funkcji jest zapytanie narzędzia do tłumaczenia Google, by automatycznie skonfigurować tłumaczenia dla danej oferty.<br />');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Obsługa dla jednej oferty');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Jeśli opcja ta jest ustawiona na Tak, wtedy widok nakładki z Jomres dla użytkowników nieautoryzowanych jest znacznie uproszczony. Idealne jeśli chcesz mieć tylko jedną ofertę i przyjmować rezerwacje tylko dla niej.<br />');
jr_define('_JOMRES_HTMP_PURIFIER','Funkcja HTML oczyszczacz');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Włącz jeśli chcesz używać bibliotek oczyszczania HTML (http://htmlpurifier.org/). Biblioteka jest używana jako dodatkowa warstwa zabezpieczeń w kontaktach z danymi wejściowymi i wyjściowymi i zaleca się, aby pozostawić włączoną, jednak będzie to wymagało większej ilości pamięci.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Płatność końcowa');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Wartość');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Uwaga! Używasz globalnego trybu edycji. Jest to dobre rozwiązanie jeśli dobrze rozumiesz co oznacza ta funkcja. Jeśli nie jesteś pewien, czy należy używać Jomres w ten sposób, patrz <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">tryb edycji ręcznej</a> więcej informacji na ten temat.');
jr_define('_JOMRES_SUPPORTKEY','Kod wsparcia');
jr_define('_JOMRES_SUPPORTKEY_DESC','Kod wsparcia (znany również jako numer licencji). Umożliwia pobieranie dodatków dla Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Osobiste zniżki');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Ogranicz dodawanie ofert dla jednego kraju');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Można ograniczyć możliwość dodawania ofert dla jednego kraju, poprzez ustawienie tej opcji na Tak i ustawienie kraju w następnej opcji.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Oferty znajdują się w tym kraju');
jr_define('_JOMRES_JQUERYTHEME','Szablon graficzny');
jr_define('_JOMRES_JQUERYTHEME_DESC','Wybierz szablon graficzny wykorzystywany w ramach systemu Jomres.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Przykro nam, ale ta oferta nie jest obecnie dostępna.');
jr_define('_JOMRES_REVIEWS','Recenzje');
jr_define('_JOMRES_REVIEWS_TITLE','Tytuł recenzji');
jr_define('_JOMRES_REVIEWS_DATE','Recenzja dodana');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Brakuje jeszcze recenzji dla tej oferty.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Chcesz być pierwszą osobą, która wyrazi swoją opinię na temat tej oferty?');
jr_define('_JOMRES_REVIEWS_IAGREE','Zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_IDISAGREE','Nie zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Średnia ocena:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Suma głosów:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Dodaj nową recenzję');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Musisz być zalogowana/y aby dodać recenzję.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Powiedz nam co myślisz o tej ofercie:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Ten recenzent powiedział nam:');
jr_define('_JOMRES_REVIEWS_PROS','Plusy oferty:');
jr_define('_JOMRES_REVIEWS_CONS','Minusy oferty:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Dodał:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Napisz kolejną recenzję');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Przykro nam, ale nie możesz pisać recenzji na tej stronie.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Zobacz recenzje');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW','Klienci zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW','Klienci nie zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR','Klient zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','Klient nie zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Dziękujemy za podzielenie się opinią o tej ofercie.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Dziękujemy, ale już wyraziłaś/eś swoją opinię o tej ofercie.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Prosimy się upewnić, że wszystkie pola zostały wypełnione.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Prosimy podsumować swoją recenzję wpisując jej tytuł.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Prosimy wprowadzić bardziej szczegółowy komentarz w polu opisu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Prosimy wprowadzić plusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Prosimy wprowadzić minusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Prosimy ocenić jakość oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Prosimy ocenić stosunek ceny do jakości.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Prosimy ocenić uprzejmość personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Prosimy ocenić profesjonalizm personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Prosimy ocenić jakość dodatkowych usług.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Prosimy ocenić jakość dodatkowych usług w stosunku do ceny.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Podsumowanie recenzji');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Recenzja bardziej szczegółowo');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Dziękujemy za wyrażenie swojej opinii.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Dziękujemy za wyrażenie swojej opinii. Zostanie ona wkrótce opublikowana przez jednego z naszych moderatorów.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Użyj funkcji przeglądu Jomres');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatycznie publikuj recenzje');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Jeśli ustawisz na Nie będziesz musiał ręcznie publikować recenzje.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Recenzje w trybie testowym');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Oczywiście nie jest to idealne rozwiązanie w środowisku produkcyjnym.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Jest to lista wszystkich ofert. Aby zobaczyć recenzje oferty kliknij na tej ofercie. Następnie będziesz mógł opublikować lub usunąć recenzję.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Liczba nieopublikowanych recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Całkowita liczba recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publikowanie/Cofnięcie recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Usuń recenzję');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Raport recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Raporty recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Podaj swój raport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Zobaczyłaś/eś coś niewłaściwego? Zgłoś to nam, sprawdzimy to.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Wyślij');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Raport stworzony przez');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Raporty są publikowane przez użytkowników, którzy mogą nie zgadzać się z treścią przeglądu. Jedynym sposobem na usunięcie raportu jest usunięcie recenzję.');
jr_define('_JOMRES_REVIEWS_RATING','Oceny (1 = słaba, 10 = doskonała)');
jr_define('_JOMRES_REVIEWS_RATING_1','Jakość oferty');
jr_define('_JOMRES_REVIEWS_RATING_2','Stosunek ceny do jakości');
jr_define('_JOMRES_REVIEWS_RATING_3','Uprzejmość personelu');
jr_define('_JOMRES_REVIEWS_RATING_4','Profesjonalizm personelu');
jr_define('_JOMRES_REVIEWS_RATING_5','Jakość dodatkowych usług');
jr_define('_JOMRES_REVIEWS_RATING_6','Stosunek ceny do jakości dodatkowych usług');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Korekta dokonana przez:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Ukryj recenzje');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Formularz rezerwacji na stronie szczegółów oferty');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ustaw Tak, aby pokazać formularz rezerwacji na stronie szczegółów oferty. Jeśli ustawisz Nie, wówczas pojawi się link do formularza zamiast formularza rezerwacji.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Ceny ustawione łącznie z podatkiem');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Jeśli ceny ustalasz łącznie z podatkiem wybierz Tak.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','VAT - Usługi dodatkowe');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Dzień pól tygodnia? Można ustawić szybkość dla danego dnia tygodnia, po kliknięciu przycisku dzień tygodnia wszystkie dni tygodnia zostaną ustawione na tym kursie.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Zbieracze dat i stawek wejść pozwala ustawić jedną cenę dla danego zakresu dat. Wybierz datę rozpoczęcia i zakończenia, podaj cenę, a następnie kliknij przycisk "Ustaw ceny".');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Rozpocznij zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Zakończ zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Stawka');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Ustaw stawki');
jr_define('_JOMRES_PARTNERS_TITLE','Partnerzy');
jr_define('_JOMRES_CALENDAR_TODAY','Dzisiaj');
jr_define('_JOMRES_CALENDAR_PREV','Poprzedni');
jr_define('_JOMRES_CALENDAR_NEXT','Następny');
jr_define('_JOMRES_CALENDAR_RTL','Fałszywy');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Przedmiot rezerwacji');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','Klient');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','To jak mamy przypisane numery klientów do swoich przedmiotów rezerwacji. Jeśli chcesz zmienić ten przydział, będziesz musiał skontaktować się z personelem po dokonaniu rezerwacji. Dodatkowe opłaty mogą być zastosowane w przypadku zmiany rezerwacji.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Należy pamiętać, że oferta nie została jeszcze opublikowana. Odwiedzający nie będą mogli jej zobaczyć.");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Domyślna kolejność sortowania wyników');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Zmień tę opcję, aby zmienić domyślną kolejność prezentowania wyników wyszukiwania.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Pokaż wynik wyszukiwania na liście rozwijanej');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Styl listy przedmiotów rezerwacji');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','W formularzu rezerwacji, przy użyciu "Klasyczny" wyświetl styl, który oferuje pojedyncze przedmioty rezerwacji dla klientów. Z uwagi na przedmiot rezerwacji, klienci mogą wybrać liczbę przedmiotów rezerwacji X (np. 2 x podwójna).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Klasyczny');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Przedmioty rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','Sprawdzanie dostępności');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Przebudowa listy dostępnych przedmiotów rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Obliczanie sumy');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Aktualizacja została zakończona.');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Dzień rozpoczęcia tygodnia');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Tylko klienci danej oferty mogą dodawać recenzję');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Ustaw Tak, jeśli chcesz ograniczyć możliwość dodawania recenzji tylko do tych użytkowników, którzy byli już klientami danej oferty.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Za przedmiot rezerwacji');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Za klientów w przedmiocie rezerwacji');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Za klientów w rezerwacji');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Liczba przedmiotów rezerwacji');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Taryfa domyślna');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Dotyczy to tylko nowych taryf.");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Pokaż lata");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Określa liczbę lat pokazywanych podczas edycji taryf.");
jr_define('_JRPORTAL_MONTHS_LONG_0','Styczeń');
jr_define('_JRPORTAL_MONTHS_LONG_1','Luty');
jr_define('_JRPORTAL_MONTHS_LONG_2','Marzec');
jr_define('_JRPORTAL_MONTHS_LONG_3','Kwiecień');
jr_define('_JRPORTAL_MONTHS_LONG_4','Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5','Czerwiec');
jr_define('_JRPORTAL_MONTHS_LONG_6','Lipiec');
jr_define('_JRPORTAL_MONTHS_LONG_7','Sierpień');
jr_define('_JRPORTAL_MONTHS_LONG_8','Wrzesień');
jr_define('_JRPORTAL_MONTHS_LONG_9','Październik');
jr_define('_JRPORTAL_MONTHS_LONG_10','Listopad');
jr_define('_JRPORTAL_MONTHS_LONG_11','Grudzień');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Tryb zarządzania ofertami");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Istnieją różne tryby zarządzania ofertami w zależności od sposobu, który chcesz stosować w swoim biznesie.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Wynajem");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Wybierz wynajem jeśli chcesz oferować możliwość rezerwacji swojej oferty.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Aukcja");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Wybierz aukcję jeśli chcesz sprzedać jakiś przedmiot.");
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Ustaw Tak, aby zmniejszyć liczbę opcji dostępnych dla managera oferty w sekcji Konfiguracja Systemu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Proszę wybrać opcję rezerwacji.');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Włącza edytor HTML w szczegółach ofert. Dodatkowo, jeśli jest ustawione na Nie, wówczas wszystkie znaczniki HTML z wyjątkiem p oraz br zostaną usunięte z wszystkich wprowadzanych i wyświetlanych tekstów.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Widok pełnoekranowy");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Widok klasyczny");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Przełącznik języków na pasku narzędzi managera");
jr_define('_JOMRES_PARTNER_DISCOUNT',"Rabat partnera");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Szukaj użytkownika");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków by wyszukać użytkownika.
					<br />
					Po wybraniu użytkownika będziesz mógł dodać go jako partnera i przypisać mu wybrane oferty i rabaty.");

jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Obecni Twoi partnerzy");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz partnera, którego dane chcesz edytować.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner:");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Szukaj oferty");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Wpisz kilka znaków z nazwy oferty i wybierz odpowiednią.
					<br />
					Po wybraniu oferty należy przypisać ją do partnera, jednak nie będzie on jeszcze korzystał z żadnych rabatów, trzeba będzie ustawić jeszcze te opcje.");

jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Aktualna oferta");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Kliknij na ofercie by edytować rabaty partnera dla tej oferty.");
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Zawieszone?
					<br />
					Kliknij, aby zawiesić managera, będzie to cofnięcie wszystkich jego ofert.");

jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Kliknij wstrzymaj (ikona z człowiekiem i zielonymi kleszczami) by zawiesić managera. Oznacza to, że manager nie będzie w stanie wykonywać funkcji zarządzania ofertami, a wszystkie ich właściwości będą publikowane. Super Manager nie może zostać zawieszony.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"To konto zostało zawieszone, nie jest obecnie możliwe administrowanie ofertami używając tego konta.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Zawieszone konto managera");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Odwieszone konto managera");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Pamiętaj, że Twoje konto managera ofert zostało zawieszone. Nie będziesz w stanie wykonywać żadnych funkcji zarządzania ofertami aż konto zostanie przywrócone.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Pamiętaj, że Twoje konto managera ofert jest już aktywne. Możesz nadal wykonywać wszelkie funkcje zarządzania ofertami.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Usuń z ulubionych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Archiwum danych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Archiwum danych rezerwacji jest to zrzut informacji rezerwacji zrobiony po naciśnięciu przycisku rezerwacja. Najedź na datę aby zobaczyć surowy zrzut danych. Informacje te są przechowywane w tabeli XXX__jomres_booking_data_archive .');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Moje dane');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Szukaj użytkowników");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków z nazwy użytkownika, aby wyszukać go.
					<br />
					Po wybraniu użytkownika będziesz mógł dodać go jako manager i zostaniesz przeniesiony do strony, gdzie można przypisać oferty i prawa dostępu dla użytkowników.");

jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Obecni managerowie");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz managera aby zostać przeniesionym na stronę administracji.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Szukaj według liczby osób");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Pokaż wyszukiwanie według liczby osób wybieranej z listy rozwijanej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Szukaj według ilości gwiazdek");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Pokaż wyszukiwanie według liczby gwiazdek wybieranej z listy rozwijanej.");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Liczba osób');
jr_define('_JOMRES_SEARCH_STARS','Liczba gwiazdek');
jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Faktury prowizyjne");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Liczba ofert");
jr_define('_JOMRES_CONFIG_JQUERY',"Obciążenie Jomres biblioteki jQuery");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"Można ustawić na Nie jeśli masz szablon, który używa jQuery. Może to rozwiązać problemy z jQuery i konflikty na niektórych szablonach, ale nie wszystkie.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Jeśli używasz JoomFish, należy ustawić na Nie, i używać JoomFish Language Switcher. Przełącznik jest zawsze włączony w obszarze administratora, ponieważ jest on potrzebny w przypadku korzystania z funkcji Tłumaczenia Label.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Miniatury są tworzone automatycznie dla przesyłanych zdjęć.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Małe miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Małe miniaturki są używane w wykazie ofert, podczas gdy średnie miniatury są używane w nagłówku ofert.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Małe miniaturki (wysokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Średnie miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Średnie miniaturki (wysokość maks px)');
jr_define('_JOMRES_TOUCHTEMPLATES','Tłumaczenie');
jr_define('_JRPORTAL_ROI_TAB',"Abonamenty");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Obsługa faktur prowizyjnych");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Ustaw Tak, aby uruchomić obsługę faktur prowizyjnych.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Obsługa faktur rezerwacji");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Ustaw Tak, aby uruchomić obsługę faktur rezerwacji.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Nowa faktura prowizja została podniesiona.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Nowa faktura prowizja została podniesiona. Proszę kliknąć na poniższy link, aby zobaczyć fakturę (być może trzeba się najpierw zalogować).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Automatycznie zawieś oferty z przekroczonym terminem płatności");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Automatycznie zawiesić gdy przekroczono");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Jest to liczba dni w czasie jakim manager musi zapłacić fakturę, zanim zostanie on zawieszony, a jego oferty wyłączone z publikacji w portalu.");
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Kontekst języka');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Użyj tej opcji do zmiany kontekstu języka. Funkcja ta pozwala używać etykiet, które są odpowiednie dla aktualnej działalności.');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Konfiguracja zaawansowana');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Ustaw Tak, jeśli chcesz korzystać z zaawansowanych opcji konfiguracyjnych. Jeśli dopiero zaczynasz z Jomres, to radzimy zostawić ustawione na Nie.');
jr_define('_JOMRES_CONFIG_JQUERY_UI',"Obciążenie Jomres biblioteki jQuery UI");
jr_define('_JOMRES_SORTORDER_PRICE_DESC','Cena (najpierw najwyższa)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Cena (najpierw najniższa)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Podsumowanie płatności i szacunki powinny być wycenione jako za dobę/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Za noc');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Za tydzień');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Za miesiąc');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Za osobę');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','Tydzień na');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','Miesiąc na');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Opcja szukaj klienta');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Dotyczy wszystkich modułów wyszukiwania. Podczas korzystania z funkcji wyszukiwania klienta numer, powinien wyglądać funkcja szukaj ofert, które taryfy będą obsługiwać klientów numerów i równa wybrany numer, dokładnie równy numer wybrany lub numer wybrany i większe?');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Proszę czekać, zamówienie jest przetwarzane.
					<br />
					W celu dokonania płatności zostaniesz przekierowany do serwisu transakcyjnego PayPal.');

jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Jeśli automatycznie nie zostałeś przekierowany do systemu PayPal w przeciągu 5 sekund...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Kliknij Tutaj');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Rezerwacja ważna od");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Rezerwacja ważna do");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Nazwa klienta");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji. 
					<br />
					Jeśli chcesz by rezerwacja była dostępna dla jednego konkretnego gościa, wybierz nazwę tego gościa i ogranicz kupon do tego tylko gościa.
					<br />
					Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.");

jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Rezerwacja została odrzucona z");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO',"Do");
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Ustaw Nie, aby wyłączyć ładowanie zarówno jQuery UI Javascript i pliki CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Biblioteka jQuery UI CSS");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Ustaw Nie, aby wyłączyć tylko plik jQuery UI CSS.");
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Razem brutto");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Oferta nie opublikowana');
jr_define('_JOMRES_CONVERSION_TITLE',"Użyj funkcji konwersji");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Użyj funkcji konwersji on-line Jomres. Pozwoli to oferować wybór waluty z listy rozwijanej dla użytkowników i wyświetlanie cen w ich walucie.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"Użyliśmy wszelkich starań, aby otrzymać najbardziej dokładne i aktualne kursy walut. Internetowa funkcja konwersji walut to usługa świadczona wyłącznie w celach informacyjnych i nie ma na celu dostarczenie dokładnych danych liczbowych. W związku z tym nie możemy zagwarantować dokładności kursów walut.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Użyj buforowania Javascript");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Wybierz, czy korzystać z funkcji Jomres buforowania JavaScript. Działa na większości serwerów, ale nie na wszystkich. Jeśli masz problemy z błędami Javascript, które są zgłaszane jako 'niezakończona stała łańcuchowa' w (na przykład) Firebug, należy ustawić to na Nie.");
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"Lista historycznych i obecnych klientów");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Tylko aktualni klienci");
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Waluta');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Wykrywanie API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','Aby automatycznie ustawić kod waluty na liście rozwijanej Jomres jest w stanie wykorzystać bezpłatną usługę o nazwie IPinfoDB, która pozwala wykryć kraj gośća. Musisz jednak zarejestrować się na stronie <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> i zdobyć klucz API.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugowanie');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Pokaż formularz rezerwacji w oknie popup');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','Jeśli opcja pokazywania formularza rezerwacji w szczegółach ofert jest ustawiona na Nie, wówczas, gdy strona otwiera się formularz rezerwacji może zostać pokazany w oknie popup.');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Wynosi lokalizację panelu');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','W formularzu rezerwacji panel sumy potrzebuje różnych ustawień w zależności od szablonu. Na przykład w szablonie Joomla Jomres ustawienie 712 działa dobrze, jednak na Drogi Mlecznej ustawienie ok. 1500 jest bardziej właściwe, zwłaszcza jeśli nie masz okna popup funkcja jest włączona. Prawdopodobnie, że będziesz musiał eksperymentować z różnymi ustawieniami, aby znaleźć coś, co działa dobrze w wybranym szablonie.');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','VAT - Rezerwacja');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Rezerwacja cena za osobę dorosłą');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','VAT - Przedmiot rezerwacji');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Otwórz formularz rezerwacji');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Wróć do szczegółów oferty');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatycznie wybrany?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Po przedpłacie');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filtrowanie zasobów na podstawie ich cech.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Ostatnia rezerwacja');
jr_define('_JOMRES_DATEPERIOD_SECOND','sekunda');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minuta');
jr_define('_JOMRES_DATEPERIOD_HOUR','godzina');
jr_define('_JOMRES_DATEPERIOD_DAY','dzień');
jr_define('_JOMRES_DATEPERIOD_WEEK','tydzień');
jr_define('_JOMRES_DATEPERIOD_MONTH','miesiąc');
jr_define('_JOMRES_DATEPERIOD_YEAR','rok');
jr_define('_JOMRES_DATEPERIOD_DECADE','dekada');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','temu');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','od teraz');
jr_define('_JOMRES_WHOLEDAY_TITLE','Rezerwacje są całymi dniami');
jr_define('_JOMRES_WHOLEDAY_DESC','Domyślnie oferty rezerwowane są na noc, więc rezerwacja od pierwszego stycznia '.date("Y",strtotime("przyszły rok")).' do 2 stycznia '.date("Y",strtotime("przyszły rok")).' obejmuje tylko jedną noc. Jeśli ustawisz tę opcję na Tak, wtedy rezerwacja obejmie całe dni zamiast, więc rezerwacja w tych dniach obejmie oba dni, a klient będzie rozliczane przez dwa dni.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Za dzień');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Za osobę za dzień');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Rezerwacja do');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"dzień/i przy");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Nieprawidłowa data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','Czas rezerwacji jest zbyt krótki. Musi być co najmniej, pomiędzy początkową i końcową datą rezerwacji:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Rezerwacja od/Rezerwacja do minimum interwał');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','Przedział mimimum dni w formularzu rezerwacji pomiędzy początkiem i końcem rezerwacji. Przedział 1 oznacza, że początek i koniec terminu rezerwacji mogą być ustawione na ten sam dzień, jednak nadal jest to zależne od minimalnego odstępu i obliczane automatycznie przez silnik rezerwacji, ponieważ sprawdza taryfy, które są ważne przez okres rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Podsumowanie płatności i szacunki powinny być wycenione jako na dzień/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Za dzień');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Dni przed terminem początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','Minimalna liczba dni, które muszą upłynąć od "dziś", przed datą początku rezerwacji.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Ustaw Tak, jeśli chcesz ograniczyć rezerwacje (użyj następne pole do ustawienia limitu z punktu widzenia dni). Jeśli nie ustawisz na Tak wtedy, gdy użytkownik próbuje zarezerwować więcej niż X dni wcześniej to ich data początku rezerwacji zostanie przywrócona do dzisiejszej daty.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Pokaż pole daty końca rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Ustaw Nie, jeśli nie chcesz pokazać pola daty końca rezerwacji.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','Jeśli ustawisz na Tak, wtedy rezerwacja zostanie podjęta na czas określony. Jeśli jest ustawiona na Nie, wówczas zapewnienie, że "zdefiniowane dni początku rezerwacji ustawione na Tak (chyba, że specjalnie chcesz zmusić klientów do rozpoczynania rezerwacji w określonym dniu tygodnia) inaczej nie dostaniesz wiele linków w dostępności kalendarza.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Predefiniowane dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Tylko dla stron oferujących stałe rezerwacje. Wybierz dzień tygodnia będący początkiem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Stałe dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Stały dzień początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','Kiedy stałe dni początku rezerwacji są zaznaczone, liczba terminów, które mogą w terminach listy rozwijanej. Zauważ, że lista dat nie zawiera żadnych dat, jeśli rezerwacja nie jest możliwa ze względu na wcześniejsze rezerwacje, a lista będzie rzeczywiście dwa razy tak długo, jak wybranym numerem bo będzie miał podobną liczbę historycznych dat (jeśli jest dostępny).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Od osoby, za dzień');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Wybierz Tak, jeśli chcesz pobierać opłaty za osobę za dzień. Jeśli Nie, wówczas koszty będą obliczane na podstawie za stawkę za dzień.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Zmienne depozyty pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Funkcja umożliwia przyciągnięcie klientów do przedmiotów rezerwacji, które mogłyby być pominięte i niezarezerwowane w danym czasie.
					<br />
					Włączenie i konfiguracja funkcji pozwala zaoferować regulację cen na podstawie liczby przedmiotów rezerwacji wybranego typu które są dostępne w ofercie w danym dniu.
					<br />
					Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny przedmiotów rezerwacji zostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu przedmiotów rezerwacji które mogą być dostępne przed zastosowaniem danego rabatu.');

jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Próg (liczba dni pomiędzy dniem początku rezerwacji a dniem składania rezerwacji)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Czas początku rezerwacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Początek rezerwacji dzisiaj');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Początek rezerwacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Początek rezerwacji dzisiaj');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Koniec rezerwacji miniony');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Nie podniósł');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Dni');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Oznacz rezerwacje podniosłem.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Oznacz rezerwacje zwrócone.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Oznacz rezerwacje podniósł');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Oznacz rezerwacje zwrócone');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Koszt za dzień:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Liczba dni:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Zastąp całkowitą rezerwację');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Zapisz i zastąp');
jr_define('_JOMRES_BOOKINGFORMWIDTH','Szerokość formularz rezerwacji w px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Panel cen zawsze widoczny');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','Panel wyświetlający podsumowanie płatności będzie zawsze widoczny w formularzu rezerwacji.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Powiadom nowych użytkowników o ich danych logowania');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','Jeśli tak ustaw na Tak. Możesz ustawić tę opcję na Nie, aby mieć pewność, że dane logowania nie są wysyłane do użytkowników. Może to być przydatne, jeśli nie chcesz, aby użytkownicy rzeczywiście mogli się zalogować.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Kwota podatku w skróconej formie');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Jeśli chcesz zapobiec w formularzu rezerwacji wyświetlaniu ceny netto w podsumowaniu płatności ustaw na Nie.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Anulowanie rezerwacji ilość dni');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Zalogowani, zarejestrowani klienci mogą anulować własne rezerwacje. Tutaj można ustawić ilość dni w których rezerwacja nie może być anulowana po upływie określonej liczby dni przed datą początku rezerwacji.');
jr_define('_JOMRES_EDIT_PROFILE','Edytuj profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Dostępność dla następujących rodzajów ofert');
jr_define('_JOMRES_IMAGE','Zdjęcie');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Cecha dostępna w następujących rodzajach ofert');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Kliknij literę, aby wyświetlić wszystkie oferty których nazwa rozpoczyna się od tego znaku. Gdy masz listę ofert można przypisać stawki prowizji do tych ofert lub kliknij na ich "edycji" ikonę, aby wyświetlić statystyki.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edytuj stawki podatku");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edycja pola niestandardowego");
jr_define('_JOMRES_LICENSESERVER_PASSWORD',"Serwer licencji - Hasło");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"Serwer licencji - Login");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"Jeśli masz login i hasło na serwerze licencji, wpisz je tutaj. To pomoże Ci uzyskać dostęp do dodatkowych wtyczek Jomres. Jeśli podałeś prawidłowy klucz wsparcia w polu powyżej, to nie ma potrzeby podawania nazwy użytkownika i hasła tutaj.");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"Twoja wersja Jomres to:");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Najnowsza wersja Jomres to:");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Uwaga! Dostępna jest już nowa wersja Jomres, zaleca się uaktualnienie systemu do najnowszej wersji.");
jr_define('_JOMRES_PRODUCT_INFORMATION','Witamy w Jomres - Ulubionym systemie rezerwacji. Jeśli chcesz kupić Srebrną lub Złotą Licencję Jomres <a href="http://www.jomres.net/prices" target="_blank">odwiedź naszą stronę</a>.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','System ten jest idealnym rozwiązaniem dla każdego scenariusza, bez znaczenia jest to czy ma to być prosty formularz rezerwacji dla jednej oferty czy większej ich liczby.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Aktywna oferta");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Zmiana oferty");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Kliknij znak, aby wyświetlić wszystkie oferty które zaczynają się od tej litery. Gdy zostaną wyświetlone kliknij na nazwę wybranej oferty, aby zmienić ją na aktywną ofertę.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"SMTP");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Ustaw Tak, aby korzystać z SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Zmień na serwer poczty SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Zmień port SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Protokół");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"W zależności od ustawień serwera SMTP, musisz pozostawić puste lub wpisać 'SSL' lub 'TLS'. Poproś dostawcę o pomoc.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Użyj uwierzytelniania");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"Jeżeli serwer SMTP wymaga uwierzytelniania ustaw na Tak. Podaj następnie login i hasło użytkownika.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Login");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"Podaj login do konta SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Hasło");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"Podaj hasło do konta SMTP.");
jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Ostrzeżenie! Wykryto, że twoja Joomla ma uruchomioną funkcję buforowania systemu. Radzimy wyłączyć tę funkcję gdyż może powodować niestabilne zachowanie systemu Jomres.");
jr_define('_JOMRES_QUICK_INFO',"Podgląd");
jr_define('_JOMRES_MENU_SHOW',"Pokaż");
jr_define('_JOMRES_MENU_HIDE',"Schowaj");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Alternatywny układ menu");
jr_define('_JOMRES_MENU_SHOW_DESC',"Ustaw Tak, aby skorzystać z alternatywnego układu menu na froncie serwisu.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Domyślnie");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Każdy");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Zarejestrowany");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nikt");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Kontrola dostępu do menu");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"Funkcja ta pozwala kontrolować, kto będzie w stanie zobaczyć daną opcję w menu głównym. Zazwyczaj opcje użytkowników 00009 są widoczne przez niezarejestrowanych odwiedzających witrynę, 00010 opcje zasadniczo odnoszą się do kategorii działalności typu recepcji, które są używane na codzień, natomiast 00011 opcje służą do instalowania i konfigurowania właściwości, ale są dostępne rzadziej.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Recepcjonistka");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Pełna kontrola dostępu");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Ustaw Tak, aby umożliwić pełne funkcję kontroli dostępu, a następnie odwiedź ustawienia kontroli dostępu.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Należy jednak pamiętać, że te ustawienia nie kontrolują podstawowych skryptów np. jeśli ustawisz <i>00009user_option_03_search</i> do 'Kierownik' użytkownik, który zna Jomres może jeszcze dostać się do np. j06000search.class.php wprowadzając http://www.domain.com/index.php?option=com_jomres&task=search w swoim pasku adresu przeglądarki. Jest to celowe, ponieważ kontrola dostępu do menu po prostu kontroluje, co można zobaczyć w głównym Jomres menu.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Pełna kontrola dostępu");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>Funkcja ta jest tylko dla zaawansowanych użytkowników. Jeśli nie wiesz, co to jest, i nie ma konkretnego powodu, aby jej użyć, należy powrócić do konfiguracji strony i ustawić pełną opcję kontroli dostępu na Nie.</strong>
					<br />
					Funkcja ta pozwala kontrolować, kto ma dostęp do jakich opcji menu (z pewnymi wyjątkami, które są zapisane w systemie). Jeśli poziom dostępu do skryptu obok nazwy jest domyślny, a następnie z opcją Pełna kontrola dostępu ustawiona na Tak <strong>Każdy</strong> może uzyskać dostęp do skryptów, do których nie powinien mieć dostępu więc jeśli zamierzasz korzystać z tej funkcji należy ustawić poziom kontroli dostępu dla <strong>Każdego</strong> składnika Jomres. Jeśli nie wiesz co te składniki robią to radzimy nie korzystać z tej funkcji w ogóle.
					<br />
					Poziomy dostępu w Jomres przypominają piramidę, więc Super Manager są większe niż Manager. W skrócie: Super Manager > Manager > Recepcjonistka > Zarejestrowany > Niezarejestrowany. Tak więc, jeśli Zarejestrowany użytkownik ma dostęp do składnika Jomres może więc dodać Recepcjonistki, Managerów i Super Managerów.
					<br />
					Pamiętaj, że nie można kontrolować składników Jomres w obszarze administratora. Użytkownik w obszarze administratora jest uważany za zaufanego użytkownika.");

jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Uwaga! Masz włączoną pełną kontrolę dostępu. System kontroli dostępu wykrył, że istnieją dodatki, do których dostęp nie został ograniczony. Jest to kwestia bezpieczeństwa Twojego serwisu. Musisz rozwiązać ten problem. Odwiedź strefę kontroli dostępu i ustal odpowiednie poziomy dostępu do poszczególnych obszarów systemu.");
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Użytkownicy z uprawnieniami administratora dla tej oferty");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"Wyświetl wszystkie faktury");
jr_define('_JOMRES_DEBUGGING_SUBJECT','Temat');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Twoje imię i nazwisko');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Twój adres e-mail');
jr_define('_JOMRES_DEBUGGING_ISSUE','Proszę opisać swój problem');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parametry');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Wymuszenie');
jr_define('_JOMRES_METATITLE','Tytuł META');
jr_define('_JOMRES_METADESCRIPTION','Opis META');
jr_define('_JOMRES_FOUNDPROPERTIES',"Znajdź ofertę");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Dodaj swoją ofertę: Krok 1 z 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Dodaj swoją ofertę: Krok 2 z 2");
jr_define('_JOMRES_MYPROPERTIES','Moje oferty');
jr_define('_JOMRES_CART_TITLE','Moje propozycje rezerwacji');
jr_define('_JOMRES_CART_INFO','Uwaga, te rezerwacje nie zostały jeszcze zapisane. Jeśli się wylogujesz lub Twoja sesja wygaśnie zostaną one utracone. Pamiętaj, aby potwierdzić rezerwację.');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Potwierdź rezerwację');
jr_define('_JOMRES_CART_OR','lub');
jr_define('_JOMRES_CART_SAVEFORLATER','Zapisz na później');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','Nie masz jeszcze zapisanych rezerwacji.');
jr_define('_JOMRES_CART_VIEWCART','Zobacz koszyk');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Katalog plików językowych');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Domyślna szerokość geograficzna');

jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Domyślna długość geograficzna');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','Jest to startowy punkt wyświetlany na mapach Google na stronach serwisu.');
jr_define('_JOMRES_CLEARDATES','Nie wybrałeś jeszcze daty swojej rezerwacji.');
jr_define('_JOMRES_MOBILE_REDIRECT','Strony dla urządzeń mobilnych');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres zawiera funkcję, która przekierowuje użytkownika do strony która nie zawiera modułów i nagłówków, gdy wykryje, że przeglądarka należy do urządzenia mobilnego. Jeśli masz Joomla szablon, który jest już zoptymalizowany dla urządzeń mobilnych, można wyłączyć tę funkcję przez ustawienie tej opcji na Nie.');
jr_define('_JOMRES_SYSTEM_EMAILS','Adres e-mail serwisu');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Pozostaw pole puste aby wyłączyć funkcję. Wiadomości do klientów będą wysyłane z adresów e-mail. podanych w ofertach. Jeśli wprowadzisz adres e-mail w tym miejscu wiadomości do klientów będą wysyłane z tego adresu.");
jr_define('_JOMRES_CSS_CACHING_TITLE',"Użyj buforowania CSS");
jr_define('_JOMRES_CSS_CACHING_DESC',"Buforuje pliki CSS, przyśpiesza wczytywanie stron.");
jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Wyraźne zaznaczenie pola wyboru daty w kalendarzach");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"Lista");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Siatka");
jr_define('_JOMRES_COMPARE',"Porównywarka");
jr_define('_JOMRES_REMOVE',"Usuń");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Wróć do wyników wyszukiwania");
jr_define('_JOMRES_ADDTOSHORTLIST',"Dodaj do ulubionych");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Usuń z ulubionych");
jr_define('_JOMRES_VIEWSHORTLIST',"Moje ulubione");
jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Pliki cookie");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"Prawodawstwo UE wymaga, aby wszystkie strony internetowe, które używają plików cookie uzyskały zgodę od odwiedzających witrynę użytkowników do przechowywania plików cookies na ich komputerach/urządzeniach.
					<br />
					Jeśli opcja jest włączona, użytkownicy zobaczą stronę gdzie mogą zdecydować się na ciasteczko, które zostanie zapisane na ich komputerze/urządzeniu.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Ważne! Pliki Cookie");
jr_define('_JOMRES_COOKIEPOLICY_2',"Używamy plików cookies, aby nasza strona była łatwiejsza w użyciu.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Przeczytaj więcej...");
jr_define('_JOMRES_COOKIEPOLICY_4',"Prawodawstwo UE wymaga, aby wszystkie strony wyraźnie informowały o stosowaniu i sposobie wykorzystywania plików cookies.");
jr_define('_JOMRES_COOKIEPOLICY_5',"Mechanizm wyszukiwarki i rezerwacji wymaga użycia małego pliku cookies, który jednoznacznie identyfikuje przeglądarkę i umożliwia korzystanie z funkcjonalności naszego serwisu. Musisz zgodzić się na zapisanie tego pliku na Twoim komputerze. Jeśli nie wyrazisz zgody, dostęp do możliwości serwisu zostanie poważnie ograniczony.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Tak, zgadzam się z polityką cookies.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Depozytem wymaganym jest koszt pierwszej nocy');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Ceny są obliczane na podstawie za noc. Chcesz kaucję za jedną noc? Jeśli tak, to możesz zignorować poniższe opcje.');
jr_define('_JOMRES_NOTHINGINSHORTLIST',"Nie dodano jeszcze nic do ulubionych.");
jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile");
jr_define('_JOMRES_SIMULATE_MOBILE',"Symulacja trybu mobilnego");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Ustaw Tak, aby wymusić na zawsze przechodzenie do widoku mobilnego. Przydatne, jeśli tworzysz szablony, które są dla urządzeń mobilnych.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"IP dla symulacji");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"Można skonfigurować ustawienia symulacji tylko dla wybranego IP = XXX.XXX.XXX.XXX, więc na przykład, jeśli tworzysz na localhost, należy ustawić numer IP na 127.0.0.1.");
jr_define('_JOMRES_SAFEMODE',"Tryb awaryjny");
jr_define('_JOMRES_SAFEMODE_DESC',"Ustaw Tak, aby uruchomić tryb awaryjny. Spowoduje to wyłączenie wszystkich wtyczek. Dostępne będą jedynie podstawowe funkcje systemu.");
jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");
jr_define('_JOMRES_USE_JOMRESEDITOR',"Włącz edytor WYSIWYG (zalecane)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"Jeśli masz włączony edytor WYSIWYG, możesz skorzystać z edytora HTML dla CMS lub dostarczonego wraz z Jomres. Jest on zoptymalizowany pod kątem wykorzystania przez Managerów ofert i zaleca się, korzystanie z tego rozwiązania.");
jr_define('COMMON_NEXT',"Dalej");
jr_define('COMMON_CANCEL',"Anuluj");
jr_define('COMMON_SUBMIT',"Wyślij");
jr_define('COMMON_SAVE',"Zapisz");
jr_define('COMMON_DELETE',"Usuń");
jr_define('COMMON_RETURN',"Powrót");
jr_define('COMMON_CLOSE',"Zamknij");
jr_define('COMMON_BACK',"Cofnij");
jr_define('COMMON_HOME',"Home");
jr_define('COMMON_NEW',"Nowy");
jr_define('COMMON_SEND',"Wyślij");
jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha jest używany do zabezpieczenia formularzy przed robotami spamującymi. Aby użyć tego mechanizmu musisz zarejestrować sie w <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">Google reCaptcha</a> i zdobyć klucz publiczny i prywatny dla zabezpieczenia swojej domeny. Po otrzymaniu tych kluczy, wpisz je poniżej. Usługa reCapcha to bezpłatna usługa udostępniana przez Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Klucz publiczny (Public key)");
jr_define('RECAPTCHA_PRIVATE_KEY',"Klucz prywatny (Private key)");
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Czas blokady");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"Aby zapobiec niebezpieczeństwu podwójnych rezerwacji dla jednej oferty używany jest plik blokujący. Dzięki temu nie jest możliwa rezerwacja w tym samym terminie oferty, która znalazła się już w koszyku innego klienta. Domyślnie blokada zostanie usunięta po upływie 3600 sekund (jednej godzinie). Można zmienić czas potrzebny do wygaśnięcia tej blokady zmieniając wartość domyślną.");
jr_define('_JOMRES_BOOTSTRAPSWITCH',"Szablony Bootstrap");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Jeśli używasz szablon Bootstrap na froncie strony, należy ustawić tę opcję na Tak.");
jr_define('COMMON_ACTION',"Akcja");
jr_define('COMMON_VIEW',"Widok");
jr_define('BACKTOTOP',"Powrót do góry");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Słaby");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Silny");
jr_define('_JOMRES_INPUTFILTERING',"Filtrowanie");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Poziom filtrowania");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Większość danych, które są wprowadzane do systemu są czyszczone ze zbędnych tagów HTML, a następnie za pomocą funkcji filtrowania zmiennej PHPs bezpieczne już dane zostają wprowadzone do bazy danych. Jeśli masz włączony edytor HTML to ustaw tą funkcjonalność. Dostępne są dwa poziomy filtrowania: słabe i silne. Użyj słabej mocy filtrowania jeśli masz pełne zaufanie do pozostałych administratorów (jeśli są to znajomi, koledzy, pracownicy). Użyj silnej mocy filtrowania jeśli masz ograniczone zaufanie do pozostałych administratorów. Po ustawieniu mocy filtrowania na silne (zalecane) można określić dozwolone tagi HTML (ustawienie 'Dozwolone tagi HTML').");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Dozwolone tagi HTML");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"Możesz edytować dozwolone tagi HTML. Domyślnie są to: 'p,b,strong,a[href],i' (czyli: Paragraph, Bold, Strong, Links oraz Italics). Więcej informacji na temat dozwolonych tagów znajdziesz w dokumentacji na stronie: <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Chociaż można zmienić to ustawienie, radzimy pozostawić wartości domyślne.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Filtrowane pola edycyjne");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"Można określić, które pola formularza mają być filtrowane i oczyszczane ze niedozwolonych znaczników. Pola dodane do tej listy będą poddawane analizie przez HTML Purifier. Domyślnie są to: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Dodaj więcej pól poprzez wprowadzenie ich nazwy. Pola muszą być oddzielone spacją.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Informacje na stronie oferty w zakładkach");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Ustaw tę opcję na Tak, aby wyświetlić szczegółowe informacje w zakładkach. Ustaw na Nie, aby wyświetlić je bez zakładek.");
jr_define('COMMON_PRINT',"Drukuj");
jr_define('COMMON_EDIT',"Edytuj");
jr_define('COMMON_COPY',"Kopiuj");
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 domyślnie korzysta z Twitter Bootstrap. Jomres również udostępnia szablony i funkcje, które korzystają z możliwości tej technologii. Domyślnie, jeśli używasz Jomres na Joomla 3 przełączniki te są ustawione na Tak, ale można je ustawić na Nie, jeśli jest taka potrzeba (nie zalecane). Jeśli używasz wersji niższej niż Joomla 3 możesz zdecydować się na stosowanie szablonów Jomres Bootstrap, jednak domyślnie opcje te są ustawione na Nie.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Szablon Bootstrap na froncie");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Szablon Bootstrap na zapleczu");
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Oto kilka alternatywnych opcji, które warto rozważyć.");
jr_define('_JOMRES_BEEZ_WARNING',"Uwaga! Twój szablon na froncie jest aktualnie ustawiony na Beez3. Należy pamiętać, że nasze szablony nie są kompatybilne z Beez3 i radzimy przełączyć szablon witryny na szablon Bootstrapped np. Protostar.");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Automatyczne wykrywanie kraju użytkownika");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"System automatycznie wykryje kraj użytkownika w formularzu rezerwacji. Możesz ustawić tę opcję na Nie i określić domyślny kraj pojawiający się w formularzu rezerwacji wybierając go w następnej opcji.");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES","O Jomres");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP","Pomoc");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN","1 Główne");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED","Szybki start");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE","Konserwacja systemu");
jr_define("_JOMRES_CUSTOMCODE_ACCESSCONTROL","Kontrola dostępu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS","Narzędzia programisty");
jr_define("_JOMRES_CUSTOMCODE_ASAMODULE","ASAModule");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES","Wersje językowe");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION","Generowanie dochodu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING","Księgowość");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS","Rezerwacje");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE","Struktura serwisu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT","Zarządzanie użytkownikami");
jr_define("_JOMRES_CUSTOMCODE_MANUAL","Instrukcja (on-line)");
jr_define("_JOMRES_CUSTOMCODE_MYACCOUNTONLINE","Moje konto (on-line)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS","Zaplanowane zadania");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL","Funkcjonalność portalu");
jr_define("_JOMRES_CUSTOMCODE_PLUGINMANAGER","Plugin manager");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION","Integracje");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS","Raporty i statystyki");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES","Podatki");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_TICKETS","Wsparcie (on-line)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP","Pomoc");
jr_define("_JOMRES_CUSTOMCODE_UPGRADES","Aktualizację");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS","Metody płatności");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT","Taryfa domyślna");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC","Dotyczy to tylko nowych taryf.");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW","Ilość lat");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC","Określa ilość lat widocznych podczas edycji taryf.");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING","Faktury");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT","Dane konta");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Zaloguj");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Wyloguj");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH',"Szukaj");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME","Recepcja");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK","Księga rezerwacji");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS","Manager");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING","Faktury");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS","Ustawienia");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC","Raportowanie");
jr_define("_JOMRES_PROPERTYCONFIG_SRPS","SRPs");
jr_define("_JOMRES_EDIT_COUNTRY_TITLE","Edytuj kraj");
jr_define("_JOMRES_EDIT_COUNTRY_ID","Id kraju");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYCODE","Kod kraju");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYNAME","Nazwa kraju");
jr_define("_JOMRES_EDIT_REGION_TITLE","Edytuj region");
jr_define("_JOMRES_EDIT_REGION_ID","Id regionu");
jr_define("_JOMRES_EDIT_REGION_COUNTRYCODE","Kod kraju");
jr_define("_JOMRES_EDIT_REGION_REGIONNAME","Nazwa regionu");
jr_define("_JOMRES_COM_LISTCOUNTRIES","Lista krajów");
jr_define("_JOMRES_COM_LISTREGIONS","Lista regionów");
jr_define("_JOMRES_EXPORT_DEFINITIONS","Eksport tłumaczeń");
jr_define("_JOMRES_EXPORT_DEFINITIONS_INFO","Funkcja ta pozwala na eksport tłumaczeń języka, które zostały zbudowane przy użyciu funkcji tłumaczeń. W polu edycyjnym wyświetlone zostaną wszystkie dane wymagane do stworzenia nowego pliku językowego, wszystko co musisz zrobić, to skopiować i wkleić zawartość pola do nowego pliku językowego, który następnie można umieścić na serwerze.");
jr_define("_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS","Tłumaczenie lokalizacji");
jr_define("_JOMRES_COM_TRANSLATE_LANGUAGEFILES","Tłumaczenie ciągów plików");
jr_define("_JOMRES_COM_NOTAMANAGER","Błąd! Nie jesteś zalogowany jako Super Manager. Jest to funkcja bezpieczeństwa.");
jr_define("_JOMRES_COM_LAYOUTS_DEFAULT","Domyślny wygląd listy ofert");
jr_define("_JOMRES_COM_LAYOUTS_DEFAULT","Domyślny układ listy");
jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres korzysta z własnych szablonów. Jeśli jesteś projektantem to możesz zmienić w łatfy sposób wygląd systemu, wystarczy edytować wybrany temat graficzny. Ta funkcja edycji szablonów pozwala na tworzenie własnych wersji szablonów Jomres.
					<br /><br />
					Edytując szablon masz możliwość dokonania zmian specyficznych dla wszystkich typów ofert lub określonego typu oferty czy modułu. Np. szablon graficzny modułu wyświetlającego losowe oferty to basic_module_output.html . W rezultacie można tworzyć różne warianty układu graficznego.
					<br /><br />
					Jeśli szablon nie został jeszcze zmodyfikowany, to możesz na jego podstawie stworzyć nowy. W tym celu wybierz opcję "Nowy". Na kolejnej stronie będzie można edytować ten szablon. Bazowy układ szablonu graficznego jest pobierany z katalogu na Twoim serwerze /jomres/templates/xxx/frontend Po kliknięciu w przycisk "Zapisz", zostanie on zapisany w bazie danych i z niej pobierany. Dzięki temu możesz mieć gwarancję, że wprowadzone modyfikację nie zostaną nadpisane przy okazji aktualizacji systemu.
					<br /><br />
					Po dostosowaniu szablonu otrzymasz więcej opcji. Można utworzyć nową kopię oryginalnego szablonu, można skopiować zmiany do nowego szablonu, przypisać go do wybranego typu oferty etc. Usuwając swój szablon wykorzystywany na powrót będzie szablon domyślny zapisany w katalogu /jomres/templates/xxx/frontend .
					<br /><br />
					System Jomres stale ewoluuje i szablony podstawowe są często aktualizowane/modyfikowane. Jeśli korzystasz z funkcji edycji szablonów będziesz musiał po aktualizacji systemu zweryfikować swoje szablony porównując je z plikami bazowymi szablonów zapisanymi w /jomres/templates/xxx/frontend . Jeśli plik szablonu w tym katalogu będzie nowszy niż ten zapisany w bazie danych otrzymasz odpowiedni komunikat. Chcąc mieć pewność, że korzystasz z wszystkich nowych funkcji i ulepszeń systemu po aktualizacji systemu przeprowadź porównanie plików szablonu pod względem zawartości w nich wszystkich funkcjonalności.');

jr_define("_JOMRES_STAYFORAMINIMUMOF","Minimum");
jr_define("_JOMRES_NIGHTSFOR"," nocy ");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS","Pokaż zdjęcie GIF oferty na liście ofert jeśli zdjęcia lub slajd jest dostępny.");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY","Pokaż jako GIF tylko wtedy, gdy oferta jest aktywna.");
jr_define("_JOMRES_AGENT","Agent");
jr_define("_JOMRES_AGENT_DETAILS","Dane agenta");
jr_define("_JOMRES_AGENT_LISTINGS","Lista agentów");
jr_define("_JOMRES_PROPERTY_LANG","Język oferty");
jr_define("_JOMRES_PROPERTY_LANG_DESC","Będzie to domyślny język tej oferty.");
jr_define("_JOMRES_APPROVALS_CONFIG_TITLE","Automatyczna aktywacja nowych ofert");
jr_define("_JOMRES_APPROVALS_CONFIG_DESC","Jeśli Nie, to trzeba będzie ręcznie aktywować nowe oferty. Dopóki oferty nie zostaną aktywowane nie będzie istniała możliwość publikacji oferty w serwisie.");
jr_define("_JOMRES_APPROVALS_MENU_NAME","Aktywacja ofert");
jr_define("_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL","Oferty oczekujące na aktywację");
jr_define("_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL","Obecnie nie ma ofert oczekujących na aktywację.");
jr_define("_JOMRES_APPROVALS_APPROVE","Aktywuj oferty");
jr_define("_JOMRES_APPROVALS_REVIEW","Skomentuj ofertę");
jr_define("_JOMRES_APPROVALS_NOT_APPROVED_YET","Ta oferta nie została jeszcze aktywowana. Po aktywacji będzie można ją opublikować.");
jr_define("_JOMRES_APPROVALS_CANNOT_PUBLISH","Niestety, nie można opublikować tej oferty, gdyż nie została jeszcze aktywowana.");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT","Nowa oferta oczekuje na aktywację");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT","Nowa oferta została dodana do systemu i oczekuje na aktywację. Kliknij link, aby wyświetlić więcej informacji: ");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT","Twoja oferta została aktywowana");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT","Gratulacje, oferta została aktywowana. Prosimy kliknąć w poniższy link, aby przejść na stronę administracji: ");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_TITLE","Tłumaczenie nazwy regionu");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_DESC","Jeśli używasz bardzo szybkiego serwera możesz wybrać wartość Nie. Ze względu na dużą liczbę nazw regionów, ich tłumaczenie zajmuje dużo pamięci, która może spowolnić uzyskiwanie wyników wyszukiwania.");
jr_define("_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT","Klient zarezerwował.");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Ten adres e-mail jest już używany przez innego użytkownika. Jeśli jest to Twój e-mail zaloguj się przed dokonaniem rezerwacji.');
jr_define("JOMRES_TAPTOCALL","Stuknij, aby zadzwonić.");
jr_define("JOMRES_NEWREVIEW_SUBJECT","Nowa recenzja");
jr_define("JOMRES_NEWREVIEW_MESSAGE","Nowa recenzja została dodana dla");
jr_define("JOMRES_NEWREPORT_SUBJECT","Nowy raport");
jr_define("JOMRES_NEWREPORT_MESSAGE","Nowy raport został dodany dla");
jr_define("JOMRES_NON_REGISTERED_USER","Użytkownik nie zarejestrowany");
jr_define("JOMRES_JQUERY18_2","Użyć jQuery 2.x?");
jr_define("JOMRES_JQUERY18_2_DESC","Jquery 2.x jest szybsze niż poprzednie implementacje, jednak brakuje tu pewnych rzeczy. Wsparcie dla IE6/7/8 i starszych przeglądarek Firefox i Safari nie jest oferowane. Jeśli widzisz błędy JavaScript na stronie, lub jeśli szablon/wtyczki (takie jak pokazy slajdów) używają starszych wersji jQuery należy ustawić tę opcję na Nie.");
jr_define("JOMRES_SUPERIOR","Lepszy");
jr_define("JOMRES_SUPERIOR_S","(S)");
jr_define("JOMRES_GRANDTOTAL_EX_TAX","Ogółem (bez VAT):");
jr_define("JOMRES_GRANDTOTAL_INC_TAX","Ogółem (z VAT):");
jr_define("JOMRES_GRANDTOTAL_TOTAL_TAX","Razem podatek:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL","Wpisz dwa słowa:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO","Wpisz co słyszysz:");
jr_define("JOMRES_RECAPTCHA_PLAY_AGAIN","Odtwórz ponownie");
jr_define("JOMRES_RECAPTCHA_CANT_HEAR_THIS","Pobierz plik audio w formacie MP3");
jr_define("JOMRES_RECAPTCHA_VISUAL_CHALLENGE","Token graficzny");
jr_define("JOMRES_RECAPTCHA_AUDIO_CHALLENGE","Token audio");
jr_define("JOMRES_RECAPTCHA_REFRESH_BTN","Odśwież");
jr_define("JOMRES_RECAPTCHA_HELP_BTN","Pomoc");
jr_define("JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN","Niestety, kod tokena został wpisany błędnie. Prosimy spróbować ponownie.");
jr_define("JOMRES_GOOGLE_MAPS","Opcje map Google");
jr_define("JOMRES_GOOGLE_MAPS_INFO","Opcje te są dostępne głównie dla map na listach ofert i na stronach szczegółów ofert. Włączenie zbytniej ilości opcji może spowodować wolniejsze ładowanie dużych map. Włączenie tej opcji spowoduje wyświetlanie pogody na dodatkowych, rozszerzających możliwości systemu mapach.");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER","Włączyć warstwę Pogoda?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD","Farenheita czy Celsjusza?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS","Celsjusza");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT","Farenheita");
jr_define("JOMRES_GOOGLE_MAP_OPTION_PANORAMIO","Włączyć warstwę Panoramio?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRANSIT","Włączyć warstwę Transit?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRAFFIC","Włączyć warstwę Traffic?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_BICYCLING","Włączyć warstwę Bicycling?");
jr_define("JOMRES_GOOGLE_MAPS_POIS","Włącz punkty na mapach Google (może wyświetlać punkty konkurencji)?");
jr_define("_JOMRES_METAKEYWORDS","Słowa kluczowe");
jr_define("_JOMRES_PLEASE_PRINT","Proszę wydrukować ten e-mail i przedstawić go w dniu przyjazdu.");
jr_define("_JOMRES_OFFICE_USE_ONLY","Używa tylko biuro");
jr_define("_JOMRES_SCAN_FOR_DIRECTIONS","Zeskanuj ten kod telefonem, aby uzyskać istotne wskazówki.");
jr_define("_JOMRES_VAT_FEATURE_ENABLE","Korzystaj z wbudowanej walidacji funkcji VIES dla VAT?");
jr_define("_JOMRES_VAT_FEATURE_ENABLE","Jest to funkcja, która pozwala właścicielom firm i klientom, na wprowadzenie numeru VAT, który w razie potrzeby wraz z innymi danymi znajdzie się na fakturze. Opcja przeznaczona dla firm i klientów z UE.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX","Wprowadzony numer VAT jest niepoprawny. Prawidłowy format to: BE805670816B01.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE","Nieprawidłowy numer VAT. Proszę sprawdzić prawidłowość swojego numeru VAT i jego zgodność z VAT UE. Usługa walidacji (VIES).");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED","Gratulacje. Udało się nam potwierdzić Twój numer VAT.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED","Numer VAT nie został wprowadzony.");
jr_define("_JOMRES_TAX_RULES_LIST","Lista stawek podatkowych");
jr_define("_JOMRES_TAX_RULE","Stawka podatkowa");
jr_define("_JOMRES_TAX_RULE_INFO","Stawki podatkowe są wykorzystywane do stosowania różnych przepisów podatkowych dla różnych regionów. Wpływają one na ceny końcowe i pozwalają na ich dostosowanie z uwzględnieniem stawek podatkowych stosowanych w danym regionie. Może się okazać, że stawki podatkowe nie będą musiały być stosowane.");
jr_define("_JOMRES_TAX_RATES_IMPORT","Importowanie stawek podatkowych");
jr_define("_JOMRES_TAX_RATES_IMPORT_INFO","Jeśli chcesz, stawki podatkowe stosowane w UE mogą zostać zaimportowane automatycznie. Uwaga, w przypadku korzystania z tej funkcji, usunięte zostaną wprowadzone ręcznie stawki podatków.");
jr_define("_JRPORTAL_TAX_RULE_EDIT","Edycja stawki podatku");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER","Numer VAT dla tej oferty.");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER_DESC","Proszę podać numer VAT dla tej oferty.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED","Numer VAT został potwierdzony.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED","Numer VAT nie został potwierdzony.");
jr_define("_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS","Wprowadzone dane firmy będą używane w celach księgowych do wystawiania faktur.");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL',"Dane konta nie zostały uzupełnione. Muszą zostać wprowadzone zanim przejdziemy dalej.");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT","Tryb Produkcyjny czy Rozwojowy?");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC","Włączenie opcji trybu Rozwojowego uruchomi raportowanie błędów. Włącz jeśli prowadzisz pracę techniczne. W przeciwnym razie zalecamy pozostawienie włączonej opcji trybu Produkcyjnego.");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION","Produkcyjny");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT","Rozwojowy");















jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS','Szczegóły zasobów');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS','Informacje taryfowe');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE','Tylko');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST','lewo!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE','Cecha oferty');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE','Nie można usunąć tej cechy oferty jest przypisana do zasobu. Usuń cechę z tego zasobu i spróbuj ponownie.');

	$siteConfig=jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Centrum mediów");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Przesyłanie zdjęć oferty");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Dodaj zdjęcia");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Zdjęcia przedmiotów rezerwacji");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Zdjęcie główne oferty");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Zdjęcia pokazu slajdów");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Wyczyść listę");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Przeciągnij i Upuść tutaj pliki");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Wybierz zasób, dla którego chcesz przesłać zdjęcia. Jeśli będziesz mógł przesłać zdjęcia dla poszczególnych zasobów (np. pokoi) zostanie wyświetlona lista rozwijana z możliwością wyboru odpowiedniego zasobu.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"Maksymalny rozmiar przesyłanego pliku to ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Akceptowane formaty plików to JPG i PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"Jeśli prześlesz kilka zdjęć jako \"Zdjęcie główne oferty\" tylko pierwsze z tych zdjęć będzie używane.");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Zobacz zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Usuń zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Prześlij zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Cechy ofert i zdjęcia przedmiotów rezerwacji");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Zdjęcia przedmiotów rezerwacji");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Zdjęcia cech ofert");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Prześlij wszystkie pliki");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Dashboard, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the content that you are working on. In the dashboard you will see a calendar, you can hover over any booking to see the guest's name, or click a date to be taken to the booking form for this property." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Active property switch page." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "This is where your property names will show." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "This is your property header." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Your photo gallery." );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Main buttons." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Inline Calendar." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Rooms list tab" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Here you can see all rooms, and the availability of each room if you click on the availability button." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Reviews list." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Map tab." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Under this tab your guests can see your property in a zoomable map." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "More Information tab." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Booking Form." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Your guests can either go to a separate page, or they can use the booking form in this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Main Property Details." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "All current and future tariffs" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Local Events." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "Local Attractions." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "If there are any attractions near to you, like museums or amusement parks they will be listed here." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Available Auctions." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Your Business details." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "External links." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellaneous ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffs" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tourist Tax." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "The table." ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Property creation, step 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Property country." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "The property type." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast." );

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Property creation step 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP or SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Property name & address." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Please enter the property name and address in the following fields." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Number of stars." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Property features." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "List all bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "List new bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "List old bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "List guests." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particulars." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Guest details." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Guest types." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Optional extras." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Media Centre." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS,false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Page information end." );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );
