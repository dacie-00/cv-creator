<?php

namespace Database\Factories;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CvEducation>
 */
class CvEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cv_id' => Cv::factory(),
            'school' => $this->faker->word(),
            'level' => $this->faker->randomElement(['Secondary', 'Higher']),
            'degree' => $this->faker->randomElement(['Bachelor', 'Master']),
            'field' => $this->faker->randomElement(['Computer Science', 'Mathematics', 'Physics']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
