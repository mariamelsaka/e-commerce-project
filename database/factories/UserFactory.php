<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model=User::class;
    public function definition()
    {
        $image_id=Image::pluck('id')->toArray(); //btgeeb kol id el mawgoodah
        $index2=array_rand($image_id);
        $gender_id=Gender::pluck('id')->toArray();
        $index=array_rand($gender_id);
        return [
            'username' => $this->faker->unique()->userName,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->unique()->address,
            'email' => $this->faker->unique()->safeEmail,

            'password'=>bcrypt('123456'),
            'is_admin' => $this->faker->boolean(),
            'bio'=>$this->faker->sentence(10),
             'gender_id'=>$gender_id[$index],
            'image_id'=>$image_id[$index2]
        ];
    }

//    /**
//     * Indicate that the model's email address should be unverified.
//     *
//     * @return static
//     */
//    public function unverified()
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'email_verified_at' => null,
//            ];
//        });
//    }
}
