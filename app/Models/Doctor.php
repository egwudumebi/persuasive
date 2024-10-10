<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Models\Qualification;

class Doctor extends Authenticatable
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Belongs to this table
    protected $table = 'doctors';
//     protected $casts = [
//     'edu_qualification' => 'array',
//     'specialization' => 'array',
// ];


    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'profile',
        'password',
        'about_me',
        'edu_qualification',
        'specialization',
        'gender',
        'dob', // Date of Birth
        'address',
        'city',
        'state',
        'country',
        'status',
    ];

    public function qualifications()
    {
        return $this->belongsToMany(
            Qualification::class,
            'doctor_qualification',
            'doctor_id',
            'qualification_id',
        );
    }
    public function specializations()
    {
        return $this->belongsToMany(
            Specialization::class, // The related model class name
            'doctor_specialization', // The name of the pivot table
            'doctor_id', // THe foreign key name of the current model
            'specialization_id', // The foreign key name of the related model
        );
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'doctor_id');
    }


}
