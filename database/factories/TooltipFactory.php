<?php

namespace Database\Factories;

use App\Domain\Core\Models\Tooltip;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TooltipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tooltip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => strtolower($this->faker->unique()->text(10)),
            'value' => $this->faker->sentence,
        ];
    }
}
