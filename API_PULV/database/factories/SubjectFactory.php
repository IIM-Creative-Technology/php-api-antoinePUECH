<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 3),
            'date_begin' => $this->faker->dateTimeBetween($format = 'd-m-Y', $startDate = 'now', $endDate = '+3 month'),
            'date_end' => $this->faker->dateTimeBetween($format = 'd-m-Y', $startDate = 'now', $endDate = '+3 month', $interval = '+5 days'),
            'promotion' => $this->faker->numberBetween(2021, 2026),
            'teacher_id' => $this->faker->numberBetween(1, 12),
            'classe_id' => $this->faker->numberBetween(2, 13)
        ];
    }
}
