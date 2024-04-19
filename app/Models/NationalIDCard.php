<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalIDCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'birth_id',
        'gender',
        'dateOfBirth',
        'permanentAddress',
        'currentAddress',
        'issuedPlace',
        'fatherFName',
        'fatherLName',
        'permanentFAddress',
        'id_no1',
        
    ];

    public function birthRecord()
    {
        return $this->belongsTo(Birth::class);
    }
}
