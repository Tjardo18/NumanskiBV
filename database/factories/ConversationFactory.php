<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\Conversation;
use App\Models\Customer;

class ConversationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conversation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'duration' => $this->faker->time(),
            'notes' => $this->faker->text(100),
            'customer_id' => Customer::factory(),
            'contact_id' => Contact::factory(),
        ];
    }
}
