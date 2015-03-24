<?php
/**
 * Created by PhpStorm.
 * User: ShinKenDo
 * Date: 24.03.2015
 * Time: 04:48
 */

/**
 * Moves and renames the panorama image.
 *
 * This function is intended to be triggered by a console command cron job.
 * Intentionally it should be triggered every 15 min
 */
function moveToArchive(){

$file = file_get_contents('panorama.jpg');
$date = new DateTime('now');
$dateFormat = 'y-m-d';
$timeFormat = 'Y-m-d_H-i';
$dirName = 'archive/photos/'.$date->format($dateFormat);
var_dump($dirName);
$fileName =$dirName.'/'.$date->format($timeFormat).'.jpg';
if (!file_exists($dirName)) {
    mkdir($dirName, 0777, true);
}
file_put_contents($fileName,$file);
}