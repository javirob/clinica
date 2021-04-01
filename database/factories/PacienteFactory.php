<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Paciente::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nombre' => $this->faker->firstName(),
      'apellidos' => $this->faker->lastName(),
      'fnacimiento' => $this->faker->dateTimeBetween('-100 years', '-15 years'),
      'telefono' => $this->faker->phoneNumber(),
      'email' => $this->faker->email(),
      'direccion' => $this->faker->address(),
      'enfermedades' => $this->faker->sentence(10),
      'medicamentos' => $this->faker->sentence(5),
      'seguro' => $this->faker->randomElement(['Axa', 'Sanitas', 'Asisa', 'DKV']),
      'poliza' => $this->faker->creditCardNumber(),
    ];
  }
}
