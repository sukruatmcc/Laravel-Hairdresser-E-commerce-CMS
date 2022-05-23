<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Urunler;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Urunler>
 */
class UrunlerFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Urunler::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
      $name=$this->faker->name();
      return [
          'user_id'=>rand(1,21),
          'urun_adi' => $name,
          'slug' => Str::slug($name),
          'description'=>$this->faker->text(200),
          'fiyat'=>rand(20,1000),
      ];
  }
}
