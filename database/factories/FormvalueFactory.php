<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formschema;
use App\Models\Formvalue;
use App\Models\User;

class FormvalueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formvalue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'formschema_id' => Formschema::factory(),
            'date' => $this->faker->dateTime(),
            'user_id' => User::factory(),
        ];
    }
}
