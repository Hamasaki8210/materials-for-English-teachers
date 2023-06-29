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
    public function updateWorkArticleVisilibity($db_column_name, $article_id, $isCheckedForDb)
    {
        $visibility = $this->where('article_id', $article_id)
            ->update(
                [
                    $db_column_name => $isCheckedForDb
                ]
            );
    }
}
