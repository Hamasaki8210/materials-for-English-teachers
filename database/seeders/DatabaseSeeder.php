<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(StoryTitlesSeeder::class);
        $this->call(StoryReadingsSeeder::class);
        $this->call(StoryVocabulariesSeeder::class);
        $this->call(StoryQuestionsSeeder::class);
        $this->call(StoryPracticesSeeder::class);
        $this->call(StoryAnswersSeeder::class);

    }
}
