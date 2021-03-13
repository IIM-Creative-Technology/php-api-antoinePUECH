<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'note' => $this->faker->numberBetween(0, 20),
            'student_id' => $this->faker->numberBetween(1, 240),
            'subject_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
