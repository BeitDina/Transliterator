<?php 
/**
*
* @package Tranliterator
* @version $Id: index.php,v 1.72 2023/11/04 06:54:06 orynider Exp $
*
*/
define('IN_PORTAL', 1);
$phpEx = substr(strrchr(__FILE__, '.'), true);
$root_path = "./";

include($root_path . 'trans.' . $phpEx);

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	
	<meta name="title"       content="Transliterator Index" />
	<meta name="author"      content="Beit Dina Bible Arheology and Translation Institute @ beitdina.net" />
	<meta name="copyright"   content="default template © Beit Dina 2019 based on subSilver style © 2005 phpBB Group." />
	<meta name="keywords"    content="Beit, Dina, Bible, Arheology" />
	<meta name="description" lang="en" content="Directory Index. This is the description search engines show when listing your site." />
	<meta name="category"    content="general" />
	<meta name="robots"      content="index,follow" />
	<meta name="revisit-after" content="7 days" >
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="blue" />
 	
	<title>Transliterate</title>
	<style type="text/css">
	<!-- Optionally, redefine some defintions for gecko browsers -->
	/*  phpBB3 Style Sheet some part is GNU GPL v2.0 License
		--------------------------------------------------------------
		Style name:		subSilver
		Based on style:	subSilver Theme for phpBB2 by phpBB Group
		Original author:	OryNider, using subsilver2 Theme as a base.	
		This is an alternative subsilver2 style with default colors.
		--------------------------------------------------------------
	*/

	/* Layout
	 ------------ */
	* {
		/* Reset browsers default margin, padding and font sizes */
		margin: 0;
		padding: 0;
	}

	abbr {
		text-decoration: none;
	}

	html {
		font-size: 100%;
	}
	/* General page style. The scroll bar colours only visible in IE5.5+ */
	body {
		background-color: #E5E5E5;
		scrollbar-face-color: #DEE3E7;
		scrollbar-highlight-color: #FFFFFF;
		scrollbar-shadow-color: #DEE3E7;
		scrollbar-3dlight-color: #D1D7DC;
		scrollbar-arrow-color:  #006699;
		scrollbar-track-color: #EFEFEF;
		scrollbar-darkshadow-color: #98AAB1;
		padding-right: 0px; 
		padding-left: 0px; 
		background: url("./images/backgroundbluelight.gif"); 
		padding-bottom: 0px; 
		margin: 5px 10px 10px; 
		font-family: "Roboto", Verdana, Geneva, 'Lucida Grande', Arial, "Helvetica Neue", Helvetica, sans-serif, droid-serif;  
		padding-top: 0px;
		font-size: 89.5%;
		margin: 0;	
	}

	#wrapheader {
		min-height: 120px;
		height: auto !important;
		height: 120px;
	/*	background-image: url('./images/background.gif');
		background-repeat: repeat-x;*/
	/*	padding: 0 25px 15px 25px;*/
		padding: 0;
	}

	#wrapcentre {
		margin: 15px 25px 0 25px;
	}

	#wrapfooter {
		text-align: center;
		clear: both;
	}

	#wrapnav {
		width: 100%;
		margin: 0;
		background-color: #ECECEC;
		border-width: 1px;
		border-style: solid;
		border-color: #A9B8C2;
	}

	#logodesc {
		margin-bottom: 5px;
		padding: 5px 25px;
		background: transparent none 0 0 no-repeat;		
		border-bottom: 1px solid #D9DFE4;
	}

	#menubar {
		margin: 0 25px;
	}

	#datebar {
		margin: 10px 25px 0 25px;
	}

	#findbar {
		width: 100%;
		margin: 0;
		padding: 0;
		border: 0;
	}

	.forumrules {
		background-color: #F9CC79;
		border-width: 1px;
		border-style: solid;
		border-color: #BB9860;
		padding: 4px;
		font-weight: normal;
		font-size: 1.1em;
		font-family: "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
	}

	.forumrules h3 {
		color: red;
	}

	#pageheader { }
	#pagecontent { }
	#pagefooter { }

	#poll { }
	#postrow { }
	#postdata { }


	/*  Text
	 --------------------- */
	h1 {
		color: black;
		font-family: "Lucida Grande", "Trebuchet MS", Verdana, sans-serif;
		font-weight: bold;
		font-size: 1.8em;
		text-decoration: none;
	}

	h2 {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: bold;
		font-size: 1.5em;
		text-decoration: none;
		line-height: 120%;
	}

	h3 {
		font-size: 1.3em;
		font-weight: bold;
		font-family: Arial, Helvetica, sans-serif;
		line-height: 120%;
	}

	h4 {
		margin: 0;
		font-size: 1.1em;
		font-weight: bold;
	}

	p {
		font-size: 1.1em;
	}

	p.moderators {
		margin: 0;
		float: left;
		color: black;
		font-weight: bold;
	}

	.rtl p.moderators {
		float: right;
	}

	p.linkmcp {
		margin: 0;
		float: right;
		white-space: nowrap;
	}

	.rtl p.linkmcp {
		float: left;
	}

	p.breadcrumbs {
		margin: 0;
		float: left;
		color: black;
		font-weight: bold;
		white-space: normal;
		font-size: 1em;
	}

	.rtl p.breadcrumbs {
		float: right;
	}

	p.datetime {
		margin: 0;
		float: right;
		white-space: nowrap;
		font-size: 1em;
	}

	.rtl p.datetime {
		float: left;
	}

	p.searchbar {
		padding: 2px 0;
		white-space: nowrap;
	} 

	p.searchbarreg {
		margin: 0;
		float: right;
		white-space: nowrap;
	}

	.rtl p.searchbarreg {
		float: left;
	}

	p.forumdesc {
		padding-bottom: 4px;
	}

	p.topicauthor {
		margin: 1px 0;
	}

	p.topicdetails {
		margin: 1px 0;
	}

	.postreported, .postreported a:visited, .postreported a:hover, .postreported a:link, .postreported a:active {
		margin: 1px 0;
		color: red;
		font-weight:bold;
	}

	.postapprove, .postapprove a:visited, .postapprove a:hover, .postapprove a:link, .postapprove a:active {
		color: green;
		font-weight:bold;
	}

	.postapprove img, .postreported img {
		vertical-align: bottom;
		padding-top: 5px;
	}

	.postauthor {
		color: #000000;
	}

	.postdetails {
		color: #000000;
	}


	/* The content of the posts (body of text) */
	.postbody { 
		font-size : 15px;
		line-height: 14px;	
		font-family: "Trebuchet MS", "Lucida Grande", Helvetica, Arial, Times, sans-serif;
	}

	.postbody li, ol, ul {
		margin: 0 0 0 1.5em;
	}

	.rtl .postbody li, .rtl ol, .rtl ul {
		margin: 0 1.5em 0 0;
	}

	.posthilit {
		background-color: yellow;
	}

	.nav {
		margin: 0;
		color: black;
		font-weight: bold;
	}

	/* Action-bars (container for post/reply buttons, pagination, etc.)
	---------------------------------------- */

	fa-fw {
		width: 1.28571429em;
		text-align: center;
	}

	.action-bar {
		font-size: 11px;
		margin: 4px 0;
	}

	.forabg + .action-bar {
		margin-top: 2em;
	}

	.action-bar .button {
		margin-right: 5px;
		float: left;
	}

	.action-bar .button-search {
		margin-right: 0;
	}

	.action-bar .newtopic, .action-bar .postreply {
		border-color: #1C0046;
		background-color: #AB95CB; /* Old browsers */ /* FF3.6+ */
		background-image: -webkit-linear-gradient(top, #AB95CB 0%, #1A0040 100%);
		background-image: linear-gradient(to bottom, #AB95CB 0%,#1A0040 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#AB95CB', endColorstr='#1A0040',GradientType=0 ); /* IE6-9 */
	}

	.action-bar .newtopic:hover, .action-bar .postreply:hover {
		background-color: #1A0040; /* Old browsers */ /* FF3.6+ */
		background-image: -webkit-linear-gradient(top, #1A0040 0%, #AB95CB 100%);
		background-image: linear-gradient(to bottom, #1A0040 0%,#AB95CB 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1A0040', endColorstr='#AB95CB',GradientType=0 ); /* IE6-9 */
	}

	.pagination {
		padding: 4px;
		color: black;
		font-size: 1em;
		font-weight: bold;
	}

	.cattitle {

	}

	/* General text */
	.gen {
		margin: 1px 1px;
	}
	.genmed {
		margin: 1px 1px;
	}
	.gensmall {
		margin: 1px 1px;
	}

	/* font sizes for old modules */
	.gen { font-size : 12px; }
	.genmed { font-size : 11px; }
	.gensmall { font-size : 10px; }

	.gen,.genmed,.gensmall { color : #000000; }
	a.gen,a.genmed,a.gensmall { color: #072978; text-decoration: none; }
	a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: #041642; text-decoration: underline; }


	/* The register, login, search etc links at the top of the page */
	.mainmenu		{ font-size : 11px; color : #000000 }
	a.mainmenu		{ text-decoration: none; color : #072978;  }
	a.mainmenu:hover{ text-decoration: underline; color : #041642; }

	/* Forum category titles */
	.cattitle		{ font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #072978}
	a.cattitle		{ text-decoration: none; color : #072978; }
	a.cattitle:hover{ text-decoration: underline; }

	/* Forum title: Text and link to the forums used in: index.php */
	.forumlink		{ font-weight: bold; font-size: 12px; color : #072978; }
	a.forumlink 	{ text-decoration: none; color : #072978; }
	a.forumlink:hover{ text-decoration: underline; color : #041642; }

	/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
	.nav			{ font-weight: bold; font-size: 11px; color : #000000;}
	a.nav			{ text-decoration: none; color : #072978; }
	a.nav:hover		{ text-decoration: underline; }


	/* titles for the topics: could specify viewed link colour too */
	.topictitle,h1,h2	{ font-weight: bold; font-size: 11px; color : #000000; }
	a.topictitle:link   { text-decoration: none; color : #072978; }
	a.topictitle:visited { text-decoration: none; color : #072978; }
	a.topictitle:hover	{ text-decoration: underline; color : #041642; }


	/* Name of poster in viewmsg.php and viewtopic.php and other places */
	.name			{ font-size : 11px; color : #000000;}

	/* Location, number of posts, post date etc */
	.postdetails		{ font-size : 10px; color : #000000; }

	a.postlink:link	{ text-decoration: none; color : #072978 }
	a.postlink:visited { text-decoration: none; color : #072978; }
	a.postlink:hover { text-decoration: underline; color : #041642}


	/* Quote & Code blocks */
	.code {
		font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #006600;
		background-color: #FAFAFA; border: #80BBEC; border-style: solid;
		border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
	}

	.quote {
		font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%;
		background-color: #FAFAFA; border: #80BBEC; border-style: solid;
		border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
	}


	/* Copyright and bottom info */
	.copyright		{ font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
	a.copyright		{ color: #444444; text-decoration: none;}
	a.copyright:hover { color: #000000; text-decoration: underline;}


	.copyright {
		color: #444;
		font-weight: normal;
		font-family: "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
	}

	.titles {
		font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
		font-weight: bold;
		font-size: 1.3em;
		text-decoration: none;
	}

	.error {
		color: red;
	}


	/* Horizontal lists
	----------------------------------------*/
	.navbar ul.linklist {
		padding: 2px 0;
		list-style-type: none;
	}

	ul.linklist {
		display: block;
		margin: 0;
	}

	.cp-main .panel {
		padding: 5px 10px;
	}

	ul.linklist > li {
		float: left;
		font-size: 1.1em;
		line-height: 2.2em;
		list-style-type: none;
		margin-right: 7px;
		width: auto;
	}

	ul.linklist > li.rightside, p.rightside, a.rightside {
		float: right;
		margin-right: 0;
		margin-left: 7px;
		text-align: right;
	}

	ul.navlinks {
		border-top: 1px solid transparent;
	}

	ul.leftside {
		float: left;
		margin-left: 0;
		margin-right: 5px;
		text-align: left;
	}

	ul.rightside {
		float: right;
		margin-left: 5px;
		margin-right: -5px;
		text-align: right;
	}

	ul.linklist li.responsive-menu {
		position: relative;
		margin: 0 5px 0 0;
	}

	.hasjs ul.linklist.leftside, .hasjs ul.linklist.rightside {
		max-width: 48%;
	}

	.hasjs ul.linklist.fullwidth {
		max-width: none;
	}

	li.responsive-menu.dropdown-right .dropdown {
		left: -9px;
	}

	li.responsive-menu.dropdown-left .dropdown {
		right: -6px;
	}

	ul.linklist .dropdown {
		top: 22px;
	}

	ul.linklist .dropdown-up .dropdown {
		bottom: 18px;
		top: auto;
	}

	/* Bulletin icons for list items
	----------------------------------------*/
	ul.linklist.bulletin > li:before {
		display: inline-block;
		content: "\2022";
		font-size: inherit;
		line-height: inherit;
		padding-right: 4px;
	}

	ul.linklist.bulletin > li:first-child:before,
	ul.linklist.bulletin > li.rightside:last-child:before {
		content: none;
	}

	ul.linklist.bulletin > li.no-bulletin:before {
		content: none;
	}

	.responsive-menu:before {
		display: none !important;
	}

	/* Profile in overall_header.html */
	.header-profile {
		display: inline-block;
		vertical-align: top;
	}

	a.header-avatar,
	a.header-avatar:hover {
		text-decoration: none;
	}

	a.header-avatar img {
		margin-bottom: 2px;
		max-height: 20px;
		vertical-align: middle;
		width: auto;
	}

	a.header-avatar span:after {
		content: '\f0dd';
		display: inline-block;
		font: normal normal normal 14px/1 FontAwesome;
		padding-left: 6px;
		padding-top: 2px;
		vertical-align: top;
	}

	/* -------------------------------------------------------------- /*
		$Icons
	/* -------------------------------------------------------------- */

	/* Global module setup
	---------------------------------------- */

	/* Renamed version of .fa class for agnostic usage of icon fonts.
	 * Just change the name of the font after the 14/1 to the name of
	 * the font you wish to use.
	 */
	.icon,
	.button .icon,
	blockquote cite:before,
	.uncited:before {
		font-family: FontAwesome;
		font-size: 14px;
		font-weight: normal;
		font-style: normal;
		font-variant: normal;
		line-height: 1;
		display: inline-block;
		/* stylelint-disable order/declaration-block-properties-specified-order */
		-moz-osx-font-smoothing: grayscale;
		-webkit-font-smoothing: antialiased;
		/* stylelint-enable order/declaration-block-properties-specified-order */
		text-rendering: auto; /* optimizelegibility throws things off #1094 */
	}

	.icon:before {
		padding-right: 2px;
	}

	.button .icon:before {
		padding-right: 0;
	}

	/* Icon size classes - Default size is 14px, use these for small variations */

	.icon.icon-xl {
		font-size: 20px;
	}

	.icon.icon-lg {
		font-size: 18px;
	}

	.icon.icon-md {
		font-size: 12px;
	}

	.icon.icon-sm {
		font-size: 10px;
	}

	/* icon modifiers */
	.icon-tiny {
		font-size: 16px;
		vertical-align: text-bottom;
		width: 12px;
		-webkit-transform: scale(0.65, 0.75);
		transform: scale(0.65, 0.75);
	}

	.arrow-right .icon {
		float: right;
	}

	.arrow-left:hover .icon {
		margin-right: 5px;
		margin-left: -5px;
	}

	.arrow-left .icon {
		float: left;
	}

	.arrow-right:hover .icon {
		margin-right: -5px;
		margin-left: 5px;
	}

	.post-buttons .dropdown-contents .icon {
		float: right;
		margin-left: 5px;
	}

	.alert_close .icon:before {
		border-radius: 50%;
		display: block;
		width: 11px;
		height: 12px;
		padding: 0;
	}

	blockquote cite:before,
	.uncited:before {
		content: "\f10d"; /* Font Awesome quote-left */
	}

	.rtl blockquote cite:before,
	.rtl .uncited:before {
		content: "\f10e"; /* Font Awesome quote-right */
	}

	/* Dropdown menu
	----------------------------------------*/
	.dropdown-container {
		position: relative;
	}

	.dropdown-container-right {
		float: right;
	}

	.dropdown-container-left {
		float: left;
	}

	.nojs .dropdown-container:hover .dropdown {
		display: block !important;
	}

	.dropdown {
		display: none;
		position: absolute;
		left: 0;
		top: 1.2em;
		z-index: 2;
		border: 1px solid transparent;
		border-radius: 5px;
		padding: 9px 0 0;
		margin-right: -500px;
	}

	.dropdown.live-search {
		top: auto;
	}

	.dropdown-container.topic-tools {
		float: left;
	}

	.dropdown-up .dropdown {
		top: auto;
		bottom: 1.2em;
		padding: 0 0 9px;
	}

	.dropdown-left .dropdown, .nojs .rightside .dropdown {
		left: auto;
		right: 0;
		margin-left: -500px;
		margin-right: 0;
	}

	.dropdown-button-control .dropdown {
		top: 24px;
	}

	.dropdown-button-control.dropdown-up .dropdown {
		top: auto;
		bottom: 24px;
	}

	.dropdown .pointer, .dropdown .pointer-inner {
		position: absolute;
		width: 0;
		height: 0;
		border-top-width: 0;
		border-bottom: 10px solid transparent;
		border-left: 10px dashed transparent;
		border-right: 10px dashed transparent;
		-webkit-transform: rotate(360deg); /* better anti-aliasing in webkit */
		display: block;
	}

	.dropdown-up .pointer, .dropdown-up .pointer-inner {
		border-bottom-width: 0;
		border-top: 10px solid transparent;
	}

	.dropdown .pointer {
		right: auto;
		left: 10px;
		top: -1px;
		z-index: 3;
	}

	.dropdown-up .pointer {
		bottom: -1px;
		top: auto;
	}

	.dropdown-left .dropdown .pointer, .nojs .rightside .dropdown .pointer {
		left: auto;
		right: 10px;
	}

	.dropdown .pointer-inner {
		top: auto;
		bottom: -11px;
		left: -10px;
	}

	.dropdown-up .pointer-inner {
		bottom: auto;
		top: -11px;
	}

	.dropdown .dropdown-contents {
		z-index: 2;
		overflow: hidden;
		overflow-y: auto;
		border: 1px solid transparent;
		border-radius: 5px;
		padding: 5px;
		position: relative;
		max-height: 300px;
	}

	.dropdown-contents a {
		display: block;
		padding: 5px;
	}

	.jumpbox {
		margin: 5px 0;
	}

	.jumpbox .dropdown li {
		border-top: 1px solid transparent;
	}

	.jumpbox .dropdown-select {
		margin: 0;
	}

	.jumpbox .dropdown-contents {
		padding: 0;
		text-decoration: none;
	}

	.jumpbox .dropdown-contents li {
		padding: 0;
	}

	.jumpbox .dropdown-contents a {
		margin-right: 20px;
		padding: 5px 10px;
		text-decoration: none;
		width: 100%;
	}

	.jumpbox .spacer {
		display: inline-block;
		width: 0px;
	}

	.jumpbox .spacer + .spacer {
		width: 20px;
	}

	.dropdown-contents a {
		display: block;
		padding: 5px;
	}

	.jumpbox .dropdown-select {
		margin: 0;
	}

	.jumpbox .dropdown-contents a {
		text-decoration: none;
	}

	.dropdown li {
		display: list-item;
		border-top: 1px dotted transparent;
		float: none !important;
		line-height: normal !important;
		font-size: 1em !important;
		list-style: none;
		margin: 0;
		white-space: nowrap;
		text-align: left;
	}

	.dropdown-contents > li {
		padding-right: 15px;
	}

	.dropdown-nonscroll > li {
		padding-right: 0;
	}

	.dropdown li:first-child, .dropdown li.separator + li, .dropdown li li {
		border-top: 0;
	}

	.dropdown li li:first-child {
		margin-top: 4px;
	}

	.dropdown li li:last-child {
		padding-bottom: 0;
	}

	.dropdown li li {
		border-top: 1px dotted transparent;
		padding-left: 18px;
	}

	.wrap .dropdown li, .dropdown.wrap li, .dropdown-extended li {
		white-space: normal;
	}

	.dropdown li.separator {
		border-top: 1px solid transparent;
		padding: 0;
	}

	.dropdown li.separator:first-child, .dropdown li.separator:last-child {
		display: none !important;
	}

	/* jQuery popups
	---------------------------------------- */
	.phpbb_alert {
		background-color: #FFFFFF;
		border-color: #999999;
	}
	.darken {
		background-color: #000000;
	}

	.loading_indicator {
		background-color: #000000;
		background-image: url("./images/loading.gif");
	}

	.dropdown-extended ul li {
		border-top-color: #B9B9B9;
	}

	.dropdown-extended ul li:hover {
		background-color: #cfd1f6;
		color: #000000;
	}

	.dropdown-extended .header, .dropdown-extended .footer {
		border-color: #B9B9B9;
		color: #000000;
	}

	.dropdown-extended .footer {
		border-top-style: solid;
		border-top-width: 1px;
	}

	.dropdown-extended .header {
		background-color: #f1f2ff; /* Old browsers */ /* FF3.6+ */
		background-image: -webkit-linear-gradient(top, #f1f2ff 0%, #caceeb 100%);
		background-image: linear-gradient(to bottom, #f1f2ff 0%,#caceeb 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1f2ff', endColorstr='#caceeb',GradientType=0 ); /* IE6-9 */
	}

	.dropdown .pointer {
		border-color: #B9B9B9 transparent;
	}

	.dropdown .pointer-inner {
		border-color: #FFF transparent;
	}

	.dropdown-extended .pointer-inner {
		border-color: #f1f2ff transparent;
	}

	.dropdown .dropdown-contents {
		background: #fff;
		border-color: #B9B9B9;
		box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.2);
	}

	.dropdown-up .dropdown-contents {
		box-shadow: 1px 0 5px rgba(0, 0, 0, 0.2);
	}

	.dropdown li, .dropdown li li {
		border-color: #DCDCDC;
	}

	.dropdown li.separator {
		border-color: #DCDCDC;
	}

	/* Notifications
	---------------------------------------- */

	.notification_list p.notification-time {
		color: #4d4d77;
	}

	li.notification-reported strong, li.notification-disapproved strong {
		color: #0d5aa2;
	}

	.badge {
		background-color: #0d5aa2;
		color: #ffffff;
	}

	/* Responsive breadcrumbs
	----------------------------------------*/
	.breadcrumbs .crumb {
		float: left;
		font-weight: bold;
		word-wrap: normal;
	}

	.breadcrumbs .crumb:before {
		content: '\2039';
		font-weight: bold;
		padding: 0 0.5em;
	}

	.breadcrumbs .crumb:first-child:before {
		content: none;
	}

	.breadcrumbs .crumb a {
		white-space: nowrap;
		text-overflow: ellipsis;
		vertical-align: bottom;
		overflow: hidden;
	}

	.breadcrumbs.wrapped .crumb a { letter-spacing: -.3px; }
	.breadcrumbs.wrapped .crumb.wrapped-medium a { letter-spacing: -.4px; }
	.breadcrumbs.wrapped .crumb.wrapped-tiny a { letter-spacing: -.5px; }

	.breadcrumbs .crumb.wrapped-max a { max-width: 120px; }
	.breadcrumbs .crumb.wrapped-wide a { max-width: 100px; }
	.breadcrumbs .crumb.wrapped-medium a { max-width: 80px; }
	.breadcrumbs .crumb.wrapped-small a { max-width: 60px; }
	.breadcrumbs .crumb.wrapped-tiny a { max-width: 40px; }

	/* Tables
	 ------------ */
	th {
		color: #FFA34F;
		font-size: 1.1em;
		font-weight: bold;
		background-color: #006699;
		background-image: url('./images/cellpic3.gif');
		white-space: nowrap;
		padding: 7px 5px;
	}


	/* General font families for common tags */
	font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
	a:link,a:active,a:visited { color : #006699; }
	a:hover		{ text-decoration: underline; color : #DD6900; }
	hr	{ height: 0px; border: solid #80BBEC 0px; border-top-width: 1px;}


	/* This is the border line & background colour round the entire page */
	.bodyline	{ 
		background-color: #E3F0FB;
		background-image: url("./images/bodyline.jpg");
		padding-bottom: 40px; 	
		border: 1px #4B8DF1 solid; 
	}

	/* This is the outline round the main subsilver-ish forum tables */
	.forumline	{ background-color: #E3F0FB; border: 2px #006699 solid; }
	.bodyline	{ border: 1px #98AAB1 solid; padding: 0px 0px 0px 0px; }
	.forumline	{ border: 2px #006699 solid; padding: 0px 0px 0px 0px; }

	td {
		padding: 0.4px;
	}
	td.profile {
		padding: 2px;
	}
	.profile {
		padding: 2px;
	}

	.tablebg {
		background-color: #A9B8C2;
	}

	/* Main table cell colours and backgrounds */

	.row1 {
		background-color: #DAECFA;
		padding: 4px;
	}

	.row2 {
		background-color: #BADBF5;
		padding: 4px;
	}

	.row3 {
		background-color: #80BBEC;
		padding: 4px;
	}

	.row4 { 
		background-color: #E4E8EB;
		padding: 4px;	
	}

	.col1 { 
		background-color: #BADBF5;
		padding: 4px;	
	}

	.col2 { 
		background-color: #DAECFA;
		padding: 4px;	
	}

	/* Edit this colors for every subsilver-ish ported template */
	.row1, .bg1	{ background-color: #EFEFEF; } /* .bg1 */
	.row2, .bg2	{ background-color: #DEE3E7; } /* .bg2 */
	.row2, .bg3	{ background-color: #D1D7DC; } /* .bg3 */
	.row4, .bg4	{ background-color: #EFEFEF; }
	.row5, .bg5	{ background-color: #DEE3E7; }
	.row6, .bg6	{ background-color: #D1D7DC; }

	/*
	  This is for the table cell above the Topics, Post & Last posts on the index.php page
	  By default this is the fading out gradiated silver background.
	  However, you could replace this with a bitmap specific for each forum
	*/
	.rowpic {
			background-color: #E3F0FB;
			background-image: url('./images/cellpic2.jpg');
			background-repeat: repeat-y;
	}

	.catdiv {
		height: 28px;
		margin: 0;
		padding: 0;
		border: 0;
		background: white url('./images/cellpic2.jpg') repeat-y scroll top left;
	}

	.rtl .catdiv {
		background: white url('./images/cellpic2_rtl.jpg') repeat-y scroll top right;
	}

	/* Header cells - the blue and silver gradient backgrounds */
	th	{
		color: #FFA34F; font-size: 11px; font-weight : bold;
		background-color: #006699;
		background-image: url('./images/cellpic3.gif');
	}

	.cat {
		background-color: #C7D0D7;
		text-indent: 4px;
	}


	.cat,.catHead,.catSides,.catLeft,.catRight,.catBottom {
				background-image: url('./images/cellpic1.gif');
				background-color:#80BBEC; border: #E3F0FB; border-style: solid;
	}


	/*
	  Setting additional nice inner borders for the main table cells.
	  The names indicate which sides the border will be on.
	  Don't worry if you don't understand this, just ignore it :-)
	*/
	td.cat,td.catHead,td.catBottom {
		height: 29px;
		border-width: 0px 0px 0px 0px;
	}
	th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
		font-weight: bold; border: #E3F0FB; border-style: solid; height: 28px; }
	td.row3Right,td.spaceRow {
		background-color: #80BBEC; border: #E3F0FB; border-style: solid; }

	th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
	th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
	th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
	th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
	th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
	th.thTop	 { border-width: 1px 0px 0px 0px; }
	th.thCornerL { border-width: 1px 0px 0px 1px; }
	th.thCornerR { border-width: 1px 1px 0px 0px; } 

	.overflow-wrap {
	  line-break: auto;
	  overflow-wrap: break-word;
	  word-wrap: break-word;
	  overflow: hidden-lg-down;
	  hyphens: auto;
	}

	.spacer {
		background-color: #D1D7DC;
	}

	hr {
		height: 1px;
		border-width: 0;
		background-color: #D1D7DC;
		color: #D1D7DC;
	}

	.legend {
		text-align:center;
		margin: 0 auto;
	}

	/* Links
	 ------------ */

	/* Links adjustment to correctly display an order of rtl/ltr mixed content */
	.rtl a {
		direction: rtl;
		unicode-bidi: embed;
	}

	/* CSS spec requires a:link, a:visited, a:hover and a:active rules to be specified in this order. */
	/* See http://www.phpbb.com/bugs/phpbb3/59685 */
	a:link {
		color: #006597;
		text-decoration: none;
	}

	a:active,
	a:visited {
		color: #005784;
		text-decoration: none;
	}

	a:hover {
		color: #D46400;
		text-decoration: underline;
	}

	a:active {
		color: #005784;
		text-decoration: none;
	}

	a.forumlink {
		color: #069;
		font-weight: bold;
		font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
		font-size: 1.2em;
	}

	a.topictitle {
		margin: 1px 0;
		font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
		font-weight: bold;
		font-size: 1.2em;
	}

	a.topictitle:visited {
		color: #5493B4;
		text-decoration: none;
	}

	th a,
	th a:visited {
		color: #FFA34F !important;
		text-decoration: none;
	}

	th a:hover {
		text-decoration: underline;
	}


	/* Form Elements
	 ------------ */
	form {
		margin: 0;
		padding: 0;
		border: 0;
	}

	input {
		color: #333333;
		font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
		font-size: 1.1em;
		font-weight: normal;
		padding: 1px;
		border: 1px solid #A9B8C2;
		background-color: #FAFAFA;
	}

	textarea {
		background-color: #FAFAFA;
		color: #333333;
		font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
		font-size: 1.3em; 
		line-height: 1.4em;
		font-weight: normal;
		border: 1px solid #A9B8C2;
		padding: 2px;
	}

	select {
		color: #333333;
		background-color: #FAFAFA;
		font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
		font-size: 1.1em;
		font-weight: normal;
		border: 1px solid #A9B8C2;
		padding: 1px;
	}

	option {
		padding: 0 1em 0 0;
	}

	option.disabled-option {
		color: graytext;
	}

	.rtl option {
		padding: 0 0 0 1em;
	}

	input.radio {
		border: none;
		background-color: transparent;
	}

	.post {
		background-color: white;
		border-style: solid;
		border-width: 1px;
	}

	.btnbbcode {
		color: #000000;
		font-weight: normal;
		font-size: 1.1em;
		font-family: "Lucida Grande", Verdana, Helvetica, sans-serif;
		background-color: #EFEFEF;
		border: 1px solid #666666;
	}

	.btnmain {
		font-weight: bold;
		background-color: #ECECEC;
		border: 1px solid #A9B8C2;
		cursor: pointer;
		padding: 1px 5px;
		font-size: 1.1em;
	}

	.btnlite {
		font-weight: normal;
		background-color: #ECECEC;
		border: 1px solid #A9B8C2;
		cursor: pointer;
		padding: 1px 5px;
		font-size: 1.1em;
	}

	.btnfile {
		font-weight: normal;
		background-color: #ECECEC;
		border: 1px solid #A9B8C2;
		padding: 1px 5px;
		font-size: 1.1em;
	}

	.helpline {
		background-color: #DEE3E7;
		border-style: none;
	}


	/* BBCode
	 ------------ */
	.quotetitle, .attachtitle {
		margin: 10px 5px 0 5px;
		padding: 4px;
		border-width: 1px 1px 0 1px;
		border-style: solid;
		border-color: #A9B8C2;
		color: #333333;
		background-color: #A9B8C2;
		font-size: 0.85em;
		font-weight: bold;
	}

	.quotetitle .quotetitle {
		font-size: 1em;
	}

	.quotecontent, .attachcontent {
		margin: 0 5px 10px 5px;
		padding: 5px;
		border-color: #A9B8C2;
		border-width: 0 1px 1px 1px;
		border-style: solid;
		font-weight: normal;
		font-size: 1em;
		line-height: 1.4em;
		font-family: "Lucida Grande", "Trebuchet MS", Helvetica, Arial, sans-serif;
		background-color: #FAFAFA;
		color: #4B5C77;
	}

	.attachcontent {
		font-size: 0.85em;
	}

	.codetitle {
		margin: 10px 5px 0 5px;
		padding: 2px 4px;
		border-width: 1px 1px 0 1px;
		border-style: solid;
		border-color: #A9B8C2;
		color: #333333;
		background-color: #A9B8C2;
		font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
		font-size: 0.8em;
	}

	.codecontent {
		direction: ltr;
		margin: 0 5px 10px 5px;
		padding: 5px;
		border-color: #A9B8C2;
		border-width: 0 1px 1px 1px;
		border-style: solid;
		font-weight: normal;
		color: #006600;
		font-size: 0.85em;
		font-family: Monaco, 'Courier New', monospace;
		background-color: #FAFAFA;
	}

	.postimage {
		max-width: 100%;
	}

	.syntaxbg {
		color: #FFFFFF;
	}

	.syntaxcomment {
		color: #FF8000;
	}

	.syntaxdefault {
		color: #0000BB;
	}

	.syntaxhtml {
		color: #000000;
	}

	.syntaxkeyword {
		color: #007700;
	}

	.syntaxstring {
		color: #DD0000;
	}


	/* Private messages
	 ------------------ */
	.pm_marked_colour {
		background-color: #000000;
	}

	.pm_replied_colour {
		background-color: #A9B8C2;
	}

	.pm_friend_colour {
		background-color: #007700;
	}

	.pm_foe_colour {
		background-color: #DD0000;
	}


	/* Misc
	 ------------ */
	img {
		border: none;
	}

	.sep {
		color: black;
		background-color: #FFA34F;
	}

	table.colortable td {
		padding: 0;
	}

	pre {
		font-size: 1.1em;
		font-family: Monaco, 'Courier New', monospace;
	}

	.nowrap {
		white-space: nowrap;
	}

	.username-coloured {
		font-weight: bold;
	}
	/* GYM Sitemaps & RSS - www.phpbb-seo.com */
	div.gymsublist {
		display:block;
		position:relative;
		padding-left:10px;
		padding-top:5px;
		padding-bottom:10px;
		padding-right:0;
		margin:0;
	}
	div.gymsublist ul {
		display:block;
		position:relative;
		height:1%;
		padding-left:30px;
	}
	div.gymsublist ul li {
		display:block;
		position:relative;
		line-height:18px;
		font-size:11px;
	}
	.emoji {
		min-height: 18px;
		min-width: 18px;
		height: 1em;
		width: 1em;
	}

	/* The largest text used in the index page title and toptic title etc. */
	.maintitle,h1,h2	{
				font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
				text-decoration: none; line-height : 120%; color : #000000;
	}


	/* Form elements */
	input,textarea, select {
		color : #000000;
		font: normal 11px Verdana, Arial, Helvetica, sans-serif;
		border-color : #000000;
	}

	/* The text input fields background colour */
	input.post, textarea.post, select {
		background-color : #E3F0FB;
	}

	input { text-indent : 2px; }

	/* The buttons used for bbCode styling in message post */
	input.button {
		background-color : #DAECFA;
		color : #000000;
		font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;
	}

	/* The main submit button option */
	input.mainoption {
		background-color : #FAFAFA;
		font-weight : bold;
	}

	/* None-bold submit button */
	input.liteoption {
		background-color : #FAFAFA;
		font-weight : normal;
	}

	/* This is the line in the posting page which shows the rollover
	  help line. This is actually a text box, but if set to be the same
	  colour as the background no one will know ;)
	*/
	.helpline { background-color: #BADBF5; border-style: none; }


	/* Former imageset */
	span.imageset {
		display: inline-block;
		background: transparent none 0 0 no-repeat;
		margin: 0;
		padding: 0;
		width: 0;
		height: 0;
		overflow: hidden;
	}
	a.imageset {
		text-decoration: none !important;
	}

	/* Global imageset items */
	.imageset.site_logo {
		background-image: url("./images/site_logo.png");
		padding-top: 0px;	
		padding-left: 240px;
		padding-right: 0px;  
		padding-bottom: 100px;  
	}
	.imageset.upload_bar {
		background-image: url("./images/upload_bar.gif");
		padding-left: 280px;
		padding-top: 16px;
	}
	.imageset.poll_left {
		background-image: url("./images/poll_left.gif");
		padding-left: 4px;
		padding-top: 12px;
	}
	.imageset.poll_center {
		background-image: url("./images/poll_center.gif");
		padding-left: 1px;
		padding-top: 12px;
	}
	.imageset.poll_right {
		background-image: url("./images/poll_right.gif");
		padding-left: 4px;
		padding-top: 12px;
	}
	.imageset.forum_link {
		background-image: url("./images/forum_link.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_read {
		background-image: url("./images/forum_read.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_read_locked {
		background-image: url("./images/forum_read_locked.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_read_subforum {
		background-image: url("./images/forum_read_subforum.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_unread {
		background-image: url("./images/forum_unread.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_unread_locked {
		background-image: url("./images/forum_unread_locked.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.forum_unread_subforum {
		background-image: url("./images/forum_unread_subforum.gif");
		padding-left: 46px;
		padding-top: 25px;
	}
	.imageset.topic_moved {
		background-image: url("./images/topic_moved.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read {
		background-image: url("./images/topic_read.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read_mine {
		background-image: url("./images/topic_read_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read_hot {
		background-image: url("./images/topic_read_hot.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read_hot_mine {
		background-image: url("./images/topic_read_hot_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read_locked {
		background-image: url("./images/topic_read_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_read_locked_mine {
		background-image: url("./images/topic_read_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread {
		background-image: url("./images/topic_unread.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread_mine {
		background-image: url("./images/topic_unread_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread_hot {
		background-image: url("./images/topic_unread_hot.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread_hot_mine {
		background-image: url("./images/topic_unread_hot_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread_locked {
		background-image: url("./images/topic_unread_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.topic_unread_locked_mine {
		background-image: url("./images/topic_unread_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_read {
		background-image: url("./images/sticky_read.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_read_mine {
		background-image: url("./images/sticky_read_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_read_locked {
		background-image: url("./images/sticky_read_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_read_locked_mine {
		background-image: url("./images/sticky_read_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_unread {
		background-image: url("./images/sticky_unread.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_unread_mine {
		background-image: url("./images/sticky_unread_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_unread_locked {
		background-image: url("./images/sticky_unread_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.sticky_unread_locked_mine {
		background-image: url("./images/sticky_unread_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_read {
		background-image: url("./images/announce_read.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_read_mine {
		background-image: url("./images/announce_read_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_read_locked {
		background-image: url("./images/announce_read_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_read_locked_mine {
		background-image: url("./images/announce_read_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_unread {
		background-image: url("./images/announce_unread.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_unread_mine {
		background-image: url("./images/announce_unread_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_unread_locked {
		background-image: url("./images/announce_unread_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.announce_unread_locked_mine {
		background-image: url("./images/announce_unread_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_read {
		background-image: url("./images/global_read.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_read_mine {
		background-image: url("./images/global_read_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_read_locked {
		background-image: url("./images/global_read_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_read_locked_mine {
		background-image: url("./images/global_read_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_unread {
		background-image: url("./images/global_unread.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_unread_mine {
		background-image: url("./images/global_unread_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_unread_locked {
		background-image: url("./images/global_unread_locked.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.global_unread_locked_mine {
		background-image: url("./images/global_unread_locked_mine.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.pm_read {
		background-image: url("./images/topic_read.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.pm_unread {
		background-image: url("./images/topic_unread.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.icon_post_target {
		background-image: url("./images/icon_post_target.gif");
		padding-left: 12px;
		padding-top: 9px;
	}
	.imageset.icon_post_target_unread {
		background-image: url("./images/icon_post_target_unread.gif");
		padding-left: 12px;
		padding-top: 9px;
	}
	.imageset.icon_topic_attach {
		background-image: url("./images/icon_topic_attach.gif");
		padding-left: 14px;
		padding-top: 18px;
	}
	.imageset.icon_topic_latest {
		background-image: url("./images/icon_topic_latest.gif");
		padding-left: 18px;
		padding-top: 9px;
	}
	.imageset.icon_topic_newest {
		background-image: url("./images/icon_topic_newest.gif");
		padding-left: 18px;
		padding-top: 9px;
	}
	.imageset.icon_topic_reported {
		background-image: url("./images/icon_topic_reported.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.icon_topic_unapproved {
		background-image: url("./images/icon_topic_unapproved.gif");
		padding-left: 19px;
		padding-top: 18px;
	}
	.imageset.icon_topic_deleted {
		background-image: url("./images/icon_topic_deleted.gif");
		padding-left: 14px;
		padding-top: 14px;
	}


	/* English images for fallback */
	.imageset.phpbb_aol-icon, .imageset.icon_contact_aim {
		background-image: url("./en/icon_contact_aim.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_contact_email {
		background-image: url("./en/icon_contact_email.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.phpbb_icq-icon, .imageset.icon_contact_icq {
		background-image: url("./en/icon_contact_icq.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_contact_jabber {
		background-image: url("./en/icon_contact_jabber.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.phpbb_wlm-icon, .imageset.icon_contact_msnm {
		background-image: url("./en/icon_contact_msnm.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_contact_pm {
		background-image: url("./en/icon_contact_pm.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.phpbb_yahoo-icon, .imageset.icon_contact_yahoo {
		background-image: url("./en/icon_contact_yahoo.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.phpbb_website-icon, .imageset.icon_contact_www {
		background-image: url("./en/icon_contact_www.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_post_delete {
		background-image: url("./en/icon_post_delete.gif");
		padding-left: 20px;
		padding-top: 20px;
	}
	.imageset.icon_post_edit {
		background-image: url("./en/icon_post_edit.gif");
		padding-left: 90px;
		padding-top: 20px;
	}
	.imageset.icon_post_info {
		background-image: url("./en/icon_post_info.gif");
		padding-left: 20px;
		padding-top: 20px;
	}
	.imageset.icon_post_quote {
		background-image: url("./en/icon_post_quote.gif");
		padding-left: 90px;
		padding-top: 20px;
	}
	.imageset.icon_post_report {
		background-image: url("./en/icon_post_report.gif");
		padding-left: 20px;
		padding-top: 20px;
	}
	.imageset.icon_user_online {
		background-image: url("./en/icon_user_online.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_user_offline {
		background-image: url("./en/icon_user_offline.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_user_profile {
		background-image: url("./en/icon_user_profile.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_user_search {
		background-image: url("./en/icon_user_search.gif");
		padding-left: 72px;
		padding-top: 20px;
	}
	.imageset.icon_user_warn {
		background-image: url("./en/icon_user_warn.gif");
		padding-left: 20px;
		padding-top: 20px;
	}
	.imageset.button_pm_new {
		background-image: url("./en/button_pm_new.gif");
		padding-left: 97px;
		padding-top: 27px;
	}
	.imageset.button_pm_reply {
		background-image: url("./en/button_pm_reply.gif");
		padding-left: 90px;
		padding-top: 20px;
	}
	.imageset.button_topic_locked {
		background-image: url("./en/button_topic_locked.gif");
		padding-left: 97px;
		padding-top: 27px;
	}
	.imageset.button_topic_new {
		background-image: url("./en/button_topic_new.gif");
		padding-left: 97px;
		padding-top: 27px;
	}
	.imageset.button_topic_reply {
		background-image: url("./en/button_topic_reply.gif");
		padding-left: 97px;
		padding-top: 27px;
	}

	/* Responsive breadcrumbs
	----------------------------------------*/
	.rtl .breadcrumbs .crumb {
		float: right;
	}

	/* Table styles
	----------------------------------------*/
	table.table1 {
		width: 100%;
	}
	table.table2 {
		width: 100%;
	}
	table.table3 {
		width: 100%;
	}
	.ucp-main table.table1 {
		padding: 2px;
	}

	table.table1 thead th {
		font-weight: normal;
		text-transform: uppercase;
		line-height: 1.3em;
		font-size: 1em;
		padding: 0 0 4px 3px;
	}

	table.table1 thead th span {
		padding-left: 7px;
	}

	table.table1 tbody tr {
		border: 1px solid transparent;
	}

	table.table1 td {
		font-size: 1.1em;
	}

	table.table1 tbody td {
		padding: 5px;
		border-top: 1px solid transparent;
	}

	table.table1 tbody th {
		padding: 5px;
		border-bottom: 1px solid transparent;
		text-align: left;
	}

	/* Specific column styles */
	table.table1 .name		{ text-align: left; }
	table.table1 .center		{ text-align: center; }
	table.table3 .reportby	{ width: 15%; }
	table.table1 .posts		{ text-align: center; width: 7%; }
	table.table1 .joined		{ text-align: left; width: 15%; }
	table.table1 .active		{ text-align: left; width: 15%; }
	table.table1 .mark		{ text-align: center; width: 7%; }
	table.table1 .info		{ text-align: left; width: 30%; }
	table.table2 .info div		{ width: 100%; white-space: normal; overflow: hidden; }
	table.table1 .autocol		{ line-height: 2em; white-space: nowrap; }
	table.table1 thead .autocol { padding-left: 1em; }

	table.table1 span.rank-img {
		float: right;
		width: auto;
	}

	table.info td {
		padding: 3px;
	}

	table.info tbody th {
		padding: 3px;
		text-align: right;
		vertical-align: top;
		font-weight: normal;
	}


	.cat,.catHead,.catSides,.catLeft,.catRight,.catBottom {
				background-image: url('./images/cellpic1.gif');
				background-color:#80BBEC; border: #E3F0FB; border-style: solid; height: 28px;
	}

	/*
	  Setting additional nice inner borders for the main table cells.
	  The names indicate which sides the border will be on.
	  Don't worry if you don't understand this, just ignore it :-)
	*/
	td.cat,td.catHead,td.catBottom {
		height: 29px;
		border-width: 0px 0px 0px 0px;
	}
	th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
		font-weight: bold; border: #E3F0FB; border-style: solid; height: 28px; }
	td.row3Right,td.spaceRow {
		background-color: #80BBEC; border: #E3F0FB; border-style: solid; }

	th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
	th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
	th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
	th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
	th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
	th.thTop	 { border-width: 1px 0px 0px 0px; }
	th.thCornerL { border-width: 1px 0px 0px 1px; }
	th.thCornerR { border-width: 1px 1px 0px 0px; } 

	table.table1 tbody tr:hover, table.table1 tbody tr.hover {
		background-color: #CFE1F6;
		color: #000;
	}

	table.table1 td {
		color: #536482;
	}

	table.table1 tbody td {
		border-top-color: #FAFAFA;
	}

	table.table1 tbody th {
		border-bottom-color: #000000;
		color: #333333;
		background-color: #FFFFFF;
	}

	table.info tbody th {
		color: #000000;
	}

	table.table1 td {
		color: #536482;
	}
		
	table.table1 td {
		font-size: 1.1em;
	}

	table.fixed-width-table {
		table-layout: fixed;
	}

	.rtl table.table1 thead th {
		padding: 0 3px 4px 0;
	}

	.rtl table.table1 thead th span {
		padding-left: 0;
		padding-right: 7px;
	}

	.rtl table.table1 tbody th {
		text-align: right;
	}

	/* Specific column styles */
	.rtl table.table1 .name		{ text-align: right; }
	.rtl table.table1 .joined		{ text-align: right; }
	.rtl table.table1 .active		{ text-align: right; }
	.rtl table.table1 .info		{ text-align: right; }
	.rtl table.table1 thead .autocol { padding-left: 0; padding-right: 1em; }

	/* Specific column styles */
	.ltr table.table1 .name		{ text-align: left; }
	.ltr table.table1 .joined		{ text-align: left; }
	.ltr table.table1 .active		{ text-align: left; }
	.ltr table.table1 .info		{ text-align: left; }
	.ltr table.table1 thead .autocol { padding-right: 0; padding-left: 1em; }

	.rtl table.table1 span.rank-img {
		float: left;
	}

	.rtl table.info tbody th {
		text-align: left;
	}

	.rtl .forumbg table.table1 {
		margin: 0 -1px -1px -2px;
	}

	.forumbg table.table1 {
		margin: 0;
	}

	.forumbg-table > .inner {
		margin: 0 -1px;
	}

	.color_palette_placeholder table {
		border-collapse: separate;
		border-spacing: 1px;
	}


	/*
	  Setting additional nice inner borders for the main table cells.
	  The names indicate which sides the border will be on.
	  Don't worry if you don't understand this, just ignore it :-)
	*/
	td.cat,td.catHead,td.catBottom {
		height: 29px;
		border-width: 0px 0px 0px 0px;
	}
	th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
		font-weight: bold; border: #E3F0FB; border-style: solid; height: 28px; }
	td.row3Right,td.spaceRow {
		background-color: #80BBEC; border: #E3F0FB; border-style: solid; }

	th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
	th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
	th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
	th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
	th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
	th.thTop	 { border-width: 1px 0px 0px 0px; }
	th.thCornerL { border-width: 1px 0px 0px 1px; }
	th.thCornerR { border-width: 1px 1px 0px 0px; } 
	 
	 /* Control Panel Styles
	---------------------------------------- */


	/* Main CP box
	----------------------------------------*/
	.cp-menu {
		float:left;
		width: 19%;
		margin-top: 1em;
		margin-bottom: 5px;
	}

	.cp-main {
		float: left;
		width: 81%;
	}

	.cp-main .content {
		padding: 0;
	}

	.panel-container .panel p {
		font-size: 1.1em;
	}

	.panel-container .panel ol {
		margin-left: 2em;
		font-size: 1.1em;
	}

	.panel-container .panel li.row {
		border-bottom: 1px solid transparent;
		border-top: 1px solid transparent;
	}

	ul.cplist {
		margin-bottom: 5px;
		border-top: 1px solid transparent;
	}

	.panel-container .panel li.header dd, .panel-container .panel li.header dt {
		margin-bottom: 2px;
	}

	.panel-container table.table1 {
		margin-bottom: 1em;
	}

	.panel-container table.table1 thead th {
		font-weight: bold;
		border-bottom: 1px solid transparent;
		padding: 5px;
	}

	.panel-container table.table1 tbody th {
		font-style: italic;
		background-color: transparent !important;
		border-bottom: none;
	}

	.cp-main .pm-message {
		border: 1px solid transparent;
		margin: 10px 0;
		width: auto;
		float: none;
	}

	.pm-message h2 {
		padding-bottom: 5px;
	}

	.cp-main .postbody h3, .cp-main .box2 h3 {
		margin-top: 0;
	}

	.panel-container .postbody p.author {
		font-size: 1.1em;
	}

	.cp-main .buttons {
		margin-left: 0;
	}

	.cp-main ul.linklist {
		margin: 0;
	}

	/* MCP Specific tweaks */
	.mcp-main .postbody {
		width: 100%;
	}

	.tabs-container h2 {
		float: left;
		margin-bottom: 0px;
	}

	/* CP tabs shared
	----------------------------------------*/
	.tabs, .minitabs {
		line-height: normal;
	}

	.tabs > ul, .minitabs > ul {
		list-style: none;
		margin: 0;
		padding: 0;
		position: relative;
	}

	.tabs .tab, .minitabs .tab {
		display: block;
		float: left;
		font-size: 1em;
		font-weight: bold;
		line-height: 1.4em;
	}

	.tabs .tab > a, .minitabs .tab > a {
		display: block;
		padding: 5px 9px;
		position: relative;
		text-decoration: none;
		white-space: nowrap;
		cursor: pointer;
	}

	/* CP tabbed menu
	----------------------------------------*/
	.tabs {
		margin: 20px 0 0 7px;
	}

	.tabs .tab > a {
		border: 1px solid transparent;
		border-radius: 4px 4px 0 0;
		margin: 1px 1px 0 0;
	}

	.tabs .activetab > a {
		margin-top: 0;
		padding-bottom: 7px;
	}

	/* Mini tabbed menu used in MCP
	----------------------------------------*/
	.minitabs {
		float: right;
		margin: 15px 7px 0 0;
		max-width: 50%;
	}

	.minitabs .tab {
		float: right;
	}

	.minitabs .tab > a {
		border-radius: 5px 5px 0 0;
		margin-left: 2px;
	}

	.minitabs .tab > a:hover {
		text-decoration: none;
	}

	/* Responsive tabs
	----------------------------------------*/
	.responsive-tab {
		position: relative;
	}

	.responsive-tab > a.responsive-tab-link {
		display: block;
		font-size: 1.6em;
		position: relative;
		width: 16px;
		line-height: 0.9em;
		text-decoration: none;
	}

	.responsive-tab .responsive-tab-link:before {
		content: '';
		position: absolute;
		left: 10px;
		top: 7px;
		height: .125em;
		width: 14px;
		border-bottom: 0.125em solid transparent;
		border-top: 0.375em double transparent;
	}

	.tabs .dropdown, .minitabs .dropdown {
		top: 20px;
		margin-right: -2px;
		font-size: 1.1em;
		font-weight: normal;
	}

	.minitabs .dropdown {
		margin-right: -4px;
	}

	.tabs .dropdown-up .dropdown, .minitabs .dropdown-up .dropdown {
		bottom: 20px;
		top: auto;
	}

	.tabs .dropdown li {
		text-align: right;
	}

	.minitabs .dropdown li {
		text-align: left;
	}

	/* UCP navigation menu
	----------------------------------------*/
	/* Container for sub-navigation list */
	.navigation {
		width: 100%;
		padding-top: 36px;
	}

	.navigation ul {
		list-style: none;
	}

	/* Default list state */
	.navigation li {
		display: inline;
		font-weight: bold;
		margin: 1px 0;
		padding: 0;
	}

	/* Link styles for the sub-section links */
	.navigation a {
		display: block;
		padding: 5px;
		margin: 1px 0;
		text-decoration: none;
	}

	.navigation a:hover {
		text-decoration: none;
	}

	/* Preferences pane layout
	----------------------------------------*/
	.cp-main h2 {
		border-bottom: none;
		padding: 0;
		margin-left: 10px;
	}

	/* Friends list */
	.cp-mini {
		margin: 10px 15px 10px 5px;
		max-height: 200px;
		overflow-y: auto;
		padding: 5px 10px;
		border-radius: 7px;
	}

	dl.mini dt {
		font-weight: bold;
	}

	dl.mini dd {
		padding-top: 4px;
	}

	.friend-online {
		font-weight: bold;
	}

	.friend-offline {
		font-style: italic;
	}

	/* PM Styles
	----------------------------------------*/
	/* Defined rules list for PM options */
	ol.def-rules {
		padding-left: 0;
	}

	ol.def-rules li {
		line-height: 180%;
		padding: 1px;
	}

	/* PM marking colours */
	.pmlist li.bg1 {
		padding: 0 3px;
	}

	.pmlist li.bg2 {
		padding: 0 3px;
	}

	.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
		border-left-color: transparent;
		border-right-color: transparent;
	}

	.pmlist li.pm_marked_colour, .pm_marked_colour,
	.pmlist li.pm_replied_colour, .pm_replied_colour,
	.pmlist li.pm_friend_colour, .pm_friend_colour,
	.pmlist li.pm_foe_colour, .pm_foe_colour {
		padding: 0;
		border: solid 3px transparent;
		border-width: 0 3px;
	}

	.pm-legend {
		border-left-width: 10px;
		border-left-style: solid;
		border-right-width: 0;
		margin-bottom: 3px;
		padding-left: 3px;
	}

	/* Avatar gallery */
	.gallery label {
		position: relative;
		float: left;
		margin: 10px;
		padding: 5px;
		width: auto;
		border: 1px solid transparent;
		text-align: center;
	}

	/* Responsive *CP navigation
	----------------------------------------*/
	@media only screen and (max-width: 900px), only screen and (max-device-width: 900px)
	{
		.nojs .tabs a span, .nojs .minitabs a span {
			max-width: 40px;
			overflow: hidden;
			text-overflow: ellipsis;
			letter-spacing: -.5px;
		}

		.cp-menu, .navigation, .cp-main {
			float: none;
			width: auto;
			margin: 0;
		}

		.navigation {
			padding: 0;
			margin: 0 auto;
			max-width: 320px;
		}

		.navigation a {
			background-image: none;
		}

		.navigation li:first-child a {
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}

		.navigation li:last-child a {
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}
	} 
	  
	/* Misc layout styles
	---------------------------------------- */
	/* column[1-2] styles are containers for two column layouts */
	.rtl .column1 {
		float: right;
		clear: right;
	}

	.rtl .column2 {
		float: left;
		clear: left;
	}

	/* General classes for placing floating blocks */
	.rtl .left-box {
		float: right;
		text-align: right;
	}

	.rtl .right-box {
		float: left;
		text-align: left;
	}

	.rtl dl.details dt {
		float: right;
		clear: right;
		text-align: left;
	}

	.rtl dl.details dd {
		margin-right: 0;
		margin-left: 0;
		padding-right: 5px;
		padding-left: 0;
		float: right;
	}

	*:first-child+html dl.details dd {
		margin-right: 30%;
		float: none;
	}

	* html dl.details dd {
		margin-right: 30%;
		float: none;
	} 

	/* RTL imageset entries */
	.rtl .imageset.site_logo {
		padding-right: 170px;
		padding-left: 0;
	}
	.rtl .imageset.upload_bar {
		padding-right: 280px;
		padding-left: 0;
	}
	.rtl .imageset.poll_left, .rtl .imageset.poll_right {
		padding-right: 4px;
		padding-left: 0;
	}
	.rtl .imageset.poll_center {
		padding-right: 1px;
		padding-left: 0;
	}
	.rtl .imageset.forum_link, .rtl .imageset.forum_read, .rtl .imageset.forum_read_locked, .rtl .imageset.forum_read_subforum, .rtl .imageset.forum_unread, .rtl .imageset.forum_unread_locked, .rtl .imageset.forum_unread_subforum {
		padding-right: 46px;
		padding-left: 0;
	}
	.rtl .imageset.topic_moved, .rtl .imageset.topic_read, .rtl .imageset.topic_read_mine, .rtl .imageset.topic_read_hot, .rtl .imageset.topic_read_hot_mine, .rtl .imageset.topic_read_locked, .rtl .imageset.topic_read_locked_mine, .rtl .imageset.topic_unread, .rtl .imageset.topic_unread_mine, .rtl .imageset.topic_unread_hot, .rtl .imageset.topic_unread_hot_mine, .rtl .imageset.topic_unread_locked, .rtl .imageset.topic_unread_locked_mine, .rtl .imageset.sticky_read, .rtl .imageset.sticky_read_mine, .rtl .imageset.sticky_read_locked, .rtl .imageset.sticky_read_locked_mine, .rtl .imageset.sticky_unread, .rtl .imageset.sticky_unread_mine, .rtl .imageset.sticky_unread_locked, .rtl .imageset.sticky_unread_locked_mine, .rtl .imageset.announce_read, .rtl .imageset.announce_read_mine, .rtl .imageset.announce_read_locked, .rtl .imageset.announce_read_locked_mine, .rtl .imageset.announce_unread, .rtl .imageset.announce_unread_mine, .rtl .imageset.announce_unread_locked, .rtl .imageset.announce_unread_locked_mine, .rtl .imageset.global_read, .rtl .imageset.global_read_mine, .rtl .imageset.global_read_locked, .rtl .imageset.global_read_locked_mine, .rtl .imageset.global_unread, .rtl .imageset.global_unread_mine, .rtl .imageset.global_unread_locked, .rtl .imageset.global_unread_locked_mine, .rtl .imageset.pm_read, .rtl .imageset.pm_unread, .rtl .imageset.icon_topic_reported, .rtl .imageset.icon_topic_unapproved {
		padding-right: 19px;
		padding-left: 0;
	}
	.rtl .imageset.icon_post_target, .rtl .imageset.icon_post_target_unread {
		padding-right: 12px;
		padding-left: 0;
	}
	.rtl .imageset.icon_topic_attach {
		padding-right: 14px;
		padding-left: 0;
	}
	.rtl .imageset.icon_topic_latest, .rtl .imageset.icon_topic_newest {
		padding-right: 18px;
		padding-left: 0;
	}

	#notification_list {
		display: none;
		position: absolute;
		width: 310px;
		z-index: 1;
		box-shadow: 3px 3px 5px darkgray;
	}

	#notification_list .notification_scroll {
		max-height: 350px;
		overflow-y: auto;
		overflow-x: hidden;
	}

	#notification_list table {
		width: 100%;
	}

	#notification_list .notification_title {
		padding: 3px;
	}

	#notification_list .notification_title:after {
		clear: both;
		content: '';
		display: block;
	}

	#notification_list .header {
		padding: 5px;
		font-weight: bold;
		border: 1px solid #A9B8C2;
		border-bottom: 0;
	}

	#notification_list > .header > .header_settings {
		float: right;
		font-weight: normal;
		text-transform: none;
	}

	#notification_list .header:after {
		content: '';
		display: table;
		clear: both;
	}

	#notification_list .footer {
		text-align: center;
		font-size: 1.2em;
		border: 1px solid #A9B8C2;
		border-top: 0;
	}

	.notification_list img {
		max-width: 50px;
		max-height: 50px;
	}

	#notification_list .footer > a {
		display: block;
	}

	#notification_list .notification-time {
		font-size: 0.9em;
		float: right;
	}

	.notification_list .notifications_time {
		font-size: 0.8em;
	}


	/* Responsive Design
	---------------------------------------- */

	@media (max-width: 320px) {
		select, .inputbox {
			max-width: 240px;
		}
	}

	/* Notifications list
	----------------------------------------*/
	@media (max-width: 350px) {
		.dropdown-extended .dropdown-contents {
			width: auto;
		}
	}

	@media (max-width: 430px) {
		.action-bar .search-box .inputbox {
			width: 120px;
		}

		.section-viewtopic .search-box .inputbox {
			width: 57px;
		}

		.action-bar .search-box .inputbox ::-moz-placeholder {
			content: "Search...";
		}

		.action-bar .search-box .inputbox :-ms-input-placeholder {
			content: "Search...";
		}

		.action-bar .search-box .inputbox ::-webkit-input-placeholder {
			content: "Search...";
		}
	}

	@media (max-width: 500px) {
		dd label {
			white-space: normal;
		}

		select, .inputbox {
			max-width: 260px;
		}

		.captcha-panel dd.captcha {
			margin-left: 0;
		}

		.captcha-panel dd.captcha-image img {
			width: 100%;
		}

		dl.details dt, dl.details dd {
			width: auto;
			float: none;
			text-align: left;
		}

		dl.details dd {
			margin-left: 20px;
		}

		p.responsive-center {
			float: none;
			text-align: center;
			margin-bottom: 5px;
		}

		.action-bar > div {
			margin-bottom: 5px;
		}

		.action-bar > .pagination {
			float: none;
			clear: both;
			padding-bottom: 1px;
			text-align: center;
		}

		.action-bar > .pagination li.page-jump {
			margin: 0 2px;
		}

		p.jumpbox-return {
			display: none;
		}

		.display-options > label:nth-child(1) {
			display: block;
			margin-bottom: 5px;
		}

		.attach-controls {
			margin-top: 5px;
			width: 100%;
		}

		.quick-links .dropdown-trigger span {
			display: none;
		}
	}

	@media (max-width: 550px) {
		ul.topiclist.forums dt {
			margin-right: 0;
		}

		ul.topiclist.forums dt .list-inner {
			margin-right: 0;
		}

		ul.topiclist.forums dd.lastpost {
			display: none;
		}
	}

	@media (max-width: 700px) {
		.responsive-hide { display: none !important; }
		.responsive-show { display: block !important; }
		.responsive-show-inline { display: inline !important; }
		.responsive-show-inline-block { display: inline-block !important; }

		/* Content wrappers
		----------------------------------------*/
		html {
			height: auto;
		}

		body {
			padding: 0;
		}

		.wrap {
			border: none;
			border-radius: 0;
			margin: 0;
			min-width: 290px;
			padding: 0 5px;
		}

		/* Common block wrappers
		----------------------------------------*/
		.headerbar, .navbar, .forabg, .forumbg, .post, .panel {
			border-radius: 0;
			margin-left: -5px;
			margin-right: -5px;
		}

		.cp-main .forabg, .cp-main .forumdb, .cp-main .post, .cp-main .panel {
			border-radius: 7px;
		}

		/* Logo block
		----------------------------------------*/
		.site-description {
			float: none;
			width: auto;
			text-align: center;
		}

		.logo {
			/* change display value to inline-block to show logo */
			display: none;
			float: none;
			padding: 10px;
		}

		.site-description h1, .site-description p {
			text-align: inherit;
			float: none;
			margin: 5px;
			line-height: 1.2em;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.site-description p, .search-header {
			display: none;
		}

		/* Navigation
		----------------------------------------*/
		.headerbar + .navbar {
			margin-top: -5px;
		}

		/* Search
		----------------------------------------*/
		.responsive-search { display: block !important; }

		/* .topiclist lists
		----------------------------------------*/
		li.header dt {
			text-align: center;
			text-transform: none;
			line-height: 1em;
			font-size: 1.2em;
			padding-bottom: 4px;
		}

		ul.topiclist li.header dt, ul.topiclist li.header dt .list-inner {
			margin-right: 0 !important;
			padding-right: 0;
		}

		ul.topiclist li.header dd {
			display: none !important;
		}

		ul.topiclist dt, ul.topiclist dt .list-inner,
		ul.topiclist.missing-column dt, ul.topiclist.missing-column dt .list-inner,
		ul.topiclist.two-long-columns dt, ul.topiclist.two-long-columns dt .list-inner,
		ul.topiclist.two-columns dt, ul.topiclist.two-columns dt .list-inner {
			margin-right: 0;
		}

		ul.topiclist dt .list-inner.with-mark {
			padding-right: 34px;
		}

		ul.topiclist dt .list-inner {
			min-height: 28px;
		}

		ul.topiclist li.header dt .list-inner {
			min-height: 0;
		}

		ul.topiclist dd {
			display: none;
		}
		ul.topiclist dd.mark {
			display: block;
		}

		/* Forums and topics lists
		----------------------------------------*/
		ul.topiclist.forums dt {
			margin-right: -250px;
		}

		ul.topiclist dd.mark {
			display: block;
			position: absolute;
			right: 5px;
			top: 0;
			margin: 0;
			width: auto;
			min-width: 0;
			text-align: left;
		}

		ul.topiclist.forums dd.topics dfn, ul.topiclist.topics dd.posts dfn {
			position: relative;
			left: 0;
			width: auto;
			display: inline;
			font-weight: normal;
		}

		li.row .responsive-show strong {
			font-weight: bold;
			color: inherit;
		}

		ul.topiclist li.row dt a.subforum {
			vertical-align: bottom;
			overflow: hidden;
			text-overflow: ellipsis;
			max-width: 100px;
		}
		
		/* Forums and topics lists
		----------------------------------------*/	
		dd.cat-title {
			width: 50px;	
			min-width: 20px;	
			overflow: hidden;
			text-align: left;
			line-height: 2.2em;
			font-size: 1.1em;
		}
		
		dd.catdiv {
			min-width: 20px;
			overflow: hidden;
			text-align: center;
			line-height: 2.2em;
			font-size: 1.1em;
		} 
		
		dd.topicdetails {
			width: 50px;	
			overflow: hidden;
			margin-left: 2px;
			margin-right: 2px;
			text-align: left;
			line-height: 1.2em;
			font-size: 1.1em;
		}   
		
		dd.forumdesc {
			margin-left: 2px;
			margin-right: 2px;
			text-align: left;
			line-height: 1.2em;
			font-size: 1.1em;
		}   
		
		dd.nav {
			overflow: hidden;
			text-align: center;
			font-size: 1.1em;
		}   
		
		dd.views {
			min-width: 100px;
			overflow: hidden;
			text-align: center;
			font-size: 1.1em;   
		}   
		
		dd.answers {
			min-width: 60px;
			overflow: hidden;
			text-align: center;
			line-height: 1.2em;
			font-size: 1.1em;   
		}   
		
		dd.forumlink {
			min-width: 60px;
			text-align: center;
			font-size: 1.1em;
			}   
		
		dd.lastpost {
			width: 50px;	
			min-width: 10px;
			text-align: left;
			font-size: 1.1em;
		}   
		
		div.legend {
			text-align: center;
			vertical-align: middle;
			line-height: 1.2em;
			font-size: 1.1em;
		}	
		
		/* Responsive breadcrumbs
		----------------------------------------*/
		.rtl .breadcrumbs .crumb {
			float: right;
		}

		/* Table styles
		----------------------------------------*/
		.rtl table.table1 thead th {
			padding: 0 3px 4px 0;
		}

		.rtl table.table1 thead th span {
			padding-left: 0;
			padding-right: 7px;
		}

		.rtl table.table1 tbody th {
			text-align: right;
		}

		/* Specific column styles */
		.rtl table.table1 .name		{ text-align: right; }
		.rtl table.table1 .joined		{ text-align: right; }
		.rtl table.table1 .active		{ text-align: right; }
		.rtl table.table1 .info		{ text-align: right; }
		.rtl table.table1 thead .autocol { padding-left: 0; padding-right: 1em; }

		.rtl table.table1 span.rank-img {
			float: left;
		}

		.rtl table.info tbody th {
			text-align: left;
		}

		.rtl .forumbg table.table1 {
			margin: 0 -1px -1px -2px;
		}

		/* Misc layout styles
		---------------------------------------- */
		/* column[1-2] styles are containers for two column layouts */
		.rtl .column1 {
			float: right;
			clear: right;
		}

		.rtl .column2 {
			float: left;
			clear: left;
		}

		/* General classes for placing floating blocks */
		.rtl .left-box {
			float: right;
			text-align: right;
		}

		.rtl .right-box {
			float: left;
			text-align: left;
		}

		.rtl dl.details dt {
			float: right;
			clear: right;
			text-align: left;
		}

		.rtl dl.details dd {
			margin-right: 0;
			margin-left: 0;
			padding-right: 5px;
			padding-left: 0;
			float: right;
		}

		*:first-child+html dl.details dd {
			margin-right: 30%;
			float: none;
		}

		* html dl.details dd {
			margin-right: 30%;
			float: none;
		} 	

		/* Pagination
		----------------------------------------*/
		.pagination > ul {
			margin: 5px 0 0;
		}

		.row .pagination .ellipsis + li {
			display: none !important;
		}

		/* Responsive tables
		----------------------------------------*/
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}		
		
		table.responsive, table.responsive tbody, table.responsive tr, table.responsive td {
			display: block;
		}

		table.responsive thead, table.responsive th {
			display: none;
		}

		table.responsive.show-header thead, table.responsive.show-header th:first-child {
			display: block;
			width: auto !important;
			text-align: left !important;
		}

		table.responsive.show-header th:first-child span.rank-img {
			display: none;
		}

		table.responsive tr {
			margin: 2px 0;
		}

		table.responsive td {
			width: auto !important;
			text-align: left !important;
			padding: 4px;
		}

		table.responsive td.empty {
			display: none !important;
		}

		table.responsive td > dfn {
			display: inline-block !important;
		}

		table.responsive td > dfn:after {
			content: ':';
			padding-right: 5px;
		}

		table.responsive span.rank-img {
			float: none;
			padding-right: 5px;
		}

		table.responsive.memberlist td:first-child input[type="checkbox"] {
			float: right;
		}
		

		/* Tabbed menu
			Based on: http://www.alistapart.com/articles/slidingdoors2/
		----------------------------------------*/
		#tabs {
			line-height: normal;
			margin: 0 0 -6px 7px;
			min-width: 600px;
		}

		.rtl #tabs {
			margin: 0 7px -6px 0;
		}

		#tabs ul {
			margin:0;
			padding: 0;
			list-style: none;
		}

		#tabs li {
			display: inline;
			margin: 0;
			padding: 0;
			font-size: 0.85em;
			font-weight: bold;
		}

		#tabs a {
			float: left;
			background:url("images/bg_tabs1.gif") no-repeat 0% -34px;
			margin: 0 1px 0 0;
			padding: 0 0 0 7px;
			text-decoration: none;
			position: relative;
		}

		.rtl #tabs a {
			float: right;
		}

		#tabs a span {
			float: left;
			display: block;
			background: url("images/bg_tabs2.gif") no-repeat 100% -34px;
			padding: 7px 10px 4px 4px;
			color: #767676;
			white-space: nowrap;
			font-family: Arial, Helvetica, sans-serif;
			text-transform: uppercase;
			font-weight: bold;
		}

		.rtl #tabs a span {
			float: right;
		}

		/* Commented Backslash Hack hides rule from IE5-Mac \*/
		#tabs a span, .rtl #tabs a span { float:none;}
		/* End hack */

		#tabs a:hover span {
			color: #BC2A4D;
		}

		#tabs #activetab a {
			background-position: 0 0;
			border-bottom: 1px solid #DCDEE2;
		}

		#tabs #activetab a span {
			background-position: 100% 0;
			padding-bottom: 5px;
			color: #23649F;
		}

		#tabs a:hover {
			background-position: 0 -69px;
		}

		#tabs a:hover span {
			background-position: 100% -69px;
		}

		#tabs #activetab a:hover span {
			color: #115098;
		}
		
		/* Forms
		----------------------------------------*/
		fieldset dt, fieldset.fields1 dt, fieldset.fields2 dt {
			width: auto;
			float: none;
		}

		fieldset dd, fieldset.fields1 dd, fieldset.fields2 dd {
			margin-left: 0px;
		}

		textarea, dd textarea, .message-box textarea {
			width: 100%;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		dl.pmlist dt {
			width: auto !important;
			margin-bottom: 5px;
		}

		dl.pmlist dd {
			display: inline-block;
			margin-left: 0 !important;
		}

		dl.pmlist dd:first-of-type {
			padding-left: 20px;
		}

		.smiley-box, .message-box {
			float: none;
			width: auto;
		}

		.smiley-box {
			margin-top: 5px;
		}

		.bbcode-status {
			display: none;
		}

		.colour-palette, .colour-palette tbody, .colour-palette tr {
			display: block;
		}

		.colour-palette td {
			display: inline-block;
			margin-right: 2px;
		}

		.horizontal-palette td:nth-child(2n), .vertical-palette tr:nth-child(2n) {
			display: none;
		}

		fieldset.quick-login label {
			display: block;
			margin-bottom: 5px;
			white-space: normal;
		}

		fieldset.quick-login label > span {
			display: inline-block;
			min-width: 100px;
		}

		fieldset.quick-login input.inputbox {
			width: 85%;
			max-width: 300px;
			margin-left: 20px;
		}

		fieldset.quick-login label[for="autologin"] {
			display: inline-block;
			text-align: right;
			min-width: 50%;
		}

		/* User profile
		----------------------------------------*/
		.column1, .column2, .left-box.profile-details {
			float: none;
			width: auto;
		}

		/* Polls
		----------------------------------------*/
		fieldset.polls dt {
			width: 90%;
		}

		fieldset.polls dd.resultbar {
			padding-left: 20px;
		}

		fieldset.polls dd.poll_option_percent {
			width: 20%;
		}

		fieldset.polls dd.resultbar, fieldset.polls dd.poll_option_percent {
			margin-top: 5px;
		}

		/* Post
		----------------------------------------*/
		.postbody {
			position: inherit;
		}

		.postprofile, .postbody, .search .postbody {
			display: block;
			width: auto;
			float: none;
			padding: 0;
			min-height: 0;
		}

		.post .postprofile {
			width: auto;
			border-width: 0 0 1px 0;
			padding-bottom: 5px;
			margin: 0;
			margin-bottom: 5px;
			min-height: 40px;
			overflow: hidden;
		}

		.postprofile dd {
			display: none;
		}

		.postprofile dt, .postprofile dd.profile-rank, .search .postprofile dd {
			display: block;
			margin: 0;
		}

		.postprofile .has-avatar .avatar-container {
			margin: 0;
			overflow: inherit;
		}

		.postprofile .avatar-container:after {
			clear: none;
		}

		.postprofile .avatar {
			margin-right: 5px;
		}

		.postprofile .avatar img {
			width: auto !important;
			height: auto !important;
			max-height: 32px;
		}

		.has-profile .postbody h3 {
			margin-left: 0 !important;
			margin-right: 0 !important;
		}

		.has-profile .post-buttons {
			right: 30px;
			top: 15px;
		}

		.online {
			background-size: 40px;
		}

		/* Misc stuff
		----------------------------------------*/
		h2 {
			margin-top: .5em;
		}

		p {
			margin-bottom: .5em;
			overflow: hidden;
		}

		p.rightside {
			margin-bottom: 0;
		}

		fieldset.display-options label {
			display: block;
			clear: both;
			margin-bottom: 5px;
		}

		dl.mini dd.pm-legend {
			float: left;
			min-width: 200px;
		}

		.topicreview {
			margin: 0 -5px;
			padding: 0 5px;
		}

		fieldset.display-actions {
			white-space: normal;
		}

		.phpbb_alert {
			width: auto;
			margin: 0 5px;
		}

		.attach-comment dfn {
			width: 100%;
		}
	}

	@media (min-width: 700px) {
		.postbody { width: 70%; }
	}

	@media (min-width: 850px) {
		.postbody { width: 76%; }
	}

	@media (max-width: 850px) {
		.postprofile { width: 28%; }


	}

	@media (min-width: 701px) and (max-width: 950px) {

		ul.topiclist dt {
			margin-right: -410px;
		}

		ul.topiclist dt .list-inner {
			margin-right: 410px;
		}

		dd.posts, dd.topics, dd.views {
			width: 80px;
		}
	}



	/* Show scrollbars for items with overflow on iOS devices
	----------------------------------------*/
	.postbody .content::-webkit-scrollbar, .topicreview::-webkit-scrollbar, .post_details::-webkit-scrollbar, .codebox code::-webkit-scrollbar, .attachbox dd::-webkit-scrollbar, .attach-image::-webkit-scrollbar, .dropdown-extended ul::-webkit-scrollbar {
		width: 8px;
		height: 8px;
		-webkit-appearance: none;
		background: rgba(0, 0, 0, .1);
		border-radius: 3px;
	}

	.postbody .content::-webkit-scrollbar-thumb, .topicreview::-webkit-scrollbar-thumb, .post_details::-webkit-scrollbar-thumb, .codebox code::-webkit-scrollbar-thumb, .attachbox dd::-webkit-scrollbar-thumb, .attach-image::-webkit-scrollbar-thumb, .dropdown-extended ul::-webkit-scrollbar-thumb {
		background: rgba(0, 0, 0, .3);
		border-radius: 3px;
	}

	#memberlist tr.inactive, #team tr.inactive {
		font-style: italic;
	}

	/* Tables */
	.light_row
	{
		background-color: #F2F6FC;
		font-size: 13px;
	}
	.dark_row
	{
		background-color: #DADEEE;
		font-size: 13px;
	}

	/* Links */
	.plain_link
	{
		color: #000000;
		text-decoration: none;
	}
	.light_row:hover, .dark_row:hover
	{
		background-color: #FFFFA8;
	}

	/* Buttons */
	.button
	{
		color: #707070;
		background-color: #F2F6FC;
		font-family: sans-serif;
		font-size: 11px;
		text-align: left;
		vertical-align: middle;
		font-weight: bold;
		cursor: pointer;
		border: none;
		padding: 3px 10px 3px 10px;
	}

	/* Misc. */
	.paragraph
	{
		background: #F2F6FC;
		font-size: 13px;
		color: #000020;
	}
	<!-- // -->
	</style>
</head>
<body bgcolor=#ffffff text=#000000 link=#0000cc vlink=#551a8b alink=#ff0000>
<table cellspacing=2 cellpadding=0 border=0 width=99%>
<tr>
<td width=100% align=right>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
<td bgcolor=#3366cc colspan=2>
<img width=1 height=1 alt="" />
</td>
</tr>
<tr bgcolor=#E5ECF9>
<td><b>&nbsp;Transliterate</b></td>
<td align=right><font size=-1>&nbsp;|&nbsp;<a href="index.php?copy=about">All About Hebrew Transliteration</a></font>
</td>
</tr>
</table>
</td>
</tr>
</table>


<table cellspacing=0 cellpadding=2 border=0 width=99%>
<tr bgcolor=#E6ECF9>
<td>
<table width=100% border=0 cellspacing=0 cellpadding=1>
<tr>
<td>
<form action="http://www.google.com/search">
<font size=-1>&nbsp;This text has been automatically transliterated from Hebrew:</font><br>&nbsp;&nbsp;
<textarea name=q rows=5 cols=45 wrap=PHYSICAL>
<?php 
$targetlang = isset($_POST['targetlang']) ? $_POST['targetlang'] : 'Romanian';
$sourcetext = isset($_POST['sourcetext']) ? $_POST['sourcetext'] : 'בְּרֵאשִׁ֖ית בָּרָ֣א אֱלֹהִ֑ים אֵ֥ת הַשָּׁמַ֖יִם וְאֵ֥ת הָאָֽרֶץ׃';
generateTransliteration($sourcetext, $targetlang, false, false); 
?>
</textarea>&nbsp;&nbsp;
<input type=hidden name=hl value="en" />
<input type=hidden name=ie value="UTF8" />
<input type=hidden name=oe value="UTF8" />
<input type=submit value="Google Search" />
</form>
</td>
</tr>

<tr>
<td>
<table width=100% cellpadding=3 cellspacing=0 border=0>
<tr bgcolor=#ffffff>
<td>
<form action=index.php method=post>
<font size=-1>&nbsp;&nbsp;Transliterate text</font>
<br>&nbsp;&nbsp;
<textarea name="sourcetext" rows="5" cols="45" wrap=PHYSICAL>
<?php print $origHebrew; ?>
</textarea><br>&nbsp;&nbsp;
<font size=-1>from Hebrew to</font>
<select name="targetlang" selected="<?php $targetlang ?>">
	<option value="academic" <?php if($targetlang == 'academic') { print("selected"); } ?> >Academic</option>
	<option value="academic_u" <?php if($targetlang == 'academic_u'){ print("selected"); } ?> >Academic Unicode</option>
	<option value="academic_ff" <?php if($targetlang == 'academic_ff'){ print("selected"); } ?> >Academic Font Friendly</option>
	<option value="academic_s" <?php if($targetlang == 'academic_s'){ print("selected"); } ?> >Academic Spirantization</option>
	<option value="ashkenazic" <?php if($targetlang == 'ashkenazic'){ print("selected"); } ?> >Ashkenazic</option>
	<option value="sefardic" <?php if($targetlang == 'sefardic'){ print("selected"); } ?> >Sefardic</option>
	<option value="romaniote" <?php if($targetlang == 'romaniote'){ print("selected"); } ?> >Romaniote</option>
	<option value="romanian" <?php if($targetlang == 'romanian'){ print("selected"); } ?> >Romanian</option>
	<option value="ukrainian" <?php if($targetlang == 'ukrainian'){ print("selected"); } ?> >Ukrainian</option>
	<option value="mc" <?php if($targetlang == 'mc'){ print("selected");} ?> >Michigan - Claremont</option>
</select>
<input type=hidden name=hl value="en" />
<input type=hidden name=ie value="UTF8" />
<input type=submit value="Transliterate" />
</form>
</td>
</tr>

</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<font size=-1>&nbsp;This mechanism is offered as-is to support customers for the purpose of transliterating Hebrew Alphabet.
Here is the first verse of Deuteronomy chapt. 2, available <a href="http://mechon-mamre.org/p/pt/pt0201.htm">here at mechon-mamre</a>:</font>&nbsp;
<br>
&#1488;&#1461;&#1500;&#1468;&#1462;&#1492; 
&#1492;&#1463;&#1491;&#1468;&#1456;&#1489;&#1464;&#1512;&#1460;&#1497;&#1501;, 
&#1488;&#1458;&#1513;&#1473;&#1462;&#1512; 
&#1491;&#1468;&#1460;&#1489;&#1468;&#1462;&#1512; 
&#1502;&#1465;&#1513;&#1473;&#1462;&#1492;,
&#1488;&#1462;&#1500;-&#1499;&#1468;&#1464;&#1500;-&#1497;&#1460;&#1513;&#1474;&#1456;&#1512;&#1464;&#1488;&#1461;&#1500;, 
&#1489;&#1468;&#1456;&#1506;&#1461;&#1489;&#1462;&#1512;
&#1492;&#1463;&#1497;&#1468;&#1463;&#1512;&#1456;&#1491;&#1468;&#1461;&#1503;,
&#1489;&#1468;&#1463;&#1502;&#1468;&#1460;&#1491;&#1456;&#1489;&#1468;&#1464;&#1512;, 
&#1489;&#1468;&#1464;&#1506;&#1458;&#1512;&#1464;&#1489;&#1464;&#1492; 
&#1502;&#1493;&#1465;&#1500; &#1505;&#1493;&#1468;&#1507;, 
&#1489;&#1468;&#1461;&#1497;&#1503;-&#1508;&#1468;&#1464;&#1488;&#1512;&#1464;&#1503;, 
&#1493;&#1468;&#1489;&#1461;&#1497;&#1503;-&#1514;&#1468;&#1465;&#1508;&#1462;&#1500;, 
&#1493;&#1456;&#1500;&#1464;&#1489;&#1464;&#1503;, 
&#1493;&#1463;&#1495;&#1458;&#1510;&#1461;&#1512;&#1465;&#1514;--&#1493;&#1456;&#1491;&#1460;&#1497; 
&#1494;&#1464;&#1492;&#1464;&#1489;
:
<br>
<p></p>
<center><font size=-1>&copy;2006 Joshua Waxman & &copy;2023 Florin C. Bodin</font>
<!-- 
&#1488; &#1493;&#1456;&#1488;&#1461;&#1431;&#1500;&#1468;&#1462;&#1492; &#1513;&#1473;&#1456;&#1502;&#1493;&#1465;&#1514;&#1433; &#1489;&#1468;&#1456;&#1504;&#1461;&#1443;&#1497; &#1497;&#1460;&#1513;&#1474;&#1456;&#1512;&#1464;&#1488;&#1461;&#1428;&#1500; &#1492;&#1463;&#1489;&#1468;&#1464;&#1488;&#1460;&#1430;&#1497;&#1501; &#1502;&#1460;&#1510;&#1456;&#1512;&#1464;&#1425;&#1497;&#1456;&#1502;&#1464;&#1492; &#1488;&#1461;&#1443;&#1514; &#1497;&#1463;&#1469;&#1506;&#1458;&#1511;&#1465;&#1428;&#1489; &#1488;&#1460;&#1445;&#1497;&#1513;&#1473; &#1493;&#1468;&#1489;&#1461;&#1497;&#1514;&#1430;&#1493;&#1465; &#1489;&#1468;&#1464;&#1469;&#1488;&#1493;&#1468;&#1475; &#1489; &#1512;&#1456;&#1488;&#1493;&#1468;&#1489;&#1461;&#1443;&#1503; &#1513;&#1473;&#1460;&#1502;&#1456;&#1506;&#1428;&#1493;&#1465;&#1503; &#1500;&#1461;&#1493;&#1460;&#1430;&#1497; &#1493;&#1460;&#1469;&#1497;&#1492;&#1493;&#1468;&#1491;&#1464;&#1469;&#1492;&#1475; &#1490; &#1497;&#1460;&#1513;&#1468;&#1474;&#1464;&#1513;&#1499;&#1464;&#1445;&#1512; &#1494;&#1456;&#1489;&#1493;&#1468;&#1500;&#1467;&#1430;&#1503; &#1493;&#1468;&#1489;&#1460;&#1504;&#1456;&#1497;&#1464;&#1502;&#1460;&#1469;&#1503;&#1475; &#1491; &#1491;&#1468;&#1464;&#1445;&#1503; &#1493;&#1456;&#1504;&#1463;&#1508;&#1456;&#1514;&#1468;&#1464;&#1500;&#1460;&#1430;&#1497; &#1490;&#1468;&#1464;&#1445;&#1491; &#1493;&#1456;&#1488;&#1464;&#1513;&#1473;&#1461;&#1469;&#1512;&#1475; &#1492; &#1493;&#1463;&#1469;&#1497;&#1456;&#1492;&#1460;&#1431;&#1497; &#1499;&#1468;&#1464;&#1500;&#1470;&#1504;&#1462;&#1435;&#1508;&#1462;&#1513;&#1473; &#1497;&#1465;&#1469;&#1510;&#1456;&#1488;&#1461;&#1445;&#1497; &#1497;&#1462;&#1469;&#1512;&#1462;&#1498;&#1456;&#1470;&#1497;&#1463;&#1506;&#1458;&#1511;&#1465;&#1430;&#1489; &#1513;&#1473;&#1460;&#1489;&#1456;&#1506;&#1460;&#1443;&#1497;&#1501; &#1504;&#1464;&#1425;&#1508;&#1462;&#1513;&#1473; &#1493;&#1456;&#1497;&#1493;&#1465;&#1505;&#1461;&#1430;&#1507; &#1492;&#1464;&#1497;&#1464;&#1445;&#1492; &#1489;&#1456;&#1502;&#1460;&#1510;&#1456;&#1512;&#1464;&#1469;&#1497;&#1460;&#1501;&#1475; &#1493; &#1493;&#1463;&#1497;&#1468;&#1464;&#1444;&#1502;&#1464;&#1514; &#1497;&#1493;&#1465;&#1505;&#1461;&#1507;&#1433; &#1493;&#1456;&#1499;&#1464;&#1500;&#1470;&#1488;&#1462;&#1495;&#1464;&#1428;&#1497;&#1493; &#1493;&#1456;&#1499;&#1465;&#1430;&#1500; &#1492;&#1463;&#1491;&#1468;&#1445;&#1493;&#1465;&#1512; &#1492;&#1463;&#1492;&#1469;&#1493;&#1468;&#1488;&#1475; &#1494; &#1493;&#1468;&#1489;&#1456;&#1504;&#1461;&#1443;&#1497; &#1497;&#1460;&#1513;&#1474;&#1456;&#1512;&#1464;&#1488;&#1461;&#1431;&#1500; &#1508;&#1468;&#1464;&#1512;&#1447;&#1493;&#1468; &#1493;&#1463;&#1469;&#1497;&#1468;&#1460;&#1513;&#1473;&#1456;&#1512;&#1456;&#1510;&#1435;&#1493;&#1468; &#1493;&#1463;&#1497;&#1468;&#1460;&#1512;&#1456;&#1489;&#1468;&#1445;&#1493;&#1468; &#1493;&#1463;&#1497;&#1468;&#1463;&#1469;&#1506;&#1463;&#1510;&#1456;&#1502;&#1430;&#1493;&#1468; &#1489;&#1468;&#1460;&#1502;&#1456;&#1488;&#1465;&#1443;&#1491; &#1502;&#1456;&#1488;&#1465;&#1425;&#1491; &#1493;&#1463;&#1514;&#1468;&#1460;&#1502;&#1468;&#1464;&#1500;&#1461;&#1445;&#1488; &#1492;&#1464;&#1488;&#1464;&#1430;&#1512;&#1462;&#1509; &#1488;&#1465;&#1514;&#1464;&#1469;&#1501;&#1475;
<p>
&#1431; = revii
<br>
&#1444; = mahpach / yetiv - yetiv if after the first consonant
<br>
&#1433; = pashta / kadma. pashta repeats if stressed early. otherwise pashta on last letter
<br>
&#1443; = munach
<br>
&#1428; = zakef katon
<br>
&#1429; = zakef gadol
<br>
&#1445; = mercha
<br>
&#1430; = tipcha
<br>
&#1425; = etnachta
<br>
&#1469; = silluq / early stress - can disambiguate via position in sentence
<br>
&#1475; = sof pasuk
<br>
&#1435; = tevir
<br>
&#1447; = darga	
<br>
&#1436; = geresh
<br>
&#1438; = gershayim
<br>
&#1454; = zarka
<br>
&#1426; = segolta
<br>
&#1440; = telisha ketana
<br>
&#1449; = telisha gedola
-->
</center>
</body>
</html>
