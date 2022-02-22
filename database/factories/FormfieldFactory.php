<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formfield;
use App\Models\Formfieldtype;
use App\Models\Formgroup;

class FormfieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formfield::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'label' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'code' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'mandatory' => $this->faker->boolean,
            'enabled' => $this->faker->boolean,
            'validate' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
            'order' => $this->faker->numberBetween(-10000, 10000),
            'formgroup_id' => Formgroup::factory(),
            'formfieldtype_id' => Formfieldtype::factory(),
        ];
    }
}
