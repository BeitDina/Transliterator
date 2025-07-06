<?php
/**
*
* @package Transliterator
* @version $Id: arc.php,v 1.0.2 2023/10/29 15:41:14 orynider Exp $
*
*/

//Acces check ܟ݁ܬ݂ܵܒ݂ܵܐ ܕ݁ܝܠܼܝܕ݂ܘܿܬ݂ܹܗ ܕ݂݁ܝܹܫܘܿܥ ܡܫܼܝܚܵܐ ܒ݂ܸ݁ܪܹܗ ܕ݂݁ܕ݂ܸܘܼܝܕ݂ ܒ݂ܸ݁ܪܹܗ ܕ݁ܲܐܒ݂ܪܵܗܵܡ ܀ 
if (!defined('IN_PORTAL') && (strpos($_SERVER['PHP_SELF'], "unit_test.php") <= 0)) { die("Direct acces not allowed! This file was accesed: ".$_SERVER['PHP_SELF']."."); }
if (defined('TO_ALEPH')) { print('Constant TO_ALEPH defined already: ' . TO_ALEPH); }
define('TO_SEARCH_PATTERN', "[)bgdhwzxTyklmns(pPcqr$&tˀḥṭˁṗṣšśאבגדהוזחטיכלמנסעפצקרששׁשׂתܐܒܓܕܗܘܙܚܛܝܟܠܡܢܣܥܦܧܨܩܪܫܬ]*");

//Definitions for Aramaic  
define('TO_ALEPH', '𐡀'); //U+0710 SYRIAC LETTER ALAPH
define('TO_ALEPH_SUP', 'ܑ');
define('TO_BHET_PARSI', 'ܭ');
define('TO_BHET', '𐡁');
define('TO_BET', '𐡁');
define('TO_GIMEL', '𐡂');
define('TO_GHIMEL', '𐡂');
define('TO_GHIMEL_PARSI', '𐡂');
define('TO_DALED', '𐡃');
define('TO_DHALED', '𐡃');
define('TO_DHALED_PARSI', '𐡃');
define('TO_HEH', '𐡄');
define('TO_YUD_HEH', '𐡄');
define('TO_HEH_MAPIK', '𐡄');
define('TO_VAV', '𐡅');
define('TO_ZED', '𐡆');
define('TO_ZED_SOGDIAN', '𐡆');
define('TO_CHET', '𐡇');
define('TO_TET', '𐡈');
define('TO_TET_GARSHUNI', '𐡈'); //arc
define('TO_YUD_PLURAL', '𐡉');
define('TO_YUD', '𐡉');
define('TO_KAF_SOFIT', '𐡊');
define('TO_KHAF_SOFIT', '𐡊');
define('TO_KAF', '𐡊');
define('TO_KHAF', '𐡊');
define('TO_KHAF_SOGDIAN', '𐡊');
define('TO_LAMED', '𐡋');
define('TO_MEM_SOFIT', '𐡌');
define('TO_MEM', '𐡌');
define('TO_NUN_SOFIT', '𐡍');
define('TO_NUN', '𐡍');
define('TO_SAMECH', '𐡎');
define('TO_SAMECH_SOFIT', '𐡎'); //arc
define('TO_AYIN', '𐡏');
define('TO_PHEI_SOFIT', '𐡐');
define('TO_PEI', '𐡐');
define('TO_PEH', '𐡐');
define('TO_FE', '𐡐'); //SOGDIAN
define('TO_TZADI_SOFIT', '𐡑');
define('TO_TZADI', '𐡑');
define('TO_KUF', '𐡒');
define('TO_RESH', '𐡓');
define('TO_SHIN_NO_DOT', '𐡔');	
define('TO_SHIN', '𐡔'.'݀' );
define('TO_SIN', '𐡔'.'݁');
define('TO_SHIN_SHIN_DOT_SHEVA_NACH', 'ܫܿ');
define('TO_SHIN_SHIN_DOT_KAMETZ', 'ܫܿ');
define('TO_TAV', '𐡕');
define('TO_THAV', '𐡕'); //U+074F

define('TO_END_OF_PARAGRAPH', '܀'); //U+0700 SYRIAC END OF PARAGRAPH
define('TO_SUPRALINEAR_FULL_STOP', '܁'); //U+0701 SYRIAC SUPRALINEAR FULL STOP
define('TO_SUBLINEAR_FULL_STOP', '܂'); //U+0702 SYRIAC SUBLINEAR FULL STOP
define('TO_SUPRALINEAR_COLON', '܃'); //U+0703 SYRIAC SUPRALINEAR COLON
define('TO_SUBLINEAR_COLON', '܄'); //U+0704 SYRIAC SUBLINEAR COLON
define('TO_HORIZONTAL_COLON', '܅'); //U+0705 SYRIAC HORIZONTAL COLON
define('TO_COLON_SKEWED_LEFT', '܆'); //U+0706 SYRIAC COLON SKEWED LEFT
define('TO_COLON_SKEWED_RIGHT', '܇'); //U+0707 SYRIAC COLON SKEWED RIGHT
define('TO_SUPRALINEAR_COLON_SKEWED_LEFT', '܈'); //U+0708 SYRIAC SUPRALINEAR COLON SKEWED LEFT
define('TO_SUBLINEAR_COLON_SKEWED_RIGHT', '܉'); //U+0709 SYRIAC SUBLINEAR COLON SKEWED RIGHT
define('TO_CONTRACTION', '܊'); //U+070A SYRIAC CONTRACTION
define('TO_HARKLEAN_OBELUS', '܋'); //U+070B SYRIAC HARKLEAN OBELUS
define('TO_HARKLEAN_METOBELUS', '܌'); //U+070C SYRIAC HARKLEAN METOBELUS
define('TO_HARKLEAN_ASTERISCUS', '܍'); //U+070D SYRIAC HARKLEAN ASTERISCUS

define('TO_RUKKAKHA_UP_ZLAMA_ANGULAR', '݂ܹ');
define('TO_PTHAHA_UP', 'ܰ'); //| U+0730 | Syriac Pthaha Above |
define('TO_PTHAHA_DOWN', 'ܱ'); //| U+0731 |Syriac Pthaha Below |
define('TO_PTHAHA_DOTTED', 'ܲ'); //| U+0732 | Syriac Pthaha Dotted |
define('TO_ZQAPHA_UP', 'ܳ'); //| U+0733 | Syriac Zqapha Above |
define('TO_ZQAPHA_DOWN', 'ܴ'); //| U+0734 | Syriac Zqapha Below |
define('TO_ZQAPHA_DOTTED', 'ܵ'); //| U+0735  | Syriac Zqapha Dotted |
define('TO_RBASA_UP', 'ܶ'); //| U+0736 | Syriac Rbasa Above |
define('TO_RBASA_DOWN', 'ܷ'); //| U+0737 | Syriac Rbasa Below |
define('TO_RBASA_DOTTED', 'ܸ'); //| U+0738  | Syriac Dotted Zlama Horizontal |
define('TO_ZLAMA_ANGULAR', 'ܹ'); //| U+0739  | Syriac Dotted Zlama Angular |
define('TO_ZLAMA_UP', 'ܺ'); //| U+073A | Syriac Hbasa Above |
define('TO_ZLAMA_DOWN', 'ܻ'); //| U+073B | Syriac Hbasa Below |
define('TO_ZLAMA_DOTTED', 'ܼ'); //| U+073C | Syriac Hbasa-Esata Dotted |
define('TO_ESASA_UP', 'ܽ'); //| U+073D | Syriac Esasa Above |
define('TO_ESASA_DOWN', 'ܾ'); //| U+073E | Syriac Esasa Below |
define('TO_RWAHA', 'ܿ'); //| U+073F | Syriac Rwaha |
define('TO_FEMININE_DOT', '݀'); //| U+0740 | Syriac Feminine Dot |
define('TO_QUSHSHAYA', '݁'); //| U+0741 | Syriac Qushshaya |
define('TO_RUKKAKHA', '݂'); //| U+0742 | Syriac Rukkakha |
define('TO_VERTICAL_DOTS_UP', '݃'); //| U+0743 | Syriac Two Vertical Dots Above |
define('TO_VERTICAL_DOTS_DOWN', '݄'); //| U+0744 | Syriac Two Vertical Dots Below |
define('TO_THREE_DOTS_UP', '݅'); //| U+0745 | Syriac Three Dots Above |
define('TO_THREE_DOTS_DOWN', '݆'); //| U+0746 | Syriac Three Dots Below |
define('TO_OBLIQUE_LINE_UP', '݇'); //| U+0747  | Syriac Oblique Line Above |
define('TO_OBLIQUE_LINE_DOWN', '݈'); //| U+0748 | Syriac Oblique Line Below |
define('TO_MUSIC', '݉'); //| U+0749 | Syriac Music |
define('TO_BARREKH', '݊'); //| U+074A | Syriac Barrekh |
define('TO_MAQAF', '־'); //u05BE Hebrew UP LINE

//Definitions for Imperial Aramaic


//Redefinitions from Aramaic to Hebrew
define('TO_HOLAM_HASHER', '݀'); //HOLAM HASHER for Wav 
define('TO_CHOLAM_MALEI', '݀');//HOLAM', '\u05B9'
define('TO_VAV_LEFT_DOT', 'ܘ݀'); //וֺ
define('TO_HOLAM_VAV', 'ܘܿ');
define('TO_HOLAM_MEM', 'ܡ݀'); //מֹ
define('TO_HOLAM_LAMED', 'ܠ݀'); //לֹ
define('TO_HOLAM_BHET', 'ܒ݀'); //בֹ
define('TO_HOLAM_TAV', 'ܛ݀'); //תֹּ
define('TO_HOLAM_RESH', 'ܪ݀'); //רֹ
define('TO_HOLAM_HASHER_VAV', 'ܘܿ'); //וֹ
define('TO_KHAF_KAMETZ', 'ܟܵ'); //ܟ
define('TO_SHEVA', '݄'); //SHVA', '\u05B0'
define('TO_SHEVA_NACH', '݄'); //SHVA', '\u05B0'
define('TO_SHEVA_UNKNOWN', '݄');


?>
