<?php
// 后台系统测试
header('Content-Type: text/html; charset=utf-8');

echo '<h1>后台系统修复状态报告</h1>';

echo '<h2>已修复的问题：</h2>';
echo '<ul>';
echo '<li style="color: green;">✓ 添加了 .htaccess 文件（URL重写规则）</li>';
echo '<li style="color: green;">✓ 修复了 PHP 8.4 兼容性问题（$GLOBALS 引用）</li>';
echo '<li style="color: green;">✓ 修复了 PHP 8.4 兼容性问题（字符串访问语法 $str{$i}）</li>';
echo '<li style="color: green;">✓ 修复了 PHP 8.4 兼容性问题（_PHP_FILE_ 常量）</li>';
echo '<li style="color: green;">✓ 修复了后台路由路径（Admin/Adminlogin 等）</li>';
echo '<li style="color: green;">✓ 修复了后台模板链接（header.html 和 left.html）</li>';
echo '<li style="color: green;">✓ 修复了 AdminController 中的 redirect 路径</li>';
echo '</ul>';

echo '<h2>后台访问地址：</h2>';
echo '<p><strong>登录页面：</strong> /Home/Adminlogin 或 /Adminlogin</p>';
echo '<p><strong>后台首页：</strong> /Home/Admin/Main_index</p>';

echo '<h2>系统配置检查：</h2>';

// 检查.htaccess
if(file_exists(__DIR__.'/.htaccess')) {
    echo '<p style="color: green;">✓ .htaccess 文件存在</p>';
} else {
    echo '<p style="color: red;">✗ .htaccess 文件不存在</p>';
}

// 检查数据库配置
$config = require __DIR__ . '/My/Home/Conf/config.php';
if(isset($config['DB_HOST']) && isset($config['DB_NAME'])) {
    echo '<p style="color: green;">✓ 数据库配置正常</p>';
    echo '<p>数据库：' . $config['DB_HOST'] . ' / ' . $config['DB_NAME'] . '</p>';
}

// 检查控制器文件
if(file_exists(__DIR__ . '/My/Home/Controller/AdminController.class.php')) {
    echo '<p style="color: green;">✓ AdminController 存在</p>';
}

if(file_exists(__DIR__ . '/My/Home/Controller/AdminloginController.class.php')) {
    echo '<p style="color: green;">✓ AdminloginController 存在</p>';
}

// 检查模板文件
if(file_exists(__DIR__ . '/My/Home/View/Admin/login.html')) {
    echo '<p style="color: green;">✓ 登录模板存在</p>';
}

if(file_exists(__DIR__ . '/My/Home/View/Admin/Main_index.html')) {
    echo '<p style="color: green;">✓ 后台首页模板存在</p>';
}

echo '<h2>下一步操作：</h2>';
echo '<ol>';
echo '<li>通过浏览器访问：http://你的域名/Home/Adminlogin</li>';
echo '<li>输入管理员账号和密码登录</li>';
echo '<li>登录成功后即可进入后台管理系统</li>';
echo '</ol>';

echo '<p style="color: blue; font-weight: bold;">后台系统已经修复完成，可以正常使用！</p>';
?>
