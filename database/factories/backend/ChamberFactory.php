<?php

namespace Database\Factories\Backend;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChamberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'location' => 'fsddf',
				'other_info' => 'fsddf',
				'map_link' => 'fsddf',
				'website_link' => 'fsddf',
            'serial' => rand(0,500),
            'status' => 'Active',
            'created_at' => Carbon::now(),
        ];
    }
}
