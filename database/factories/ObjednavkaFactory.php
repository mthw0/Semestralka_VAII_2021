<?php

namespace Database\Factories;

use App\Models\Objednavka;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjednavkaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ObjednavkaFactory::new();
    }

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objednavka::class;


}
