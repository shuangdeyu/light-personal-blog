<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
// 定义静态资源目录 或 URL
//define('STATIC_PATH', '/public/static/');
//绑定默认模块,去开启auto_bind_module
define('BIND_MODULE','index');
//七牛自动加载文件
require __DIR__ . '/vendor/qiniusdk/autoload.php';
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
