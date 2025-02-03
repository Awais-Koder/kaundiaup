<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Certificate;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CertificateSubMenu>
 */
class CertificateSubMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'certificate_id' => Certificate::factory(),
            'name' => fake()->name(),
        ];
    }
}
