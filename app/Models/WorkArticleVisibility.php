<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkArticleVisibility extends Model
{
    use HasFactory;

    public $timestamps = false;

    // initialize work_article_visibilities table
    public function setInitialVisibility($article_number)
    {

        // initialize truncating work_article_visibilities table
        $this->truncate();

        // set "1" in all columns according to how many the articles area
        $data = [];
        for ($i = 1; $i <= $article_number; $i++) {
            $data[] = [
                'article_id' => $i,
                'article' => '1',
                'reading_bold' => '1',
                'reading_session' => '1',
                'vocab_session' => '1',
                'question_session' => '1',
                'practice_session' => '1',
                'answer_session' => '1',
            ];
        }
        $this->insert($data);
    }

    // update work_artcle_visibilities table when users change the visible/invisible status
    public function updateWorkArticleVisilibity()
    {
        $article_id = "1";
        $article = "1";
        $reading_bold = "0";
        $reading_session = "0";
        $vocab_session = "0";
        $question_session = "0";
        $practice_session = "1";
        $answer_session = "1";

        $visibility = $this->where('article_id', $article_id)
            ->update(
                [
                    'article' => $article,
                    'reading_bold' => $reading_bold,
                    'reading_session' => $reading_session,
                    'vocab_session' => $vocab_session,
                    'question_session' => $question_session,
                    'practice_session' => $practice_session,
                    'answer_session' => $answer_session
                ]
            );
    }
}
