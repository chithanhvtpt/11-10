<?php

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed = 1;
    private bool $on = false;
    private float $radius = 5;
    private  string $color = 'blue';

    public function __construct($speed, $on, $radius, $color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setOn($on)
    {
        $this->on = true;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getSpeed():int
    {
        return $this->speed;
    }
    public function getOn():bool
    {
        return $this->on;

    }
    public function getRadius()
    {
        return $this->radius;

    }
    public function getColor(): string
    {
        return $this->color;
    }

    public function toString(): string
    {
        if ($this->getOn() === true){
            return 'Fan is on' . " " .$this->speed . " " . $this->radius . " " . $this->color;
        }else {
            return "fan is off" . " " . $this->speed . " " . $this->radius . " " . $this->color;
        }
    }
}