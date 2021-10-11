<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime();
    }

    private function getStart()
    {
        return $this->startTime;
    }

    private function getEnd()
    {
        return $this->endTime;
    }

    public function start()
    {
        return $this->startTime = microtime();
    }

    public function stop()
    {
        $this->endTime = microtime();
    }

    public function getElapsedTime()
    {
        return
    }
}

