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
            "practice" => "How was the weather when you woke up today? After having breakfast, what do you usually do? Last time you went to the park, what did you do? Where is the last park you went to? What is the last book you read? Where did you eat lunch yesterday? What was the most recent thing you ordered at a cafe? Did you sit inside or outside the last time you went to a cafe?",
            "answer" => "The weather was bright and sunny when Emily woke up. After having breakfast, Emily went to the park. Emily saw a group of children playing ball. Emily decided to sit down under a tree. After she sat down, Emily began reading her book. Emily went to a nearby cafe for lunch. Emily ordered a sandwich and some tea at the cafe. Emily decided to eat inside the cafe from now on because a giant bird flew down and took her sandwich.",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
        ],[
            "title" => "Tim's Busy Day",
            "reading" => "There is a boy named Tim who lives in a small <b>village</b>. He wakes up early every morning and goes to school. Today, he has a <b>science</b> test, and he feels excited about it. During the test, he carefully reads the questions and writes his answers. He finishes before everyone else and feels <b>confident</b> about his <b>performance</b>. After school, he goes to the park to play soccer with his friends. They have a lot of fun, and Tim even scores a goal! When he gets home, his mom makes his favorite dinner, spaghetti. He eats quickly because he wants to finish his homework before bedtime. Tim feels tired but happy after a <b>productive</b> day.",
            "vocabulary" => "Village: A small group of houses in the countryside. Confident: Feeling sure or certain about something. Productive: Doing things that are useful or helpful. Science: The study of nature and the world around us. Performance: Results.",
            "question" => "What does Tim do during the test? How does Tim feel after finishing the test? What does Tim do after school? What game do Tim and his friends play at the park? Why does Tim eat quickly? How does Tim feel after finishing his homework?",
            "practice" => "Do you usually wake up early in the morning like Tim? How do you feel when you have a test at school? Do you carefully read the practices during a test like Tim does? How do you feel when you finish a test before everyone else? Do you like to play sports with your friends after school like Tim does? What is your favorite game to play with your friends? What is your favorite food that your mom makes for dinner? How do you feel after finishing your homework?",
            "answer" => "Tim wakes up early every morning and goes to school. Tim feels excited about his science test. During the test, Tim carefully reads the questions and writes his answers. Tim feels confident about his performance after finishing the test. After school, Tim goes to the park to play soccer with his friends. Tim and his friends play soccer at the park. Tim's mom makes his favorite dinner, spaghetti. Tim eats quickly because he wants to finish his homework before bedtime. Tim feels tired but happy after finishing his homework. Tim feels productive and happy at the end of the day.",
            "updated_at" => Carbon::now(),
            "created_at" => Carbon::now()
        ]);
    }
}
