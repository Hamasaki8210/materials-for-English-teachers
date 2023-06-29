<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionDbMapping extends Model
{
    use HasFactory;

    // it gets column name for work table according to the given session name
    public function getMappedDbName($session_name)
    {
        // set "1" in all columns according to how many the articles area
        $results = $this->where('session_name', $session_name)->get();
        return $results;
    }
}
