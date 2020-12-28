<?php


namespace classes;


class speedController
{
    const min = 0;
    const max = 330;
    private $speed = 0;
    private $ridestep = 10;


    protected function speedUp()
    {
        $this->speed = $this->speed + $this->ridestep;
        if ($this->speed <= self::max) {
            return $this->speed ;
        }

        $this->speed = self::max;
        return $this->speed ;
    }

    protected function speedDown()
    {
        $this->speed = $this->speed - $this->ridestep;
        if ($this->speed >= self::min) {
            return $this->speed ;
        }

        $this->speed = self::min;
        return $this->speed;
    }

    protected function speedStop(){
        $this->speed = self::min;
        return $this->speed;
    }

    protected function get_speed(){
        return  $this->speed;
    }
}