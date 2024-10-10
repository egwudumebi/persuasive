<?php

namespace App\Policies;

use App\Models\Patient;
use App\Models\Review;
use Illuminate\Auth\Access\Response;

class ReviewPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(Patient $patient, Review $review): bool
    {
        return $patient->id === $review->patient_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Patient $patient, Review $review): bool
    {
        return $patient->id === $review->patient_id;
    }

}
