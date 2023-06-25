<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkArticleVisibility extends Model
{
    use HasFactory;

    public function setVisibility($id)
    {
        $article_id = "1";
        $article = "1";
        $reading_bold = "0";
        $reading_session = "1";
        $vocab_session = "1";
        $question_session = "1";
        $practice_session = "1";
        $answer_session = "1";

        $this->setAttribute('article_id', $article_id);

        $this->save();
    }
}
