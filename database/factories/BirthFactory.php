<?php

namespace Database\Factories;

use App\Models\Birth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Birth>
 */
class BirthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Birth::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'dateOfBirth' => $this->faker->date(),
            'placeOfBirth' => $this->faker->city,
            'district' => $this->faker->city,
            'city' => $this->faker->city,
            'ward_no' => $this->faker->randomNumber(2),
            'province_no' => $this->faker->randomNumber(1),

            'fatherFName' => $this->faker->firstNameMale,
            'fatherLName' => $this->faker->lastName,
            'permanentFAddress' => $this->faker->address,
            'id_no1' => $this->faker->randomNumber(9),
            'FOccupation' => $this->faker->jobTitle,
            'email' => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->phoneNumber,

            'motherFName' => $this->faker->firstNameFemale,
            'motherLName' => $this->faker->lastName,
            'permanentMAddress' => $this->faker->address,
            'id_no2' => $this->faker->randomNumber(9),
            'MOccupation' => $this->faker->jobTitle,
            'status' => $this->faker->randomElement(['submitted', 'registered', 'verified']),

        ];
    }
}
