<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph,
            'duration' =>  "0" . rand(0, 1) . ":" . rand(0, 59) . ":00",
            'course_id' => Course::factory(),
            'video_id' => '532666360',
            'order' => rand(1, 100),
            'access' => collect(['free', 'free_logged', 'paid'])->random(),
        ];
    }
}
