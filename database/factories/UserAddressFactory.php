<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,100),
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->numberBetween(10, 1000),
            'colonia' => $this->faker->citySuffix,
            'cp' => $this->faker->numberBetween(0,66000),
            'ciudad' => $this->faker->city
        ];
    }
}
