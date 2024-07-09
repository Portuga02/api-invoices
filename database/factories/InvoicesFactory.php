<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paid = $this->faker->boolean();
        return [
           'user_id' => User::all()->random->id,
           'type' => $this->faker->randomElement(['B','C','P']), //[BOLETO, CARTAO E PIX]
            'paid' => $paid,
            'value' => $this->faker->numberBetween(int1:1000, int2:2147483647),
            'payment_date' => $paid ? $this->faker->randowElement([$this->faker->dateTimeThisMonth()]) : null


        ];
    }
}
