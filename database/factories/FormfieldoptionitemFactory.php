<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formfieldoption;
use App\Models\Formfieldoptionitem;

class FormfieldoptionitemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formfieldoptionitem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'code' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'formfieldoption_id' => Formfieldoption::factory(),
        ];
    }
}
