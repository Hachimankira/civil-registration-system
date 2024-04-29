<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'birth_id',
        'gender',
        'permanentAddress',
        'dateOfBirth',
        'dateOfDeath',
        'cause',      
    ];
    public function birthRecord()
    {
        return $this->belongsTo(Birth::class);
    }
}
