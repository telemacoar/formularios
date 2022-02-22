<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formfield;
use App\Models\Formfieldvalue;
use App\Models\Formvalue;

class FormfieldvalueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formfieldvalue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'formvalue_id' => Formvalue::factory(),
            'formfield_id' => Formfield::factory(),
            'value' => $this->faker->word,
        ];
    }
}
