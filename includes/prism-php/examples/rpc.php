<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
require 'include.php';
$params = array('username' => 'b', 'password' => 'c');
$a = $c->post('/user/login', $params);
var_dump($a);

?>
