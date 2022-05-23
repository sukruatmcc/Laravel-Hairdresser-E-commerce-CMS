<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sepet;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sepet>
 */
class SepetFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Sepet::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
      return [
          'user_id'=>rand(1,10),
          'urun_id'  => rand(1,100),
      ];
  }
}
