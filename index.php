<?php
// put full path to Smarty.class.php
require('libs/smarty/SmartyBC.class.php');
$smarty = new SmartyBC();

$smarty->setTemplateDir('configs/smarty/templates');
$smarty->setCompileDir('configs/smarty/templates_c');
$smarty->setCacheDir('configs/smarty/cache');
$smarty->setConfigDir('configs/smarty');

//$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
//$smarty->testInstall();
?>