<?php

namespace Classes;

class Garden
{
    public array $trees = [];
    public int $age = 0;

    public function addTree(Tree $tree): void
    {
        $this->trees[] = $tree;
    }

    public function passDay(): void
    {
        $this->age++;
        foreach ($this->trees as $tree) {
            $tree->passDay();
            if ($this->age % 30 === 0) {
                $tree->addApple(); // Добавляем яблоко на дерево каждые 30 суток
            }
        }
    }

    public function getApplesCount(): int
    {
        $totalApples = 0;
        foreach ($this->trees as $tree) {
            $totalApples += $tree->getApplesCount();
        }
        return $totalApples;
    }
}
