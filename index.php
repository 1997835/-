<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 解决No input file specified.错误的关键：确保SCRIPT_FILENAME正确
if (!isset($_SERVER['SCRIPT_FILENAME']) || empty($_SERVER['SCRIPT_FILENAME'])) {
    $_SERVER['SCRIPT_FILENAME'] = __FILE__;
}

// 确保PHP_SELF正确
if (!isset($_SERVER['PHP_SELF']) || empty($_SERVER['PHP_SELF'])) {
    $_SERVER['PHP_SELF'] = '/index.php';
}

// 确保SCRIPT_NAME正确
if (!isset($_SERVER['SCRIPT_NAME']) || empty($_SERVER['SCRIPT_NAME'])) {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 调试信息
if (isset($_GET['debug'])) {
    header('Content-Type: text/html; charset=utf-8');
    echo '<h1>ThinkPHP调试信息</h1>';
    echo '<p>PHP版本: ' . phpversion() . '</p>';
    echo '<p>当前文件: ' . __FILE__ . '</p>';
    echo '<p>请求URI: ' . $_SERVER['REQUEST_URI'] . '</p>';
    echo '<p>PHP_SELF: ' . $_SERVER['PHP_SELF'] . '</p>';
    echo '<p>SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . '</p>';
    echo '<p>PATH_INFO: ' . (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '未设置') . '</p>';
    echo '<p>QUERY_STRING: ' . $_SERVER['QUERY_STRING'] . '</p>';
    echo '<p>REQUEST_FILENAME: ' . $_SERVER['REQUEST_FILENAME'] . '</p>';
    echo '<p>DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT'] . '</p>';
    exit;
}

define('GROUP_NAME','Home');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录 - 使用绝对路径避免问题
define('APP_PATH', __DIR__ . '/My/');

// 引入ThinkPHP入口文件
require __DIR__ . '/Name/index.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单