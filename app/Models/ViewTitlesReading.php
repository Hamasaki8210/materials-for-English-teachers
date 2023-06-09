<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewTitlesReading extends Model
{
    use HasFactory;
    public function getViewTitlesReadings($id)
    {
        $results = $this->where('tense_id', $id)->get();
        dd($results);
    }
}
