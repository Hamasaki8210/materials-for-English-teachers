<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrammarTense;
use Carbon\Carbon;

class GrammarTensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["tense" => "Past Perfect Progressive", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Past Perfect", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Past Progressive", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Simple Past", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Present Perfect Progressive ", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Present Perfect", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Present Progressive", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Simple Present", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Future Perfect Progressive", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Future Perfect", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Future Progressive", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["tense" => "Simple Future", "updated_at" => Carbon::now(),"created_at" => Carbon::now()]
        ];

        GrammarTense::insert($params);
    }
}
