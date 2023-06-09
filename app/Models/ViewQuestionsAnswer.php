<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewQuestionsAnswer extends Model
{
    use HasFactory;
    public function getViewQuestionsAnswers($id)
    {
        $results = $this->where('tense_id', $id)->get();
        return $results;
    }
}
