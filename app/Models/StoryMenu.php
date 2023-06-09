<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryMenu extends Model
{
    use HasFactory;
    public function getMenus()
    {
        return $this->all();
    }
}
