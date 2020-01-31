<html>
 <head>
  <title>PHP-Test Config</title>
 </head>
 <body>


 <?php echo '<p>Hallo Welt</p>'; ?>
 </body>
</html>


<?php
require_once "loxberry_web.php";
require_once "loxberry_system.php";
  
// This will read your language files to the array $L
$L = LBSystem::readlanguage("language.ini");

// Getting data from current plugin 
$plugin = LBSystem::plugindata();

$template_title = $plugin['PLUGINDB_TITLE'];
$helplink = "http://www.loxwiki.eu:80/x/2wzL";
$helptemplate = "help.html";
  
LBWeb::lbheader($template_title, $helplink, $helptemplate);
 
// This is the main area for your plugin
?>

<p>This plugin should offer an alternative to the DoorBird IP I/O Door Controller A1081 device.</p>
<p><?=$L['SOMEAREA.WELCOMEMESSAGE']?></p>
<p><?=$L['SOMEAREA.HOWTOMESSAGE']?></p>
 
<?php 
// Finally print the footer 
LBWeb::lbfooter();
?>
