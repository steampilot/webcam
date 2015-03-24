<?php
/**
 * Created by PhpStorm.
 * User: steampilot
 * Date: 10.03.15
 * Time: 10:56
 */
/**
 * Controls the IpWebcam and creates a Panorama image
 *
 * This file is intended to be triggered by a php console command cronjob for every 60 seconds
 * Refer to crontab manual or its corresponding windows alternative
 *
 * $move_home reset the cam position
 * $move_left $move_right
 * $get_snapshot gets the picture
 */
include 'config.php';

/**
 * moves and controlls the cam
 *
 * It creates 5 pictures and puts them into tmp folder for further processing
 */
function get_snapshots(){

    move_home(0);
    move_left(2);
    take_snapshot("tmp/west.jpg");
    move_right(1);
    take_snapshot("tmp/northwest.jpg");
    move_home(0);
    take_snapshot("tmp/north.jpg");
    move_right(1);
    take_snapshot("tmp/northeast.jpg");
    move_right(1);
    take_snapshot("tmp/east.jpg");
    move_home(0);
}

/**
 * Creates the panorama picture
 *
 * It stitches the pictures from the tmp folder together to create a sub standard panorama picture
 */
function create_panorama(){
    $west = imagecreatefromjpeg('tmp/west.jpg');
    $west_with = imagesx($west);
    $west_height = imagesy($west);
    $northwest = imagecreatefromjpeg('tmp/northwest.jpg');
    $northwest_with = imagesx($northwest);
    $northwest_height = imagesy($northwest);
    $north = imagecreatefromjpeg('tmp/north.jpg');
    $north_with = imagesx($north);
    $north_height = imagesy($north);
    $northeast = imagecreatefromjpeg('tmp/northeast.jpg');
    $northeast_with = imagesx($northeast);
    $northeast_height = imagesy($northeast);
    $east = imagecreatefromjpeg('tmp/east.jpg');
    $east_with = imagesx($east);
    $east_height = imagesy($east);
    $panorama_with =
        $west_with +
        $northwest_with +
        $north_with +
        $northeast_with+
        $east_with;
    $panorama_height = $north_height;
    //$panorama = imagecreate($panorama_with,$panorama_height);
    $panorama = @imagecreate($panorama_with, $panorama_height)
        or die("Cannot Initialize new GD image stream");

    $refX = 0;
    $refY = 0;
    imagecopy($panorama,$west,$refX,$refY,0,0,$west_with,$west_height);
    $refX += $west_with;
    imagecopy($panorama,$northwest,$refX,$refY,0,0,$northwest_with,$northwest_height);
    $refX += $northwest_with;
    imagecopy($panorama,$north,$refX,$refY,0,0,$north_with,$north_height);
    $refX += $north_with;
    imagecopy($panorama,$northeast,$refX,$refY,0,0,$northeast_with,$northeast_height);
    $refX += $northeast_with;
    imagecopy($panorama,$east,$refX,$refY,0,0,$east_with,$east_height);
    imagejpeg($panorama,'panorama.jpg');

}
if ($ip = '127.0.0.1'){
    get_snapshots();
}
create_panorama();