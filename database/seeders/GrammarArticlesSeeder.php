<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrammarArticle;
use Carbon\Carbon;


class GrammarArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrammarArticle::create([
            "title" => "Emily's Busy Day",
            "reading" => "Emily woke up to a bright, sunny day. She got dressed, had breakfast and <b>headed</b> out to the park. She <b>strolled</b> along the path and noticed a group of children playing ball. She smiled and continued walking until she found a quiet spot under a tree. She sat down and began reading her book. <b>Time flew by</b> quickly, and soon after, it was lunchtime. Emily packed up her things and headed to a nearby cafe. She ordered a sandwich and some tea. She sat outside in the warm sun and started eating. Suddenly, a <b>giant</b> bird flew down and took her sandwich! She was very surprised and <b>scared</b>. She decided to eat inside the cafe from now on.",
            "vocabulary" => "To head: To go somewhere. To stroll: to go for a walk. Time flew by: Time quickly passed. Giant: very big. Scared: to feel fear.",
            "question" => "How was the weather when Emily woke up? Where did Emily go after having breakfast? Who did Emily see playing ball? Where did Emily decide to sit down? What did Emily do after she sat down? Where did Emily go for lunch? What did Emily order at the cafe? Why did Emily decide to eat inside the cafe from now on?",
            "practice" => "How was the weather when you woke up today?\r\nAfter having breakfast, what do you usually do?\r\nLast time you went to the park, what did you do?\r\nWhere is the last park you went to?\r\nWhat is the last book you read?\r\nWhere did you eat lunch yesterday?\r\nWhat was the most recent thing you ordered at a cafe?\r\nDid you sit inside or outside the last time you went to a cafe?\r\n",
            "answer" => "The weather was bright and sunny when Emily woke up.\r\nAfter having breakfast, Emily went to the park.\r\nEmily saw a group of children playing ball.\r\nEmily decided to sit down under a tree.\r\nAfter she sat down, Emily began reading her book.\r\nEmily went to a nearby cafe for lunch.\r\nEmily ordered a sandwich and some tea at the cafe.\r\nEmily decided to eat inside the cafe from now on because a giant bird flew down and took her sandwich.\r\n",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
        ]);
    }
}
