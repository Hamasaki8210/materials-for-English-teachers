<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryTitle;
use Carbon\Carbon;

class StoryTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["title" => "Emily's Busy Day","article_id" => 1, "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["title" => "Tim's Busy Day","article_id" => 2, "updated_at" => Carbon::now(),"created_at" => Carbon::now()]
        ];

        StoryTitle::insert($params);
    }
}
