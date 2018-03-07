<?php 

$self = 'article';
$id = empty($_REQUEST['id']) ? 1 : $_REQUEST['id'];

$maps = array(
	1 => '制造执行系统(MES)',
	2 => '调度管理系统(DMS)',
	3 => '能源管理系统(EMS)',
	4 => '物联网解决方案',
	5 => '视频系统',
	6 => '广播系统',
	7 => 'Andon系统',
	8 => 'PMC系统',
	9 => '东风本田设施1科能源管理系统',
	10 => 'AF1科工程呼叫系统维护改造',
	11 => 'PR1科A/B线数字化监控系统',
	12 => 'we1科D区新增摄像头承',
	13 => 'WE1科D区PMC设备维护并新增监控承揽合同',
	14 => 'WE2科后地板自动线PMC监控系统',
	15 => 'WE2科车间能源管理系统',
	16 => 'WE1科车间能源管理系统',
	17 => '冲压一科设备管理系统',
	18 => '预制棒车间温湿度微粒子监测系统',
	19 => '长飞光纤光缆有限公司能源监控系统',
	20 => '长飞光纤设备监控系统',
	21 => '长飞光纤运行记录电子化系统开发',
	22 => '5＃／6＃机组除灰除渣系统改造',
	23 => '5＃／6＃机组旁路PLC系统改造'
);

include_once('components/head.php');

if (file_exists("components/articles/$id.php")) {
	include_once("components/articles/$id.php");
} else {
	$title = $content = $maps[$id];
	include_once("components/articles/common.php");
}


include_once('components/foot.php');