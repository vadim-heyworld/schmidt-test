<?php

declare(strict_types=1);

class MyService
{
    public function __construct(private string $name)
    {
    }

    public function name(): string
    {
        return $this->name;
    }
}