<?php

namespace app\actions;

use app\interfaces\ShootingInterface;

class ShootingAction implements ShootingInterface
{
    private int $shots = 0;

    public function __construct(int $shots)
    {
        $this->shots = $shots;
    }

    public function shoot(int $shots): void
    {
        $this->shots = $shots;
    }
}