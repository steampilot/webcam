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





file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
$filecontent = file_get_contents('http://10.142.126.189/cgi-bin/video.jpg');
$filename = 'file.jpg';
file_put_contents($filename, $filecontent);
echo '<img src="file.jpg">';
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
$filecontent = file_get_contents('http://10.142.126.189/cgi-bin/video.jpg');
$filename = 'file1.jpg';
file_put_contents($filename, $filecontent);
echo '<img src="file1.jpg">';
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
echo '<img src="http://10.142.126.189/cgi-bin/video.jpg">';

$filecontent = file_get_contents('http://10.142.126.189/cgi-bin/video.jpg');
$filename = 'file2.jpg';
file_put_contents($filename, $filecontent);
echo '<img src="file2.jpg">';

file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
file_get_contents('http://10.142.126.189/cgi-bin/camctrl.cgi?move=right');
$filecontent = file_get_contents('http://10.142.126.189/cgi-bin/video.jpg');
$filename = 'file3.jpg';
file_put_contents($filename, $filecontent);
echo '<img src="file3.jpg">';
