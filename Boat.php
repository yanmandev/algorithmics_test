<?php

namespace app;

use app\actions\ShootingAction;
use app\actions\SwimmingAction;
use app\interfaces\ShootingInterface;
use app\interfaces\SwimmingInterface;

class Boat extends Transport implements SwimmingInterface, ShootingInterface
{
    private SwimmingAction $swimming;
    private ShootingAction $shooting;

    public function __construct()
    {
        $this->swimming = new SwimmingAction(0, 0);
        $this->shooting = new ShootingAction(0);
    }

    public function getId(): string
    {
        return '00001';
    }

    public function getName(): string
    {
        return 'boat';
    }

    public function swim(int $x, int $y): void
    {
        $this->swimming->swim($x, $y);
    }

    public function shoot(int $shots): void
    {
        $this->shooting->shoot($shots);
    }
}