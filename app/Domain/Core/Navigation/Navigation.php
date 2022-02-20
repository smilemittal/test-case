<?php

namespace App\Domain\Core\Navigation;

use App\Domain\Core\Navigation\Menu;
use Illuminate\Support\Collection;

class Navigation
{
    public Collection $menus;

    public function __construct()
    {
        $this->menus = new Collection();
    }

    public function register(Menu $item)
    {
        $this->menus->add($item);

        return $this;
    }

    public function getMenuByLocation(string $location)
    {
        return $this->menus->where('location', $location)->first();
    }
}
