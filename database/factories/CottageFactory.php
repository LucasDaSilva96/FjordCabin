<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cottage>
 */
class CottageFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            // 'user_id' => User::factory()->create()->id,
            // 'title' => $this->faker->sentence(3),
            // 'description' => $this->faker->paragraph(4),
            // 'location' => $this->faker->city(),
            // 'address' => $this->faker->address(),
            // 'price' => $this->faker->randomFloat(2, 50, 500),
            // 'image_path' => $this->faker->randomElement($this->imageGallery),
        ];
    }
}
