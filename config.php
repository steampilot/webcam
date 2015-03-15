<?php
/**
 * Created by PhpStorm.
 * User: steampilot
 * Date: 10.02.15
 * Time: 11:04
 */
$config = array(
    'ip' => '192.168.0.10',
    'snapshot_path' => '/snapshots',
    'login' => '',
    'password' => '',
);
$com = 'http://'.$config['ip'].'/cgi-bin/admin/';
$set = 'setparam.cgi?';
$get = 'getparam.cgi?';
$ctrl = 'camctrl.cgi?';
$move_left =  $com.$ctrl.'move=left';
$move_right = $com.$ctrl.'move=right';
$move_home = $com.$ctrl.'move=home';
$get_snapshot = 'http://'.$config['ip'].'cgi-bin/video.jpg';
