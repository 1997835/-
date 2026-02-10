<?php
// 数据库连接和表结构检查
header('Content-Type: text/html; charset=utf-8');

echo '<h1>数据库检查</h1>';

// 数据库配置
$config = array(
    'host' => '127.0.0.1',
    'port' => 3306,
    'dbname' => 'ssjc',
    'username' => 'root',
    'password' => 'ServBay.dev',
    'prefix' => 'h_'
);

try {
    // 连接数据库
    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8";
    $pdo = new PDO($dsn, $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p style="color: green;">✓ 数据库连接成功！</p>';
    
    // 检查所有表
    echo '<h2>检查表结构</h2>';
    
    // 需要检查的表
    $tables = array(
        'wap',
        'user',
        'touzhu',
        'saishi',
        'img',
        'game',
        'shishile'
    );
    
    foreach ($tables as $table) {
        $full_table = $config['prefix'] . $table;
        try {
            $result = $pdo->query("SHOW TABLES LIKE '$full_table'");
            if ($result->rowCount() > 0) {
                echo "<p style='color: green;'>✓ 表 {$full_table} 存在</p>";
            } else {
                echo "<p style='color: red;'>✗ 表 {$full_table} 不存在</p>";
            }
        } catch (PDOException $e) {
            echo "<p style='color: red;'>✗ 表 {$full_table} 检查失败：{$e->getMessage()}</p>";
        }
    }
    
    // 显示所有表
    echo '<h2>数据库所有表</h2>';
    $result = $pdo->query("SHOW TABLES");
    $all_tables = $result->fetchAll(PDO::FETCH_COLUMN);
    echo '<ul>';
    foreach ($all_tables as $table) {
        echo '<li>' . $table . '</li>';
    }
    echo '</ul>';
    
} catch (PDOException $e) {
    echo '<p style="color: red;">✗ 数据库连接失败：' . $e->getMessage() . '</p>';
}
?>