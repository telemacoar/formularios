<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formfield;
use App\Models\Formfieldoption;

class FormfieldoptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formfieldoption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'endpoint' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'formfield_id' => Formfield::factory(),
        ];
    }
}
