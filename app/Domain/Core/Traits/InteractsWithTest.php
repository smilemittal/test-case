<?php

namespace App\Domain\Core\Traits;

trait InteractsWithTest {
    /**
     * The list of headers required to authorize the request for the
     * device.
     *
     * @var array|string[]
     */
    protected array $requiredApiRequestHeaders = [
        "X-Device-Name" => 'Back End',
        "X-Device-Type" => 'api',
        "X-Device-Os" => 'Ubuntu',
        "X-Device-Version" => '1.0',
    ];
}
