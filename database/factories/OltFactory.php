<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class OltFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $latitud = $this->faker->latitude();
        $longitud = $this->faker->longitude();

        $point = "POINT($longitud $latitud)";

        return [
            'nombre' => $this->faker->name(),
            'nro_puertos' => $this->faker->biasedNumberBetween(1,10),
            'estado' => $this->faker->boolean,
            'fecha_instalacion' => $this->faker->date(),
            'modelo' => $this->faker->firstName(),
            'responsable' => $this->faker->lastName(),
            'coordenada' => DB::raw("ST_GeomFromText('$point','4326')"),
        ];
    }
}
