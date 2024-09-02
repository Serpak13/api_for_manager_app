<?php

namespace Database\Factories;

use App\Models\StoreModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoreModel>
 */
class StoreModelFactory extends Factory
{
    protected $model = StoreModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'user_name' => $this->faker->name(),
            'user_email' => $this->faker->unique()->safeEmail(),
            'type_of_store' => $this->faker->randomElement([
                'bar', 'restaurant', 'shopping'
            ]),
            'location' => $this->faker->city(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'area_of_the_room' =>$this->faker->numberBetween(30,120),
            'status' => $this->faker->randomElement([
                'new', 'older'
            ])
        ];
    }
}
