<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Randevu;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Randevu>
 */
class RandevuFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Randevu::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
      return [
          'user_id'=>rand(1,10),
          'isim'  => $this->faker->name(rand(3,7)),
          'email' => $this->faker->unique()->safeEmail,
          'tel_no' => rand(10000,456789),
          'kategori'=>'kaş',
      ];
  }
}
