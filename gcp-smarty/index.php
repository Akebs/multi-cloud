<?php
require ('./smartyHeader.php');
#require ('./db.php');
#require ('./navs.php');

function add($a, $b){
  return $a + $b;
 }

$smarty->assign('result',add(1, 2));

  $smarty->display('index_template.tpl');

  mysql_close($db);
#}

?>