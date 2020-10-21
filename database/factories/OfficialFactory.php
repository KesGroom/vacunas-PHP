<?php

namespace Database\Factories;

use App\Models\Eps;
use App\Models\Official;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Official::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'remember_token' => Str::random(10),
            'phone' => $this->faker->numerify("##########"),
            'address' => $this->faker->streetAddress,
            'profession' => $this->faker->randomElement(["Doctor(a)", "Enfermer@", "Auxiliar"]),
            'position' => $this->faker->randomElement(["Jefe", "Gerente", "Empleado"]),
            'eps_id' => Eps::all()->random()->id
        ];
    }
}
