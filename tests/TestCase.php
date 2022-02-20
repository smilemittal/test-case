<?php

namespace Tests;

use App\Domain\Core\Traits\InteractsWithTest;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, InteractsWithTest;
}
