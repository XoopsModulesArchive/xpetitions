<?php
/* ******************************************* */
/*                INFORMATUX                   */
/*         http://www.informatux.com/          */
/*       SOLUTIONS AND WEB DEVELOPMENT         */
/*             Patrice BOUTHIER                */
/*                   2008                      */
/* ------------------------------------------- */
/*    XOOPS - PHP Content Management System    */
/*         Copyright (c) 2000 XOOPS.org        */
/*            <http://www.xoops.org/>          */
/* ******************************************* */

// includes
include_once("header.inc.php");
include_once(XOOPS_ROOT_PATH."/header.php");
include_once XOOPS_ROOT_PATH."/class/xoopsmailer.php";
include_once XOOPS_ROOT_PATH.'/class/pagenav.php';

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'index';

switch ($op) {

	default: // Affichage du formulaire captcha.inc.php
	xoops_cp_header();
	xpetitions_adminmenu(6, _AM_XPETITIONS_CAPTCHA);

	// Aide
	helpMenu(_AM_XPETITIONS_CAPTCHA_HELP1, _AM_XPETITIONS_CAPTCHA_HELP2);
	echo '<br />';

	?>
	<script type="text/javascript" src="<?php echo XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname'); ?>/include/functions.js"></script>
	<?php

	if ($xoopsModuleConfig['captcha_image'] == 1)
		$captcha_status = '<span style="color: green;">' . strtoupper(_YES) . '</span>';
	else
		$captcha_status = '<span style="color: red;">' . strtoupper(_NO) . '</span>';

	echo '<div style="font-weight: bold;">' . sprintf(_AM_XPETITIONS_STATUS_CAPTCHA, "<a class=\"nobutton\" href=\"../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar('mid')."\">" . _AM_XPETITIONS_GENERALSET . "</a>") . $captcha_status . '</div>';

	include "../include/captcha.inc.php"; // affichage du formulaire
	break;

	case "update": // Mise à jour des champs
	$captcha_choice = (!isset($_POST['captcha_choice'])) ? 1 : $_POST['captcha_choice'];

	$update_captcha = updateOption('captcha', $captcha_choice);

	if (!$update_captcha) {
		redirect_header("captcha.php", 2, _AM_XPETITIONS_ERROR_UPDATE);
	} else {
		redirect_header("captcha.php", 2, _AM_XPETITIONS_VALID_UPDATE);
	}

	break;

}

xpetitions_adminfooter();
xoops_cp_footer();

?>