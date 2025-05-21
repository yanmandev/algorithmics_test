<?php

namespace app;

abstract class Transport
{
    abstract function getId(): string;

    abstract function getName(): string;
}