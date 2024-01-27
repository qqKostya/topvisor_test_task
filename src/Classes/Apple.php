<?php

namespace Classes;

class Apple
{
    public int $age;
    public string $color;
    public string $size;
    public int $spoiled;
    public int $fallen;

    public function __construct(int $age = null, string $color = 'green', string $size = 'medium')
    {
        $this->age = $age ?? rand(0, 30);
        $this->color = $color;
        $this->size = $size;
        $this->spoiled = 0;
        $this->fallen = 0;
    }

    public function fall(): void
    {
        $this->fallen = 1;
    }

    public function spoil(): void
    {
        if ($this->fallen) {
            $this->spoiled = 1;
        }
    }
}
