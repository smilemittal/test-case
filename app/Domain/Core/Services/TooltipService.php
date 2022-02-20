<?php

namespace App\Domain\Core\Services;

use App\Domain\Core\Repositories\TooltipRepository;

class TooltipService
{
    private TooltipRepository $tooltipRepository;

    public function __construct(TooltipRepository $tooltipRepository)
    {
        $this->tooltipRepository = $tooltipRepository;
    }

    public function getAllTooltips()
    {
        return $this->tooltipRepository->getAllTooltips();
    }
}
