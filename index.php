<?php
ini_set('display_errors', 1);

include_once('classes/MovableInterface.php');
include_once('classes/speedController.php');
include_once('classes/DrivingCar.php');

$DrivingCar = new classes\ DrivingCar();

$DrivingCar->run();
$DrivingCar->driveUp();
$DrivingCar->driveUp();
$DrivingCar->driveUp();
$DrivingCar->driveDown();
$DrivingCar->driveDown();
$DrivingCar->stop();
