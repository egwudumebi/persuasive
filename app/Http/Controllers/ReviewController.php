<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\ReviewFormRequest;
use App\Models\Review;
use App\Models\ReviewLike;
use App\Traits\Deletable;
use App\Traits\Editable;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Create Review
    public function createReview(ReviewFormRequest $request)
    {
        try{
            $review = Review::create([
                'doctor_id' => $request->doctor_id,
                'patient_id' => $request->patient_id,
                'title' => $request->title,
                'content' => $request->content,
                'rating' => $request->rating,
            ]);

            if ($review) {
                return response()->json([
                    'success' => true,
                    'message' => 'Review created successfully.',
                    'data' => $review,
                ], 200);
            }else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to create review.',
                ], 500);
            }

        } catch (ValidationException $e){
            return back()->withErrors($e->validator->errors());
        }
        
        
    }

    // Process 'Likes' and 'Dislikes'
    public function like(Request $request, $review_id)
    {
        $patient_id = Auth::id();
        $review = Review::findOrFail($review_id);

        // Check if the patient has already liked
        $existing_like = ReviewLike::where('review_id', $review_id)
                                  ->where('patient_id', $patient_id)
                                  ->first();

        if ($existing_like) {
            if ($existing_like->type === 'like') {
                // Already liked, so we remove the like
                $existing_like->delete();
                $review->decrement('likes');
            } else {
                // Previously disliked, switch to like
                $existing_like->update(['type' => 'like']);
                $review->increment('likes');
                $review->decrement('dislikes');
            }
        } else {
            // New like
            ReviewLike::create([
                'review_id' => $review_id, 
                'patient_id' => $patient_id, 
                'type' => 'like',
            ]);
            $review->increment('likes');
        }

        return back();
    }

    public function dislike(Request $request, $review_id)
    {
        $patient_id = Auth::id();
        $review = Review::findOrFail($review_id);

        // Check if the patient has already liked or disliked
        $existing_like = ReviewLike::where('review_id', $review_id)
                                  ->where('patient_id', $patient_id)
                                  ->first();

        if ($existing_like) {
            if ($existing_like->type === 'dislike') {
                // Already disliked, so we remove the dislike
                $existing_like->delete();
                $review->decrement('dislikes');
            } else {
                // Previously liked, switch to dislike
                $existing_like->update(['type' => 'dislike']);
                $review->increment('dislikes');
                $review->decrement('likes');
            }
        } else {
            // New dislike
            ReviewLike::create([
                'review_id' => $review_id, 
                'patient_id' => $patient_id, 
                'type' => 'dislike',
            ]);
            $review->increment('dislikes');
        }

        return back();
    }

    use Deletable;
    public function delete(Request $request, $model, $id)
    {
        // Convert model name to full model class path if needed
        $modelClass = 'App\\Models\\' . ucfirst($model);

        return $this->deleteRecord($modelClass, $id);
    }

    use Editable;
    public function edit(ReviewFormRequest $request, $model, $id)
    {
        // Convert model name to full model class path if needed
        $modelClass = 'App\\Models\\' . ucfirst($model);

        return $this->deleteRecord($modelClass, $id);
    }
}
