<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_qualification extends Model
{
    use HasFactory;

    // private $primaryKey = 'doctor_id';

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_id');
    }
}
//  WE ONLY NEED A PIVOT TABLE 
//  SO A MIGRATION WILL DO