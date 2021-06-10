<?php
require('/usr/share/php/smarty/libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 5;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
?>