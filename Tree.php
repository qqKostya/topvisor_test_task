<?php

class Tree {
    public array $apples = [];

    public function addApple(Apple $apple = null): void {
        $this->apples[] = $apple ?? new Apple();
    }

    public function passDay(): void {
        foreach ($this->apples as $apple) {
            $apple->age++;
            if ($apple->age >= 30) {
                $apple->fall();
            }
            if ($apple->fallen) {
                $apple->spoil();
            }
        }
    }

    public function getApplesCount(): int {
        return count($this->apples);
    }
}
