
@extends('frontend.master')

@section('title')
    Review
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class='active'>My Review</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-3 col-sm-3">
                    @include('user.include.sidebar')
                </div>
                <div class="col-md-9 col-sm-9">
                    
                            <div class="col-md-10 text-center">
                                <div class="product-add-review">
                                    <h4 class="title">Write your own review</h4>
                                    <div class="review-table">
                                        <div class="table-responsive">
                                            <form action="{{ route('review') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $id }}">
                                                <table class="table">	
                                                    <thead>
                                                        <tr>
                                                            <th class="cell-label">&nbsp;</th>
                                                            <th>1 star</th>
                                                            <th>2 stars</th>
                                                            <th>3 stars</th>
                                                            <th>4 stars</th>
                                                            <th>5 stars</th>
                                                        </tr>
                                                    </thead>	
                                                    <tbody>
                                                        <tr>
                                                            <td class="cell-label">Rating</td>
                                                            <td><input type="radio" name="rating" class="radio" value="1"></td>
                                                            <td><input type="radio" name="rating" class="radio" value="2"></td>
                                                            <td><input type="radio" name="rating" class="radio" value="3"></td>
                                                            <td><input type="radio" name="rating" class="radio" value="4"></td>
                                                            <td><input type="radio" name="rating" class="radio" value="5"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                    
                                    <div class="review-form">
                                        <div class="form-container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                            <textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                        </div><!-- /.form-group -->
                                                    </div>
                                                </div><!-- /.row -->
                                                
                                                <div class="action text-right">
                                                    <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                </div><!-- /.action -->
                                
                                            </form><!-- /.cnt-form --> <br>
                                            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
                                        </div><!-- /.form-container -->
                                    </div><!-- /.review-form -->
                                
                                </div><!-- /.product-add-review -->	
                            </div>
                      
                </div>
            </div>
        </div>
    </div>
@endsection
