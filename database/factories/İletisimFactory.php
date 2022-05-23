<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\İletisim;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\İletisim>
 */
class İletisimFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = İletisim::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
      return [
          'name' =>$this->faker->name(rand(3,7)),
          'email' => $this->faker->unique()->safeEmail,
          'questions'=> $this->faker->text(200),
          'number' => rand(10000,100000),
      ];
  }
}
