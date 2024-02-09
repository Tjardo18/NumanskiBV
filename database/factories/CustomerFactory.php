<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'company' => false,
            'firstname' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'street' => $this->faker->streetName(),
            'housenumber' => $this->faker->numberBetween(1, 300),
            'postalcode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
