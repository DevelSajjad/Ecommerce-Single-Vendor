@extends('frontend.master')

@section('content')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    @include('user.include.sidebar')
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...!!</span><strong class="text-warning">{{ Auth::user()->name; }}</strong> Update Your Profile</h3>
                        <div class="card-body">
                            <form action="{{ route('change-password') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input type="password" name="oldPassword"  class="form-control">
                                    @error('oldPassword')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" name="newPassword"  class="form-control">
                                    @error('newPassword')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="confirmPassword"  class="form-control">
                                    @error('confirmPassword')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
