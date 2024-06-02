<?php

namespace Database\Factories\Backend;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DoctorFactory extends Factory
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
            'designation_id' => 1,
				'category_id' => 1,
				'gendar' => 'fsddf',
				'experience' => 'fsddf',
				'degree_id' => 1,
				'consultant_type_id' => 1,
				'chamber_id' => 1,
				'district_id' => 1,
				'other_info' => 'fsddf',
            'serial' => rand(0,500),
            'status' => 'Active',
            'created_at' => Carbon::now(),
        ];
    }
}
