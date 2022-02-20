<?php

namespace App\Domain\Core\Navigation;

class Menu
{
    private array $items = [];
    public string $location;

    public function __construct(string $location, array $items = [])
    {
        $this->location = $location;
        $this->items = $items;
    }

    public function registerMenuItem(MenuItem $item)
    {
        array_push($this->items, $item);

        return $this;
    }

    public function getMenuItems()
    {
        return collect($this->items)->sortBy('priority')->toArray();
    }
}
