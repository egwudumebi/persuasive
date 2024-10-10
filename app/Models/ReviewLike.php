<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewLike extends Model
{
    protected $fillable = ['review_id', 'patient_id', 'type'];
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
    public function Patient() 
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function review()
    {
        return $this->belongsTo(Review::class, 'review_id');
    }
}
