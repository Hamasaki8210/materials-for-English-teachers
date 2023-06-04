<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryTitle extends Model
{
    use HasFactory;

    public function getTitlesForStoryPage($id)
    {
        $target_story_title = $this->where('id', $id)->get();
        dd($target_story_title[0]->title);
    }
}
