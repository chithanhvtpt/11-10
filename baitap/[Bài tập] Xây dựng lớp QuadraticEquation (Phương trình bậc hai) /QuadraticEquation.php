<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function geta()
    {
        return $this->a;
    }

    public function getb()
    {
        return $this->b;
    }

    public function getc()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $delta = ($this->b * 2) - 4 * $this->a * $this->c;
        return $delta;
    }

    public function getRoot1()
    {
        $x1 = (-$this->b + sqrt($this->b * 2 - 4 * $this->a * $this->c)) / 2 * $this->a;
        return $x1;
    }

    public function getRoot2()
    {
        $x2 = (-$this->b - sqrt($this->b * 2 - 4 * $this->a * $this->c)) / 2 * $this->a;
        return $x2;
    }

    public function calculate()
    {
        if ($this->getDiscriminant() > 0) {
            echo 'nghiem thu nhat la : ' . $this->getRoot1() . '<br>';
            echo 'nghiem thu hai la :' . $this->getRoot2();
        } else if ($this->getDiscriminant() === 0) {
            echo 'phuong trinh co nghiem khep x1 = x2 =  ' . $this->getRoot1();
        } else {
            echo 'Phuong trinh vo nghiem';
        }

    }

}