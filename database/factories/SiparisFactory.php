<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siparis;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siparis>
 */
class SiparisFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siparis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,10),
            'urun_id'  => rand(1,10),
        ];
    }
}
