<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								
    <!-- Review Listing -->
    <div class="widget review-listing">
        <ul class="comments-list">
        
            <!-- Comment List -->
        @foreach($reviews as $review)
            <li>
                <div class="comment">
                    <img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ (asset($review->patient->profile ? $review->patient->profile : '')) }}">
                    <div class="comment-body">
                        <div class="meta-data">
                            <span class="comment-author">{{ $review->patient->firstname . ' ' . $review->patient->lastname }}</span>
                            <span class="comment-date">{{ $review->created_at }}</span>
                            <div class="review-count rating">
                                @php 
                                    $rating = $review->rating;
                                    $unfilled_star = 5 - $rating;
                                @endphp
                                @for($i = 0; $i < $rating; $i++)
                                    <i class="fas fa-star filled"></i>
                                @endfor
                                @if($unfilled_star != 0)
                                    @for($j = 0; $j < $unfilled_star; $j++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                @endif
                            </div>
                        </div>
                        <p class="recommended"><i class="far fa-thumbs-up"></i>{{ $review->title }}</p>
                        <p class="comment-content">{{ $review->content }}</p>
                        <div class="comment-reply">
                            {{-- Check if this user is the creator of the review --}}
                            @if($review->patient->id === Auth::id())
                                <a class="comment-btn" href="#">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                                <a class="comment-btn" href="#">
                                    <i class="fa fa-pen"></i> Edit
                                </a>
                            @else
                                <p class="recommend-btn">
                                    <span>Recommend?</span>
                                    <a href="#" class="like-btn">
                                        <i class="far fa-thumbs-up"></i> Yes
                                    </a>
                                    <a href="#" class="dislike-btn">
                                        <i class="far fa-thumbs-down"></i> No
                                    </a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- Comment Reply -->
                {{-- <ul class="comments-reply">
                    <li>
                        <div class="comment">
                            <img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ asset('assets/img/patients/patient1.jpg') }}">
                            <div class="comment-body">
                                <div class="meta-data">
                                    <span class="comment-author">Charlene Reed</span>
                                    <span class="comment-date">Reviewed 3 Days ago</span>
                                    <div class="review-count rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="comment-content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam.
                                    Curabitur non nulla sit amet nisl tempus
                                </p>
                                <div class="comment-reply">
                                    <a class="comment-btn" href="#">
                                        <i class="fas fa-reply"></i> Reply
                                    </a>
                                    <p class="recommend-btn">
                                        <span>Recommend?</span>
                                        <a href="#" class="like-btn">
                                            <i class="far fa-thumbs-up"></i> Yes
                                        </a>
                                        <a href="#" class="dislike-btn">
                                            <i class="far fa-thumbs-down"></i> No
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul> --}}
                <!-- /Comment Reply -->
                
            </li>
        @endforeach
            <!-- /Comment List -->
            
            <!-- Comment List -->
            {{-- @foreach($doctor->reviews as $review)
                <li>
                    <div class="comment">
                        <img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ $patient_profile }}">
                        <div class="comment-body">
                            <div class="meta-data">
                                <span class="comment-author">{{ $patient_fullname }}</span>
                                <span class="comment-date">Reviewed 4 Days ago</span>
                                <div class="review-count rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="comment-content">{{ $review->content }}</p>
                            <div class="comment-reply">
                                <a class="comment-btn" href="#">
                                    <i class="fas fa-reply"></i> Reply
                                </a>
                                <p class="recommend-btn">
                                    <span>Recommend?</span>
                                    <a href="#" class="like-btn">
                                        <i class="far fa-thumbs-up"></i> Yes
                                    </a>
                                    <a href="#" class="dislike-btn">
                                        <i class="far fa-thumbs-down"></i> No
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach --}}
            <!-- /Comment List -->
            
        </ul>
        
        <!-- Show All -->
        <div class="all-feedback text-center">
            <a href="#" class="btn btn-primary btn-sm">
                Show all feedback <strong>(167)</strong>
            </a>
        </div>
        <!-- /Show All -->
        
    </div>
    <!-- /Review Listing -->

    <!-- Write Review -->
    <div class="write-review">
        <h4>Write a review for <strong>Dr. {{ $doctor->firstname . ' ' . $doctor->lastname }}</strong></h4>
        
        <!-- Write Review Form -->
        <form id="review-form">
            {{-- @csrf --}}
            {{-- Not needed here, use meta tag --}}
            <div class="form-group">
                {{-- Success message - Hidden by default --}}
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    <strong id="success-msg"></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- Error message - Hidden by default --}}
                <div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none">
                    <strong id="error-msg"></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- END OF AJAX MESSAGES --}}
                <label>Review</label>
                <div class="star-rating">
                    <input id="star-5" type="radio" name="rating" value="5">
                    <label for="star-5" title="5 stars">
                        <i class="active fa fa-star"></i>
                    </label>
                    <input id="star-4" type="radio" name="rating" value="4">
                    <label for="star-4" title="4 stars">
                        <i class="active fa fa-star"></i>
                    </label>
                    <input id="star-3" type="radio" name="rating" value="3">
                    <label for="star-3" title="3 stars">
                        <i class="active fa fa-star"></i>
                    </label>
                    <input id="star-2" type="radio" name="rating" value="2">
                    <label for="star-2" title="2 stars">
                        <i class="active fa fa-star"></i>
                    </label>
                    <input id="star-1" type="radio" name="rating" value="1">
                    <label for="star-1" title="1 star">
                        <i class="active fa fa-star"></i>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label>Title of your review</label>
                    <input id="title" name="title" class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
                </div>
                <label>Your review</label>
                <textarea id="review_desc" maxlength="100" class="form-control" required></textarea>
                <code id="error"></code>
              <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
            </div>
            <hr>
            <div class="form-group">
                <div class="terms-accept">
                    <div class="custom-checkbox">
                       <input type="checkbox" id="terms_accept">
                       <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                    </div>
                </div>
            </div>
            <div class="submit-section">
                <button type="submit" id="review-btn" class="btn btn-primary submit-btn">Add Review</button>
            </div>
        </form>
        <!-- /Write Review Form -->
        
    </div>
    <!-- /Write Review -->

</div>