<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["opac_Header"]        = "\$text='Katalog';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'Dobrodošli v katalogu knjižnice.  Tukaj lahko
   poiščete informacije o gradivu naše knjižnice.';";
$trans["opac_SearchTitle"]   = "\$text='Iskanje gradiva:';";
$trans["opac_Keyword"]       = "\$text='Ključne besede';";
$trans["opac_Title"]         = "\$text='Naslov';";
$trans["opac_Author"]        = "\$text='Avtor';";
$trans["opac_Subject"]       = "\$text='Teme';";
$trans["opac_Callno"]        = "\$text='Lokacija';";
$trans["opac_Search"]        = "\$text='Poišči';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Prijava';";
$trans["MemberID"]        	   = "\$text = 'Številka izkaznice';";
$trans["Secret Word"]	           = "\$text = 'Geslo';";
$trans["loginFormLogin"]           = "\$text = 'Prijava';";

#****************************************************************************
#*  Translation text for page login.php
#****************************************************************************
$trans["MemberID is required."]    = "\$text = 'Številka izkaznice je zahtevana.';";
$trans["Secret Word is required."] = "\$text = 'Geslo je zahtevano.';";
$trans["No Memberfield 'secret' defined. Member-Login is deactivated!"]	= "\$text = 'Ni nastavljenega gesla. Prijava je onemogočena!';";
$trans["Invalid Logon. Maybe you don't have a Secret Word? Please ask the Staff!"] = "\$text = 'Napaka pri prijavi. Morda še nimate gesla? Dobite ga pri knjižničarju!';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrViewBalMsg"]           = "\$text='Opomba: Član ima dolg v višini %bal%.';";
$trans["mbrViewHead1"]            = "\$text='Informacije o članu:';";
$trans["mbrViewName"]             = "\$text='Ime:';";
$trans["mbrViewCardNmbr"]         = "\$text='Št. izkaznice:';";
$trans["mbrViewMbrShipEnd"]       = "\$text='plačano do:';";
$trans["mbrViewMbrShipNoEnd"]     = "\$text='neomejeno';";
$trans["mbrViewHead4"]            = "\$text='Število izposojenega gradiva:';";
$trans["mbrPrintCheckouts"]	  = "\$text='natisni potrdilo';";
$trans["mbrViewOutHdr1"]          = "\$text='Izposojeno';";
$trans["mbrViewOutHdr2"]          = "\$text='Vrsta gradiva';";
$trans["mbrViewOutHdr3"]          = "\$text='Inventarna št.';";
$trans["mbrViewOutHdr4"]          = "\$text='Naslov';";
$trans["mbrViewOutHdr5"]          = "\$text='Avtor';";
$trans["mbrViewOutHdr6"]          = "\$text='Datum vrnitve';";
$trans["mbrViewOutHdr7"]          = "\$text='Dnevi zamude';";
$trans["mbrViewOutHdr8"]          = "\$text='Podaljšanje';";
$trans["mbrViewNoCheckouts"]      = "\$text='Ni izposojenega gradiva.';";
$trans["Cannot renew item *"]     = "\$text='Podaljšanje ni možno *';";
$trans["Renew item"]              = "\$text='podaljšanje';";
$trans["mbrViewOutHdr9"]          = "\$text='krat';";
$trans["* You cannot renew, if you are more then 7 days too late"] = "\$text='* Podaljšanje ni možno, če je več kot 7 dni zamude';";
$trans["mbrViewHead5"]            = "\$text='Rezerviraj:';";
$trans["mbrViewBarcode"]          = "\$text='Inventarna št.:';";
$trans["indexSearch"]             = "\$text='Poišči';";
$trans["mbrViewPlaceHold"]        = "\$text='Rezerviraj';";
$trans["mbrViewHead6"]            = "\$text='Rezervirano gradivo:';";
$trans["mbrViewHoldHdr2"]         = "\$text='Rezervirano gradivo:';";
$trans["mbrViewHoldHdr3"]         = "\$text='Vrsta gradiva';";
$trans["mbrViewHoldHdr4"]         = "\$text='Inventarna št.';";
$trans["mbrViewHoldHdr5"]         = "\$text='Naslov';";
$trans["mbrViewHoldHdr6"]         = "\$text='Avtor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='Datum vrnitve';";
$trans["mbrViewNoHolds"]          = "\$text='Ni rezerviranega gradiva.';";
$trans["Please send a mail to delete holds"] = "\$text='Prosimo, pošljite e-pošto za izbris rezervacij';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Izposojeno gradivo za %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Današnji dan:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Član:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Št. izkaznice:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Zapri okno';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr2"]           = "\$text='Inventarna številka ne obstaja.';";
$trans["placeHoldErr3"]           = "\$text='Ta član ima to gradivo že izposojeno -- rezervacija ni možna.';";
$trans["This item is not checked out or on hold."]           = "\$text='To gradivo ni izposojeno ali rezervirano.';";

?>
