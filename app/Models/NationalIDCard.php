<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalIDCard extends Model
{
    use HasFactory;

    public function birthRecord()
    {
        return $this->belongsTo(Birth::class);
    }
}
