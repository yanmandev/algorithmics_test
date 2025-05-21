<?php

namespace app;

use app\actions\DrivingAction;
use app\actions\SwimmingAction;
use app\interfaces\DrivingInterface;
use app\interfaces\SwimmingInterface;

class Amphibian extends Transport implements DrivingInterface, SwimmingInterface
{
    private DrivingAction $driving;
    private SwimmingAction $swimming;

    public function __construct()
    {
        $this->driving = new DrivingAction(0, 0);
        $this->swimming = new SwimmingAction(0, 0);
    }

    public function getId(): string
    {
        return '000010';
    }

    public function getName(): string
    {
        return 'amphibian';
    }

    public function drive(int $x, int $y): void
    {
        $this->driving->drive($x, $y);
    }

    public function swim(int $x, int $y): void
    {
        $this->swimming->swim($x, $y);
    }
}