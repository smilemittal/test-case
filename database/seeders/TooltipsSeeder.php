<?php

namespace Database\Seeders;

use App\Domain\Core\Models\Tooltip;
use Illuminate\Database\Seeder;

class TooltipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tooltip::factory()->count(25)->create();
    }
}
