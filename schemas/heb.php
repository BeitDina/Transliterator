<?php
/**
*
* @package Transliterator
* @version $Id: heb.php,v 1.1.1 2023/10/22 21:21:14 orynider Exp $
*
*/

//Acces check
if (!defined('IN_PORTAL') && (strpos($_SERVER['PHP_SELF'], "unit_test.php") <= 0)) { die("Direct acces not allowed! This file was accesed: ".$_SERVER['PHP_SELF']."."); }

define('SEARCH_PATTERN', "[)bgdhwzxTyklmns(pPcqr$&tˀḥṭˁṗṣšśאבגדהוזחטיכלמנסעפצקרששׁשׂתܐܒܓܕܗܘܙܚܛܝܟܠܡܢܣܥܦܧܨܩܪܫܬ]*");

//Definitions at https://github.com/symbl-cc/symbl-data 
//Backup at https://github.com/anio/unicode-table-data/blob/95d28cae674791b18798e5cdb846bbffde017097/loc/de/symbols/0500.txt#L200C3-L200C3
define('ALEPH', 'א');
define('BHET', 'ב');
define('BET', 'בּ');
define('GIMEL', 'גּ');
define('GHIMEL', 'ג');
define('DALED', 'דּ');
define('DHALED', 'ד');
define('HEH', 'ה');
define('HEH_MAPIK', 'הִ');
define('VAV', 'ו');
define('ZED', 'ז');
define('CHET', 'ח');
define('TET', 'ט');
define('YUD_PLURAL', 'י');
define('YUD', 'י');
define('KAF_SOFIT', 'ךּ');
define('KHAF_SOFIT', 'ך');
define('KAF', 'כ');
define('KHAF', 'כּ');
define('KHAF_KAMETZ', 'כָּ');
define('LAMED', 'ל');
define('MEM_SOFIT', 'ם');
define('MEM', 'מ');
define('NUN_SOFIT', 'ן');
define('NUN', 'נ');
define('SAMECH', 'ס');
define('AYIN', 'ע');
define('PHEI_SOFIT', 'ף');
define('PEI', 'פ');
define('TZADI_SOFIT', 'ץ');
define('TZADI', 'צ');
define('KUF', 'ק');
define('RESH', 'ר');
define('SHIN_NO_DOT', 'ש');	
define('SHIN', 'ש'.'ׁ');
define('SIN', 'ש'.'ׂ');
define('SHIN_SHIN_DOT_SHEVA_NACH', 'שְּׁ');
define('SHIN_SHIN_DOT_KAMETZ', 'שָּׁ');
define('TAV', 'תּ');
define('THAV', 'ת');
	/*
	DAGESH_LETTER: return 'דגש\שורוק'
	Niqqud.KAMATZ: return 'קמץ'
	Niqqud.PATAKH: return 'פתח'
	Niqqud.TZEIRE: return 'צירה'
	Niqqud.SEGOL: return 'סגול'
	Niqqud.SHVA: return 'שוא'
	Niqqud.HOLAM: return 'חולם'
	Niqqud.KUBUTZ: return 'קובוץ'
	Niqqud.HIRIK: return 'חיריק'
	Niqqud.REDUCED_KAMATZ: return 'חטף-קמץ'
	Niqqud.REDUCED_PATAKH: return 'חטף-פתח'
	Niqqud.REDUCED_SEGOL: return 'חטף-סגול'
	SHIN_SMALIT: return 'שין-שמאלית'
	SHIN_YEMANIT: return 'שין-ימנית'
	*/
define('SHEVA', 'ְ'); //SHVA', '\u05B0'
define('SHEVA_NACH', 'ְ'); //SHVA', '\u05B0'
define('SHEVA_UNKNOWN', 'ְ');
define('CHATAF_SEGOL', 'ֱ'); //REDUCED_SEGOL', '\u05B1'
define('CHATAF_PATACH', 'ֲ'); //REDUCED_PATAKH', '\u05B2'
define('CHATAF_KAMETZ', 'ֳ'); //REDUCED_KAMATZ', '\u05B3'
define('CHIRIK_MALEI', 'ִ'); //HIRIK', '\u05B4'
define('CHIRIK_CHASER', 'ִ'); //HIRIK', '\u05B4'
define('CHIRIK', 'ִ');
define('CHIRIK_UNKNOWN', 'ֳ');
define('TZEIREI', 'ֵ');
define('TZEIREI_MALEI', 'ֵ'); //TZEIRE', '\u05B5'
define('TZEIREI_CHASER', 'ֵ'); //TZEIRE', '\u05B5'
define('TEZEIREI_CHASER', 'ֵ');
define('TEZEIREI_UNKNOWN', 'ֵ');
define('TZEIREI_UNKNOWN', 'ֵ');
define('SEGOL', 'ֶ'); //SEGOL', '\u05B6'  
define('PATACH_GANUV', '׆'); //\u05C6: Hebräisches Satzzeichen Nun Hafucha || 05C6: Hebräisches Interpunktions-Nonne Hafukha
define('PATACH', 'ַ'); //PATAKH', '\u05B7'; 
define('PATACH_UNKNOWN', 'ַ'); 
define('KAMETZ_KATAN', 'ׇ'); //\u05C7: Hebräisches Zeichen Kametz Katan || 05C7: Hebräischer Punkt Qamats Qatan
define('KAMETZ', 'ָ'); //KAMATZ', '\u05B8';
define('CHOLAM', 'ֹֹ');//HOLAM', '\u05B9' 
define('CHOLAM_CHASER', 'ֺ');//For Wav
define('CHOLAM_UNKNOWN', 'ֺ');//For Wav
define('HOLAM_HASHER', 'ֹֹ'); //HOLAM HASHER for Wav 
define('HOLAM_HASHER_VAV', 'וֹ');
define('HOLAM_RESH', 'רֹ');
define('CHOLAM_MALEI', 'ֹֹ');//HOLAM', '\u05B9'
define('HOLAM_MEM', 'מֹ'); //  מֹ מֹ
define('HOLAM_VAV', 'וֺ'); //
define('HOLAM_LAMED', 'לֹ');
define('HOLAM_BHET', 'בֹ');
define('HOLAM_TAV', 'תֹּ');
define('METEG', 'ֽ'); //METEG', '\u05BD'
define('MAPIQ', 'ּ'); //u05BC
define('MAQAF', '־'); //u05BE
define('RAFE', 'ֿ'); //u05BF
define('KUBUTZ', 'ֻ'); //KUBUTZ', '\u05BB' 
define('SHURUK', 'ּ'); //SHURUK', '\u05BC' //or: DAGESH_LETTER', '\u05bc'
define('DAGESH', 'ּ');
define('DAGESH_UNKNOWN', 'ּ');
define('SHIN_UNKNOWN', 'ׁ'); 
define('SHIN_DOT', 'ׁ');  //SHIN_YEMANIT', '\u05c1' &#x05C1 in BabelMap
define('SIN_DOT', 'ׂ'); //SHIN_SMALIT', '\u05c2' &#x05C2 in BabelMap
define('TIPEHA', '֖'); //U+0596 HEBREW ACCENT TIPEHA : tarha, me'ayla ~ mayla
define('MERKHA', '֥'); //U+05A5 HEBREW ACCENT MERKHA : yored
define('MERKHA_KEFULA', '֦'); //U+05A6 HEBREW ACCENT MERKHA KEFULA	
define('MUNAH', '֣'); //U+05A3 HEBREW ACCENT MUNAH		
define('ETNAHTA', '֑'); //U+0591 HEBREW ACCENT ETNAHTA : atnah
define('ATNAH_HAFUKH', '֢'); //U+05A2 HEBREW ACCENT ATNAH HAFUKH
define('YERAH_BEN_YOMO', '֪'); //U+05AA HEBREW ACCENT YERAH BEN YOMO : galgal	

/*
 KAMETZ
 PATACH
 PATACH_UNKOWN
 SEGOL
 TZEIREI_CHASER
 TZEIREI_MALEI
 TZEIREI_UNKNOWN
 TZEIREI_UNKNOWN
 CHIRIK_CHASER
 CHIRIK_MALEI
 CHIRIK_UNKNOWN
 CHOLAM_CHASER
 CHOLAM_MALEI
 CHOLAM_UNKNOWN
 KUBUTZ
 SHURUK
 SHEVA_UNKNOWN
 SHEVA_NA
 SHEVA_NACH
 CHATAF_PATACH
 CHATAF_KAMETZ
 CHATAF_SEGOL
 PATACH_GANUV

 ALEPH
 BET
 BHET
 BET_UNKNOWN
 GIMEL
 GHIMEL
 GIMEL_UNKNOWN
 DALED
 DHALED
 DALED_UNKNOWN
 HEH
 HEH_MAPIK
 HEH_UNKNOWN
 VAV
 ZED
 CHET
 TET
 YUD
 KAF
 KAF_SOFIT
 KHAF
 KHAF-SOFIT
 KAF_UNKNOWN
 KAF_SOFIT_UNKNOWN
 LAMED
 MEM
 MEM_SOFIT
 NUN
 NUN_SOFIT
 SAMECH
 AYIN
 PEI
 PEI_SOFIT
 PHEI
 PHEI_SOFIT
 PEI_UNKNOWN
 PEI_SOFIT_UNKNOWN
 TZADI
 TZADI_SOFIT
 KUF
 RESH
 SHIN
 SIN
 SHIN_UNKNOWN
 TAV
 THAV
 TAV_UNKNOWN
 */
?>
