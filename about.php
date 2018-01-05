<?php 

$self = 'about';
$area = empty($_REQUEST['area']) ? 'gsjj' : $_REQUEST['area'];

include_once('components/head.php');

include_once('components/about.php');

include_once('components/foot.php');