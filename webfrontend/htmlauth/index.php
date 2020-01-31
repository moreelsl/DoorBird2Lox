<?php
require_once "loxberry_web.php";
require_once "loxberry_system.php";
require_once "Config/Lite.php";
  
// This will read your language files to the array $L
$lang = LBSystem::readlanguage("language.ini");

// Getting data from current plugin 
$plugin = LBSystem::plugindata();

// Open config file
$cfg = new Config_Lite("$lbpconfigdir/pluginconfig.cfg",LOCK_EX,INI_SCANNER_RAW);

// Header
$template_title = $plugin['PLUGINDB_TITLE'];
$helplink       = "http://www.loxwiki.eu:80/x/2wzL";
$helptemplate   = "help.html";
  
LBWeb::lbheader($template_title, $helplink, $helptemplate);
 
// This is the main area for your plugin
?>


<p><?=$lang['BASIC.WELCOMEMESSAGE']?></p>
<p><?=$lang['BASIC.HEADING_BASICSETTINGS']?></p>


<p><?=$cfg['SECTION1']['NAME'];?></p>


 
<?php 
$mshtml = LBWeb::mslist_select_html( ['FORMID' => 'msno', 'SELECTED' => 1, 'DATA_MINI' => 0 ]);
 
echo $mshtml;



// Finally print the footer 
LBWeb::lbfooter();
?>
