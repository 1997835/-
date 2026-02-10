<?php
// 数据库连接测试
header('Content-Type: text/html; charset=utf-8');

echo '<h1>数据库连接测试</h1>';

// 测试数据库连接
$host = '127.0.0.1';
$port = 3306;
$dbname = 'ssjc';
$username = 'root';
$password = 'ServBay.dev';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p style="color: green;">✓ 数据库连接成功！</p>';
    
    // 测试表是否存在
    $result = $pdo->query("SHOW TABLES LIKE 'h_%'");
    $tables = $result->fetchAll(PDO::FETCH_COLUMN);
    echo '<p>数据库表数量: ' . count($tables) . '</p>';
    if (count($tables) > 0) {
        echo '<p style="color: green;">✓ 数据库表存在！</p>';
    } else {
        echo '<p style="color: red;">✗ 数据库表不存在！</p>';
    }
    
} catch (PDOException $e) {
    echo '<p style="color: red;">✗ 数据库连接失败：' . $e->getMessage() . '</p>';
}

// 测试文件权限
echo '<h2>文件权限测试</h2>';
$runtime_dir = '/Users/wang/Desktop/zuqiu/1/1/My/Runtime';
if (is_writable($runtime_dir)) {
    echo '<p style="color: green;">✓ Runtime目录可写！</p>';
} else {
    echo '<p style="color: red;">✗ Runtime目录不可写！</p>';
    echo '<p>建议执行：chmod -R 777 ' . $runtime_dir . '</p>';
}

// 测试模板文件
$template_file = '/Users/wang/Desktop/zuqiu/1/1/My/Home/View/Index/index.html';
if (file_exists($template_file)) {
    echo '<p style="color: green;">✓ 模板文件存在！</p>';
    echo '<p>模板文件：' . $template_file . '</p>';
} else {
    echo '<p style="color: red;">✗ 模板文件不存在！</p>';
    echo '<p>查找模板文件：' . $template_file . '</p>';
    
    // 查找所有模板文件
    echo '<h3>查找模板文件</h3>';
    $view_dir = '/Users/wang/Desktop/zuqiu/1/1/My/Home/View';
    $files = scandir($view_dir);
    echo '<ul>';
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo '<li>' . $file . '</li>';
        }
    }
    echo '</ul>';
}
?>