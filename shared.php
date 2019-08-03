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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Prekliči';";
$trans["sharedDelete"]             = "\$text = 'Izbriši';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Podatki o gradivu';";
$trans["biblioViewMaterialType"]   = "\$text = 'Vrsta gradiva';";
$trans["biblioViewCollection"]     = "\$text = 'Zbirka';";
$trans["biblioViewPictureHeader"]  = "\$text = 'Slika';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Lokacija';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Informacija o izvodu';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Inventarna št.';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Opis';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Zadnja sprememba';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Datum vrnitve';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Function';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'izbriši';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'uredi';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'podrobni podatki';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Ni podrobnih podatkov.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Ni izvoda.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Pokaži v katalogu';";
$trans["biblioViewNewCopy"]        = "\$text = 'Dodaj izvod';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Dodaj nov e-vir';";
$trans["biblioViewYes"]            = "\$text = 'da';";
$trans["biblioViewNo"]             = "\$text = 'ne';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Ni zadetkov.';";
$trans["biblioSearchResults"]      = "\$text = 'Gradivo';";
$trans["biblioSearchResultPages"]  = "\$text = 'Strani';";
$trans["biblioSearchPrev"]         = "\$text = 'nazaj';";
$trans["biblioSearchNext"]         = "\$text = 'naprej';";
$trans["First"]                    = "\$text = 'Prva';";
$trans["Last"]                     = "\$text = 'Zadnja';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% zadetek.';
                                      } else {
                                        \$text = '%items% zadetkov';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' urejeno po avtorju';";
$trans["biblioSearchtitle"]        = "\$text = ' urejeno po naslovu';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'razvrsti zadetke po avtorju';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'razvrsti zadetke po naslovu';";
$trans["biblioSearchTitle"]        = "\$text = 'Naslov';";
$trans["biblioSearchTitleRemainder"] = "\$text = 'Podnaslov';";
$trans["biblioSearchAuthor"]       = "\$text = 'Avtor';";
$trans["biblioSearchMaterial"]     = "\$text = 'Vrsta gradiva';";
$trans["biblioSearchCollection"]   = "\$text = 'Zbirka';";
$trans["biblioSearchCall"]         = "\$text = 'Lokacija';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Inventarna št.';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Ni izvoda.';";
$trans["biblioSearchHold"]         = "\$text = 'rezerviraj';";
$trans["biblioSearchOutIn"]        = "\$text = 'izposoja/vračanje';";
$trans["biblioSearchDetail"]       = "\$text = 'Pokaži podrobne podatke';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Inventarna številka za izposojo ali vračanje';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Inventarna številka za rezervacijo';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Prijava za zaposlene';";
$trans["loginFormUsername"]        = "\$text = 'Uporabniško ime';";
$trans["loginFormPassword"]        = "\$text = 'Geslo';";
$trans["loginFormLogin"]           = "\$text = 'Prijava';";

#****************************************************************************
#*  Translation text for page login.php
#****************************************************************************
$trans["loginUserNameReqErr"]      = "\$text = 'Uporabniško ime je zahtevano.';";
$trans["loginPwdReqErr"]           = "\$text = 'Geslo je zahtevano.';";
$trans["loginPwdInvErr"]           = "\$text = 'Napačna prijava.';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Želite izbrisati rezervacijo?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Rezervacija je bila uspešno izbrisana.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Pomoč';";
$trans["helpHeaderCloseWin"]       = "\$text='Zapri okno';";
$trans["helpHeaderContents"]       = "\$text='Vsebina';";
$trans["helpHeaderPrint"]          = "\$text='Natisni';";

$trans["catalogResults"]           = "\$text='Zadetki';";
$trans["Revise Page"]              = "\$text='Osveži stran';";
$trans["wiki updates to this page"] = "\$text='wiki novosti za to stran';";


#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Datum:';";
$trans["headerDateFormat"]         = "\$text='d. m. Y';";
$trans["headerLibraryHours"]       = "\$text='Odprti smo:';";
$trans["headerLibraryPhone"]       = "\$text='Kontakt:';";
$trans["headerHome"]               = "\$text='Domov';";
$trans["headerCirculation"]        = "\$text='Izposoja';";
$trans["headerCataloging"]         = "\$text='Katalogizacija';";
$trans["headerAdmin"]              = "\$text='Administracija';";
$trans["headerReports"]            = "\$text='Poročila';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Domov';";
$trans["footerOPAC"]               = "\$text='Katalog';";
$trans["footerHelp"]               = "\$text='Pomoč';";
$trans["footerPoweredBy"]          = "\$text='OpenBiblio, verzija:';";
$trans["footerDatabaseVersion"]    = "\$text='podatkovna zbirka:';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='under the';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
