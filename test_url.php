<?php
// URL重写测试
header('Content-Type: text/html; charset=utf-8');

echo '<h1>URL重写测试</h1>';
echo '<p>当前URL: ' . $_SERVER['REQUEST_URI'] . '</p>';

// 测试查询字符串
if (isset($_GET['s'])) {
    echo '<p>GET参数s: ' . $_GET['s'] . '</p>';
    echo '<p style="color: green;">✓ URL重写成功！</p>';
} else {
    echo '<p style="color: red;">✗ URL重写失败，没有获取到GET参数s</p>';
}

// 测试直接访问
if (strpos($_SERVER['REQUEST_URI'], 'test_url.php') !== false) {
    echo '<h2>直接访问测试</h2>';
    echo '<p><a href="/test_rewrite" target="_blank">点击测试URL重写</a></p>';
}
?>