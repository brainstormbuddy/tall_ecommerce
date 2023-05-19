<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type',
            'address_line_1',
            'address_line_2',
            'city',
            'state',
            'zip_code',
            'country',
            'phone',
            'latitude',
            'longitude',
            'customer_id',
        ];
    }
}
