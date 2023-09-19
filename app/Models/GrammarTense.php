<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrammarTense extends Model
{
    use HasFactory;

    public function getAllGrammarTenses()
    {
        return $this->all();
    }

    public function getGrammarTense($id)
    {
        $result = $this->where('id', $id)->get();
        return $result;
    }
}
