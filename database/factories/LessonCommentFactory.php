<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\User;
use App\Models\LessonComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LessonComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'lesson_id' => Lesson::factory(),
            'body' => $this->faker->paragraph,
        ];
    }
}
