<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoryMenu;
use Carbon\Carbon;

class StoryMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["menu" => "reading", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "vocabulary", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "question", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "practice", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "answer", "updated_at" => Carbon::now(),"created_at" => Carbon::now()]
        ];

        StoryMenu::insert($params);
    }
}
