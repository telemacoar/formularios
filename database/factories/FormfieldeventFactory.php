<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formfield;
use App\Models\Formfieldevent;

class FormfieldeventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formfieldevent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'event' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'formfield_id' => Formfield::factory(),
        ];
    }
}
