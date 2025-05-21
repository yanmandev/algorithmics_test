<?php

namespace app\actions;

use app\interfaces\SwimmingInterface;

class SwimmingAction implements SwimmingInterface
{
    private int $x = 0;
    private int $y = 0;
    private int $speed = 10;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swim(int $x, int $y): void
    {
        $this->x += $x;
        $this->y += $y;
    }
}