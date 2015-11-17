<?php
// put full path to Smarty.class.php
require('libs/smarty/SmartyBC.class.php');
$smarty = new SmartyBC();

$smarty->setTemplateDir('configs/smarty/templates');
$smarty->setCompileDir('configs/smarty/templates_c');
$smarty->setCacheDir('configs/smarty/cache');

#Language
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "de":
        //echo "PAGE FR";
        $smarty->setConfigDir('configs/smarty/de_DE');
        break;
    case "en":
        //echo "PAGE EN";
        $smarty->setConfigDir('configs/smarty/en_US');
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        $smarty->setConfigDir('configs/smarty/en_US');
        break;
}
$smarty->display('index.tpl');
//$smarty->testInstall();
?>