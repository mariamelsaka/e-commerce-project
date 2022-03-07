<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category; //*****************;
use App\Models\Image;//*************************************

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Category::class;
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->unique()->text(100),
            'description'=>$this->faker->sentence(25),
            // 'image_id'=>$imageIds[$index],

        ];
    }
}
