<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SessionDbMapping;
use Carbon\Carbon;

class SessionDbMappingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            ["session_name" => "article", "db_column_name" => "article", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "readingvocab", "db_column_name" => "reading_bold", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "reading", "db_column_name" => "reading_session", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "vocabulary", "db_column_name" => "vocab_session", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "question", "db_column_name" => "question_session", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "practice", "db_column_name" => "practice_session", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
            ["session_name" => "answer", "db_column_name" => "answer_session", "updated_at" => Carbon::now(),"created_at" => Carbon::now()],
        ];

        SessionDbMapping::insert($params);
    }
}
