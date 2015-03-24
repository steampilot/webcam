<?php
/**
 * Created by PhpStorm.
 * User: ShinKenDo
 * Date: 24.03.2015
 * Time: 04:48
 */
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
echo $fileName;
file_put_contents($fileName,$file);
