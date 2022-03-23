<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Course about ' . collect(['laravel', 'vuejs', 'livewire', 'php', 'nuxt.js', 'tailwindcss'])->random(),
            'description' => $this->faker->paragraph,
            'under_development' => collect([true, false])->random()
        ];
    }
}
