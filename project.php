<?php 

$self = 'project';
$area = empty($_REQUEST['area']) ? 'dfbt' : $_REQUEST['area'];

include_once('components/head.php');

include_once('components/projectlist.php');

include_once('components/foot.php');