<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryArticle;
use Carbon\Carbon;

class StoryArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["tense_id" => 1, "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense_id" => 1, "updated_at" => Carbon::now(),"created_at" => Carbon::now()]
        ];

        StoryArticle::insert($params);
    }
}
