<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = ['doctor_id', 'patient_id', 'title', 'content', 'rating'];

    public function doctor() {
        $this->belongsTo(Doctor::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    // Not needed anymore
    // public function replies() {
    //     $this->hasMany(Reply::class);
    // }
    public function reviewLikes()
    {
        return $this->hasMany(ReviewLike::class);
    }
}
