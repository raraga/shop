<?php

namespace Database\Factories;

use App\Models\Grocery;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroceryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grocery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'quantity' => 1
        ];
    }
}
