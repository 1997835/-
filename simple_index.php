<?php
// 简单入口文件，用于测试PHP和URL重写
header('Content-Type: text/html; charset=utf-8');

echo '<h1>简单入口文件测试</h1>';
echo '<p>PHP版本: ' . phpversion() . '</p>';
echo '<p>当前文件: ' . __FILE__ . '</p>';
echo '<p>请求URI: ' . $_SERVER['REQUEST_URI'] . '</p>';
echo '<p>PHP_SELF: ' . $_SERVER['PHP_SELF'] . '</p>';
echo '<p>SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . '</p>';
echo '<p>QUERY_STRING: ' . $_SERVER['QUERY_STRING'] . '</p>';

echo '<h2>GET参数</h2>';
var_dump($_GET);

echo '<h2>POST参数</h2>';
var_dump($_POST);
?>