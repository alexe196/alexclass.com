<?php
namespace classes;

interface MovableInterface
{
    public function run();
    public function driveUp();
    public function driveDown();
    public function stop();

}