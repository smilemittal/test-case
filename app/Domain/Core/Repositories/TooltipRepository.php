<?php

namespace App\Domain\Core\Repositories;

use App\Domain\Core\Models\Tooltip;

class TooltipRepository
{
    private Tooltip $tooltip;

    public function __construct(Tooltip $tooltip)
    {
        $this->tooltip = $tooltip;
    }

    public function getAllTooltips()
    {
        return $this->tooltip->get();
    }
}
