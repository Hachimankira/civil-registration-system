<?php

namespace Database\Factories;

use App\Models\NationalIDCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NationalIDCard>
 */
class NationalIDCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NationalIDCard::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $birth_id = 111111;

        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'birth_id' => $birth_id++,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'dateOfBirth' => $this->faker->date,
            'permanentAddress' => $this->faker->address,
            'currentAddress' => $this->faker->address,
            'issuedPlace' => $this->faker->city,
            'fatherFName' => $this->faker->firstName,
            'fatherLName' => $this->faker->lastName,
            'permanentFAddress' => $this->faker->address,
            'id_no1' => $this->faker->unique()->randomNumber,
            'status' => $this->faker->randomElement(['submitted', 'registered', 'verified']),
        ];
    }
}
