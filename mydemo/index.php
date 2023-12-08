<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
static $theme = "basic_tmp";
$smarty->assign("theme", $theme);


$smarty->assign("pageName", "category");
$smarty->display($theme.'/index.tpl');
