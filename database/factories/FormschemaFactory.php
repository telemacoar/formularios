<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formschema;

class FormschemaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formschema::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'name' => $this->faker->name,
            'label' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'version' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
