<?php
require_once '../vendor/autoload.php';

use \logger\Logger;

#设置logs根目录
define('LOG_PATH', realpath(__DIR__).DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR); // 日志目录 默认位置是项目根目录
Logger::i('测试字符串内容', '中文路径名/测试文件', '0');
Logger::i(array('数组内容'), 'array/res', '1');
Logger::i(array('数组内容'), 'array/res', '2');