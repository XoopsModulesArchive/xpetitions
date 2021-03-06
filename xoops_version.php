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

$modversion['name']        = _MI_XPETITIONS_NAME;
$modversion['version']     = "1.10";
$modversion['releasedate'] = "2009-05-24";
$modversion['status']      = "Beta 2";
$modversion['description'] = _MI_XPETITIONS_DESC;
$modversion['credits']     = "Module de petitions en ligne (INFORMATUX).";
$modversion['author']      = "INFORMATUX - Consultant informatique [www.informatux.com]";
$modversion['help']        = "";
$modversion['license']     = "GPLv2 see LICENSE";
$modversion['official']    = 0;
$modversion['image']       = "images/xpetitions_logo.png";
$modversion['dirname']     = "xpetitions";

$modversion['author_realname']     = "Patrice BOUTHIER";
$modversion['author_website_url']  = "http://www.informatux.com";
$modversion['author_website_name'] = "Consultant informatique";
$modversion['author_email']        = "contact@informatux.com";
$modversion['demo_site_url']       = "";
$modversion['demo_site_name']      = "";
$modversion['support_site_url']    = "http://www.informatux.com/xpetitions";
$modversion['support_site_name']   = "Consultant informatique - Forums";
$modversion['submit_bug']          = "http://www.informatux.com/xpetitions";
$modversion['submit_feature']      = "http://www.informatux.com/xpetitions";

// Developers
$modversion['contributors']['developers'][0]['name']      = "Patrice Bouthier";
$modversion['contributors']['developers'][0]['uname']     = "webmaster";
$modversion['contributors']['developers'][0]['email']     = "contact@informatux.com";
$modversion['contributors']['developers'][0]['website']   = "http://www.informatux.com";

// Translators
$modversion['contributors']['translators'][0]['language'] = "English";
$modversion['contributors']['translators'][0]['name']     = "Thomas Hubert";
$modversion['contributors']['translators'][0]['uname']    = "thubert";
$modversion['contributors']['translators'][0]['email']    = "";
$modversion['contributors']['translators'][0]['website']  = "";

$modversion['contributors']['translators'][1]['language'] = "Italian";
$modversion['contributors']['translators'][1]['name']     = "Francesco Mulassano";
$modversion['contributors']['translators'][1]['uname']    = "";
$modversion['contributors']['translators'][1]['email']    = "info@takeaweb.it";
$modversion['contributors']['translators'][1]['website']  = "http://www.takeaweb.it";

// Testers
$modversion['contributors']['testers'][0]['name']         = "Patrice Bouthier";
$modversion['contributors']['testers'][0]['uname']        = "webmaster";
$modversion['contributors']['testers'][0]['email']        = "contact@informatux.com";
$modversion['contributors']['testers'][0]['website']      = "http://www.informatux.com";

$modversion['contributors']['testers'][1]['language']     = "Italian";
$modversion['contributors']['testers'][1]['name']         = "Francesco Mulassano";
$modversion['contributors']['testers'][1]['uname']        = "";
$modversion['contributors']['testers'][1]['email']        = "info@takeaweb.it";
$modversion['contributors']['testers'][1]['website']      = "http://www.takeaweb.it";

// Documenters
$modversion['contributors']['documenters'][0]['name']     = "Patrice Bouthier";
$modversion['contributors']['documenters'][0]['uname']    = "webmaster";
$modversion['contributors']['documenters'][0]['email']    = "contact@informatux.com";
$modversion['contributors']['documenters'][0]['website']  = "http://www.informatux.com";

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file
$modversion['tables'][0] = "xpetitions_emails";
$modversion['tables'][1] = "xpetitions_petitions";
$modversion['tables'][2] = "xpetitions_fields";

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu']  = "admin/menu.php";

// Search
$modversion['hasSearch']      = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "xpetitions_search";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'xpetitions_index.html';
$modversion['templates'][1]['description'] = _MI_XPETITIONS_INDEX;

$modversion['templates'][2]['file'] = 'xpetitions_header.html';
$modversion['templates'][2]['description'] = _MI_XPETITIONS_HEADER;

$modversion['templates'][3]['file'] = 'xpetitions_footer.html';
$modversion['templates'][3]['description'] = _MI_XPETITIONS_FOOTER;

$modversion['templates'][4]['file'] = 'xpetitions_display_index.html';
$modversion['templates'][4]['description'] = _MI_XPETITIONS_DISPLAY_INDEX;

$modversion['templates'][5]['file'] = 'xpetitions_display_form.html';
$modversion['templates'][5]['description'] = _MI_XPETITIONS_DISPLAY_FORM;

$modversion['templates'][6]['file'] = 'xpetitions_display_toolbar.html';
$modversion['templates'][6]['description'] = _MI_XPETITIONS_DISPLAY_TOOLBAR;

$modversion['templates'][7]['file'] = 'xpetitions_display_sign.html';
$modversion['templates'][7]['description'] = _MI_XPETITIONS_DISPLAY_SIGNS;

$modversion['templates'][8]['file'] = 'xpetitions_display_friend.html';
$modversion['templates'][8]['description'] = _MI_XPETITIONS_DISPLAY_FRIEND;

$modversion['templates'][9]['file'] = 'xpetitions_display_allsigns.html';
$modversion['templates'][9]['description'] = _MI_XPETITIONS_DISPLAY_ALLSIGNS;

$modversion['templates'][10]['file'] = 'xpetitions_display_friend_send.html';
$modversion['templates'][10]['description'] = _MI_XPETITIONS_DISPLAY_FRIEND_SEND;

$modversion['templates'][11]['file'] = 'xpetitions_display_valid.html';
$modversion['templates'][11]['description'] = _MI_XPETITIONS_DISPLAY_VALID;

$modversion['templates'][12]['file'] = 'xpetitions_display_presign.html';
$modversion['templates'][12]['description'] = _MI_XPETITIONS_DISPLAY_PRESIGN;

$modversion['templates'][13]['file'] = 'xpetitions_display_validpre.html';
$modversion['templates'][13]['description'] = _MI_XPETITIONS_DISPLAY_VALID_PRESIGN;

// Blocks
// Block that displays the last signatures
$j = 0;

$j++;
$modversion['blocks'][$j]['file'] = "xpetitions_block_last_signs.php";
$modversion['blocks'][$j]['name'] = _MI_XPETITIONS_BNAME1;
$modversion['blocks'][$j]['description'] = 'Afficher les derni&egrave;res signatures';
$modversion['blocks'][$j]['show_func'] = "b_xpetitions_last_signs_show";
$modversion['blocks'][$j]['edit_func'] = "b_xpetitions_last_signs_edit";
$modversion['blocks'][$j]['options'] = '20|5';
$modversion['blocks'][$j]['template'] = 'xpetitions_block_last_signs.html';

// Block that displays the all petitions
$j++;
$modversion['blocks'][$j]['file'] = "xpetitions_block_all_petitions.php";
$modversion['blocks'][$j]['name'] = _MI_XPETITIONS_BNAME2;
$modversion['blocks'][$j]['description'] = 'Afficher toutes les p&eacute;titions en ligne';
$modversion['blocks'][$j]['show_func'] = "b_xpetitions_all_petitions_show";
$modversion['blocks'][$j]['edit_func'] = "b_xpetitions_all_petitions_edit";
$modversion['blocks'][$j]['options'] = '50';
$modversion['blocks'][$j]['template'] = 'xpetitions_block_all_petitions.html';

// Block that displays the all archives petitions
$j++;
$modversion['blocks'][$j]['file'] = "xpetitions_block_all_archives.php";
$modversion['blocks'][$j]['name'] = _MI_XPETITIONS_BNAME3;
$modversion['blocks'][$j]['description'] = 'Afficher toutes les p&eacute;titions archiv&eacute;es';
$modversion['blocks'][$j]['show_func'] = "b_xpetitions_all_archives_show";
$modversion['blocks'][$j]['edit_func'] = "b_xpetitions_all_archives_edit";
$modversion['blocks'][$j]['options'] = '50';
$modversion['blocks'][$j]['template'] = 'xpetitions_block_all_archives.html';

// Config
$i = 0;

$i++;
$modversion['config'][$i]['name'] = 'navigation'; // barre de navigation visiteur
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_NAVIGATION';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_NAVIGATION_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'upload_size'; // taille d'upload maximum autoris�e pour une p�tition papier
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_UPLOAD_SIZE';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_UPLOAD_SIZE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = '2000000';

$i++;
$modversion['config'][$i]['name'] = 'adminindex_page'; // nombre de p�titions visibles par page [admin]
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_ADMIN_PAGE';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_ADMIN_PAGE_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '10';
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$i++;
$modversion['config'][$i]['name'] = 'index_per_page'; // nombre de p�titions visibles par page [visiteurs]
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_INDEX_PAGE';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_INDEX_PAGE_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '10';
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$i++;
$modversion['config'][$i]['name'] = 'adminsign_per_page'; // nombre de signatures par page [admin]
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_ADMIN_SIGN_PAGE';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_ADMIN_SIGN_PAGE_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '25';
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '55' => 55, '60' => 60, '65' => 65, '70' => 70, '75' => 75, '80' => 80, '85' => 85, '90' => 90, '95' => 95, '100' => 100);

$i++;
$modversion['config'][$i]['name'] = 'get_counter_signs'; // afficher le nombre de signature par p�titions [accueil visiteurs]
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_INDEX_SIGNS';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_INDEX_SIGNS_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '1';

$i++;
$modversion['config'][$i]['name'] = 'petitions_archives'; // afficher les p�titions archiv�es sur la page d'accueil
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_INDEX_ARCHI';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_INDEX_ARCHI_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'validation_form'; // M�thode de validation des signatures
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_VALID_METHOD';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_VALID_METHODSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array('Email'  => '1', 'Auto' => '0');
$modversion['config'][$i]['default'] ='1';

$i++;
$modversion['config'][$i]['name'] = 'captcha_image'; // Image captcha
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_CAPTCHA_IMG';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_CAPTCHA_IMG_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '1';

$i++;
$modversion['config'][$i]['name'] = 'signature_title'; // intitul� de lien pour signer une p�tition
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_SIGN_TITLE';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_SIGN_TITLE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = 'Je signe';

$i++;
$modversion['config'][$i]['name'] = 'use_wysiwyg'; // Changement de l'�diteur wysiwyg de description de la p�tition
$modversion['config'][$i]['title'] = '_MI_SSECTION_WYSIWYG';
$modversion['config'][$i]['description'] = '_MI_SSECTION_WYSIWYGDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array('XoopsEditor'  => 'default', 'Koivi Editor' => 'koivi', 'TinyEditor' => 'tiny', 'FCKEditor' => 'FCKeditor', 'InBetween' => 'inbetween', 'HTMLArea' => 'htmlarea', 'Spaw Editor v1' => 'spaw', 'Spaw Editor v2' => 'spaw2');
$modversion['config'][$i]['default'] ='default';

$i++;
$modversion['config'][$i]['name'] = 'signature_download'; // intitul� du lien pour t�l�charger la p�tition papier 
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_SIGN_DOWNL';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_SIGN_DOWNL_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = 'T&eacute;l&eacute;charger une version imprimable de la p&eacute;tition';

$i++;
$modversion['config'][$i]['name'] = 'signature_friend'; // intitul� du lien pour pr�venir un ami
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_SIGN_FRIEND';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_SIGN_FRIEND_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = 'Pr&eacute;venir un ami';

$i++;
$modversion['config'][$i]['name'] = 'signature_show'; // intitul� du lien pour voir les signatures
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_SIGN_SHOW';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_SIGN_SHOW_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = 'Voir les signatures';

$i++;
$modversion['config'][$i]['name'] = 'send_a_friend'; // afficher envoyer � un ami
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_SEND_FRIEN';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_SEND_FRIEN_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'path_upload'; // Chemin physique des p�titions attach�s
$modversion['config'][$i]['title'] = '_MI_XPETITIONS_PATH_UPLOAD';
$modversion['config'][$i]['description'] = '_MI_XPETITIONS_PATH_UPLOAD_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'string';
$modversion['config'][$i]['default'] = '/uploads/xpetitions';

?>