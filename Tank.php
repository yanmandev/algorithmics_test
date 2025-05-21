<?php

namespace app;

use app\actions\DrivingAction;
use app\actions\ShootingAction;
use app\interfaces\DrivingInterface;
use app\interfaces\ShootingInterface;

final class Tank extends Transport implements DrivingInterface, ShootingInterface
{
    private DrivingAction $driving;
    private ShootingAction $shooting;

    public function __construct()
    {
        $this->driving = new DrivingAction(0, 0);
        $this->shooting = new ShootingAction(0);
    }

    public function getId(): string
    {
        return '00005';
    }

    public function getName(): string
    {
        return 'tank';
    }

    public function drive(int $x, int $y): void
    {
        $this->driving->drive($x, $y);
    }

    public function shoot(int $shots): void
    {
        $this->shooting->shoot($shots);
    }
}