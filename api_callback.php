<?php
// +----------------------------------------------------------------------
// | Fanwe 方维众筹商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 甘味人生(526130@qq.com)
// +----------------------------------------------------------------------


//用于处理 api同步登录的回调

require './system/system_init.php';
require './app/Lib/app_init.php';

$api_class = btrim($_REQUEST['c']);
if(file_exists(APP_ROOT_PATH.'system/api_login/'.$api_class.'_api.php'))
{
	$api = $GLOBALS['db']->getRow("select * from ".DB_PREFIX."api_login where class_name='".$api_class."'");
	require_once APP_ROOT_PATH.'system/api_login/'.$api_class.'_api.php';
	$api_class = $api['class_name']."_api";
	$api_obj = new $api_class($api);
	$api_obj->callback();
}

?>