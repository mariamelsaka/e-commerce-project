<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model=Gender::class; //Genders name of model


    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->text(maxNbChars: 10),

        ];
    }
}
