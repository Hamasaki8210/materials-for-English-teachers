<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrammarStoryMenu;
use Carbon\Carbon;

class GrammarStoryMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $params = [
            ["menu" => "Reading","updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "Vocabulary","updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "Questions","updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "Practice","updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["menu" => "Answers","updated_at" => Carbon::now(),"created_at" => Carbon::now()]
        ];

        GrammarStoryMenu::insert($params);
    }
}
