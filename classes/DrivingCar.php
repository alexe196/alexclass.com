<?php


namespace classes;


class DrivingCar extends speedController implements MovableInterface
{

    public function run()
    {
        $speedViev = $this->speedUp();
        echo"the car started:  ".$speedViev." km/ch <br> ";
    }

    public function driveUp()
    {
        $peedViev = $this->speedUp();
        echo"speed car: ".$peedViev." km/ch <br> ";
    }

    public function driveDown()
    {
        $speedViev = $this->speedDown();
        echo"speed car: ".$speedViev." km/ch <br> ";
    }

    public function stop()
    {
        $this->speedStop();
        echo"car stoped <br> ";
    }

}