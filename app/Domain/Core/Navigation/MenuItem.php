<?php

namespace App\Domain\Core\Navigation;

class MenuItem
{
    public string $title;
    public string $url;
    public string $icon;
    public int $priority;

    public array $menus = [];

    public function __construct(string $title, string $url = '#', string $icon = '', int $priority = 9999)
    {
        $this->title = $title;
        $this->url = $url;
        $this->icon = $icon;
        $this->priority = $priority;
    }

    public function registerMenu(Menu $menu)
    {
        array_push($this->menus, $menu);

        return $this;
    }
}
