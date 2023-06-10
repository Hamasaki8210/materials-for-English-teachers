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

        $this->call(StoryTitlesSeeder::class);
        $this->call(StoryReadingsSeeder::class);
        $this->call(StoryVocabulariesSeeder::class);
        $this->call(StoryQuestionsSeeder::class);
        $this->call(StoryPracticesSeeder::class);
        $this->call(StoryAnswersSeeder::class);
        $this->call(GrammarTensesSeeder::class);
        $this->call(StoryArticlesSeeder::class);
        $this->call(StoryMenuSeeder::class);

    }
}
