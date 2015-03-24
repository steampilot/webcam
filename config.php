<?php
/**
 * Created by PhpStorm.
 * User: steampilot
 * Date: 10.02.15
 * Time: 11:04
 */

/**
 * The IP address to the IpWebCam
 *
 * Refer to the installation manual for your IpWebCam
 * Make sure the IpWebCam and its software is installed first
 * It is important that the IpWebCam is reset to default settings first
 * Do not overlook this process. Otherwise this application will not work
 * Enter the given IP address identified by the IpWebCam software.
 */
$ip = '192.168.0.10';

/**
 * Moves the IpWebCam number of steps to the right and pauses for 1 sec
 *
 * @param $number int The number of steps to move
 */
function move_right($number = 1){
    if ($number < 1) {
        $number = 1;
    }
    for ($i = 1; $i <= $number; $i++) {
        file_get_contents("http://$ip/cgi-bin/camctrl.cgi?move=right");
        sleep(1);
        echo "moving the cam to the right";
    }
}

/**
 * Moves the IpWebCam number of steps to the left and pauses for 1 sec
 *
 * @param $number int The number of steps to move
 */
function move_left($number = 1){
    if ($number < 1) {
        $number = 1;
    }
    for ($i = 1; $i <= $number; $i++) {
        file_get_contents("http://$ip/cgi-bin/camctrl.cgi?move=left");
        sleep(1);
        echo "moving the cam to the left";
    }
}

/**
 * Moves the IpWebCam to its home position and pauses for 1 sec
 *
 */
function move_home(){
    file_get_contents("http://$ip/cgi-bin/camctrl.cgi?move=right");
    sleep(1);
}

/**
 * Gets the current image as a snapshot of the IpWebCam and saves it as jpg
 *
 * @param $fileName String The name of the image file
 */
function take_snapshot($fileName = 'snapshot'){
    sleep(1);
    $fileContent = file_get_contents("http://$ip/cgi-bin/video.jpg");
    file_put_contents($fileName, $fileContent);
}
