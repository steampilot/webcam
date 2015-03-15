<?php
/**
 * Created by PhpStorm.
 * User: steampilot
 * Date: 10.03.15
 * Time: 10:56
 */
/**
 * $move_home reset the cam position
 * $move_left $move_right
 * $get_snapshot gets the picture
 */
include 'config.php';



$file = '/snapshots/snapshot_';

header('Location: '.$move_home);
sleep(1);
$snapshot1 = file_get_contents($get_snapshot);
sleep(1);
header('Location: '.$move_left);
$data = header('Location: '.$get_snapshot);
file_put_contents($file.'home',$data);
//header('Location: '.$get_snapshot)
sleep(1);
header('Location: '.$move_left);
$data = header('Location: '.$get_snapshot);
file_put_contents($file.'home',$data);
//header('Location: '.$get_snapshot)
sleep(1);
header('Location: '.$move_home);
sleep(1);
header('Location: '.$move_right);
//header('Location: '.$get_snapshot)
sleep(1);
header('Location: '.$move_right);
//header('Location: '.$get_snapshot)
sleep(1);
header('Location: '.$move_right);
//header('Location: '.$get_snapshot)
