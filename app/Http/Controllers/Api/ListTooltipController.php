<?php

namespace App\Http\Controllers\Api;

use App\Domain\Core\Resources\TooltipResource;
use App\Domain\Core\Services\TooltipService;
use App\Http\Controllers\Controller;

class ListTooltipController extends Controller
{
    public function __invoke(TooltipService $tooltipService)
    {
        $tooltips = $tooltipService->getAllTooltips();

        return TooltipResource::collection($tooltips);
    }
}
