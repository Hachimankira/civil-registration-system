<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'gender',
        'dateOfBirth',
        'placeOfBirth',
        'district',
        'city',
        'ward_no',
        'province_no',
        'fatherFName',
        'fatherLName',
        'permanentFAddress',
        'id_no1',
        'FOccupation',
        'email',
        'phoneNumber',
        'motherFName',
        'motherLName',
        'permanentMAddress',
        'id_no2',
        'MOccupation',
        'status'
    ];
    public function nationalID()
    {
        return $this->hasOne(NationalIDCard::class);
    }
    public function voterCard()
    {
        return $this->hasOne(VoterCard::class);
    }
    public function death()
    {
        return $this->hasOne(Death::class);
    }
}
