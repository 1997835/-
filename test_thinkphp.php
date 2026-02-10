<?php
// 模拟ThinkPHP入口文件
header('Content-Type: text/html; charset=utf-8');

echo '<h1>ThinkPHP测试</h1>';
echo '<p>PHP版本: ' . phpversion() . '</p>';
echo '<p>当前文件: ' . __FILE__ . '</p>';
echo '<p>请求URI: ' . $_SERVER['REQUEST_URI'] . '</p>';
echo '<p>PHP_SELF: ' . $_SERVER['PHP_SELF'] . '</p>';
echo '<p>SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . '</p>';
echo '<p>PATH_INFO: ' . (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '未设置') . '</p>';
echo '<p>QUERY_STRING: ' . $_SERVER['QUERY_STRING'] . '</p>';

// 测试URL重写
if (isset($_GET['s'])) {
    echo '<p>GET参数s: ' . $_GET['s'] . '</p>';
}
?>