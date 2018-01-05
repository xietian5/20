<?php 

$self = 'solution';
$area = empty($_REQUEST['area']) ? 'gyzd' : $_REQUEST['area'];

include_once('components/head.php');

include_once('components/solutionlist.php');

include_once('components/foot.php');