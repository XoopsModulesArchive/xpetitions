<?php
/**
* $Id: header.inc.php,v 0.1 2007/10/16 10:00:00 Patrice BOUTHIER $
* Module: Xpetitions
* Author: INFORMATUX <www.informatux.com>
* Licence: GPLv2
*/

// includes
include ('../../../include/cp_header.php');
if ( file_exists("../language/".$xoopsConfig['language']."/main.php") ) {
	include ("../language/".$xoopsConfig['language']."/main.php");
} else {
	include ("../language/english/main.php");
}

// module fonctions
include_once("../include/functions.php");
include_once("../include/config.php");
include_once("../include/mysql.php");

$myts =& MyTextSanitizer::getInstance();

?>