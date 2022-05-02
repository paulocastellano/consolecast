<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonComment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CountriesSeeder::class);

        Course::factory()
            ->count(16)
            ->hasTopics(1)
            ->hasLessons(20)
            ->create();

        User::factory()->count(50)->create();

        $lessons = Lesson::all();

        foreach ($lessons as $lesson) {
            for ($i = 0; $i < 10; $i++) {

                LessonComment::factory()->create([
                    'lesson_id' => $lesson->id,
                    'user_id' => User::all()->random()->id
                ]);
            }
        }
    }
}
