<?php
// $Id: index.php,v 0.1 2007/10/16 10:00:00 Patrice BOUTHIER
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

// includes
include_once("header.inc.php");
include_once XOOPS_ROOT_PATH.'/class/pagenav.php';

xoops_cp_header();

?>
<script type="text/javascript" src="<?php echo XOOPS_URL.'/modules/'.$xoopsModule->getVar('dirname'); ?>/include/functions.js"></script>
<?php

echo '<div id="central">';
xpetitions_adminmenu(0, _AM_XPETITIONS_INDEX);

global $xoopsConfig, $xoopsModuleConfig, $xoopsModule, $xoopsDB;

// Aide
helpMenu(_AM_XPETITIONS_INDEX_HELP1, _AM_XPETITIONS_INDEX_HELP2);
echo '<br />';

// ---------------------------------------------------
// Verification avant de commencer
// ---------------------------------------------------
$xpetitions_verification_error = array();
// ---------------------------------------------------
// Verification de la creation du repertoire d'upload
// ---------------------------------------------------
$xpetitions_upload_dir = XOOPS_ROOT_PATH . $xoopsModuleConfig['path_upload'] . '/';
if (!@is_dir($xpetitions_upload_dir))
	$xpetitions_verification_error[0] = 'KO';
else
	$xpetitions_verification_error[0] = 'OK';
// ---------------------------------------------------
// Verification des droits du repertoire d'upload
// ---------------------------------------------------
$xpetitions_file_verif1 = @is_writable($xpetitions_upload_dir);
if ($xpetitions_file_verif1 != 1) {
	$xpetitions_verification_error[1] = 'KO';
} else {
	$xpetitions_verification_error[1] = 'OK';
	@unlink($xpetitions_file_dest1);
}
// ---------------------------------------------------
// Verification des droits du repertoire csv
// ---------------------------------------------------
$xpetitions_csv_dir     = XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->getVar('dirname') . '/csv/';
$xpetitions_file_verif2 = @is_writable($xpetitions_csv_dir);
if ($xpetitions_file_verif2 != 1)
	$xpetitions_verification_error[2] = 'KO';
else
	$xpetitions_verification_error[2] = 'OK';

// ---------------------------------------------------
// Verification de la version de PHP (upload csv)
// ---------------------------------------------------
$php_version = phpversion();
if (version_compare($php_version, "5.1.0", ">=")) {
	$xpetitions_verification_error[3] = 'OK';
} else {
	$xpetitions_verification_error[3] = 'KO';
}

if (@in_array('KO', $xpetitions_verification_error))
	$xpetitions_verification = 'xpetitions_verfication_ko';
else
	$xpetitions_verification = 'xpetitions_verfication_ok';
echo '<div class="'.$xpetitions_verification.'">';
echo '<div style="width: 30px; height: 55px;; float: left; margin-right: 10px;">';
echo '<img src="../images/'.$xpetitions_verification.'.png" />';
echo '</div>';
$error0 = ($xpetitions_verification_error[0] == 'KO') ? '<span style="color: red;">'.$xpetitions_verification_error[0].'</span>' : '<span style="color: green;">'.$xpetitions_verification_error[0].'</span>';
echo sprintf(_AM_XPETITIONS_CHECK1, $xoopsModuleConfig['path_upload'], $error0);
echo '<br />';
$error1 = ($xpetitions_verification_error[1] == 'KO') ? '<span style="color: red;">'.$xpetitions_verification_error[1].'</span>' : '<span style="color: green;">'.$xpetitions_verification_error[1].'</span>';
echo sprintf(_AM_XPETITIONS_CHECK2, $error1);
echo '<br />';
$error2 = ($xpetitions_verification_error[2] == 'KO') ? '<span style="color: red;">'.$xpetitions_verification_error[2].'</span>' : '<span style="color: green;">'.$xpetitions_verification_error[2].'</span>';
echo sprintf(_AM_XPETITIONS_CHECK3, $error2);
echo '<br />';
$error3 = ($xpetitions_verification_error[3] == 'KO') ? '<span style="color: red;">'.$xpetitions_verification_error[3].' ('.$php_version.')</span>' : '<span style="color: green;">'.$xpetitions_verification_error[3].' ('.$php_version.')</span>';
echo sprintf(_AM_XPETITIONS_CHECK4, $error3);
echo '</div>';
echo '<div style="clear: both;">&nbsp;</div>';

// Voir le sommaire
IndexTable();

// Tableau des pétitions
echo '<br /><table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="1" class="outer">';
echo '<tbody><tr class="bg3">';
echo '<td style="width: 5%; text-align: center;">' . _AM_XPETITIONS_INDEX_TAB1 . '</td>';
echo '<td style="width: 50%; text-align: center;">' . _AM_XPETITIONS_INDEX_TAB2 . '</td>';
echo '<td style="width: 15%; text-align: center;">' . _AM_XPETITIONS_INDEX_TAB3 . '</td>';
echo '<td style="width: 15%; text-align: center;">' . _AM_XPETITIONS_INDEX_TAB4 . '</td>';
echo '<td style="width: 15%; text-align: center;">' . _AM_XPETITIONS_INDEX_TAB5 . '</td>';
echo '</tr>';

$petitions_count      = getPetitionsCount();
$petitions_sql        = 'SELECT * FROM ' . $xoopsDB->prefix('xpetitions_petitions');
$petitions_pagestart  = isset($_GET['page']) ? intval($_GET['page']) : 0;

if ($petitions_count < 1) {
echo '<tr><td colspan="5">';
echo '<span class="gras">' . _AM_XPETITIONS_NONE . '</span>';
echo '</td></tr>';
echo '</tbody></table>';
} else {
  $pagenav = new XoopsPageNav($petitions_count, $xoopsModuleConfig['adminindex_page'], $petitions_pagestart, 'page');
  $limite = limite($petitions_pagestart, $petitions_count, $xoopsModuleConfig['adminindex_page'], $petitions_sql);
  $petitions_aff_tab = dbResultToArray($limite);

  foreach ($petitions_aff_tab as $row) {
    echo '<tr class="bg1"><td style="text-align: center;">';
    echo $row['id'];
    echo '</td><td style="text-align: left;">';
    echo '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/index.php?id='.$row['id'].'">'.$myts->DisplayTarea($row['title']).'</a>';
    echo '</td><td style="text-align: center;">';
    echo formatdatefr($row['date']);
    echo '</td><td style="text-align: center;">';
    echo '<img src="../images/statut'.$row['status'].'.gif" />';
    echo '</td><td style="text-align: center;">';
    echo '<a href="petitions.php?op=modif&id='.$row['id'].'"><img src="../images/edit.png" alt="'._AM_XPETITIONS_UPDATE.'" title="'._AM_XPETITIONS_UPDATE.'" /></a>';
    echo '&nbsp;';
    echo '<a href="petitions.php?op=delete&id='.$row['id'].'&name='.$row['name'].'&ok=0"><img src="../images/delete.png" alt="'._AM_XPETITIONS_CANCEL.'" title="'._AM_XPETITIONS_CANCEL.'" /></a>';
    echo '</td></tr>';
   }
echo '</tbody></table>';
echo "<div align='right'>".$pagenav->renderNav().'</div><br />';
}

echo '</div>'; // fin id central

xpetitions_adminfooter();
xoops_cp_footer();

?>