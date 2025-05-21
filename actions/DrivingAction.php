<?php

namespace app\actions;

use app\interfaces\DrivingInterface;

class DrivingAction implements DrivingInterface
{
    private int $x = 0;
    private int $y = 0;
    private int $speed = 100;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function drive(int $x, int $y): void
    {
        $this->x += $x;
        $this->y += $y;
    }
}