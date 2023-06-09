<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPractice extends Model
{
    use HasFactory;
    public function getViewPractices($id)
    {
        $results = $this->where('tense_id', $id)->get();
        return $results;
    }
}
