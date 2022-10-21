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
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <img class="card-img-top" style="border-radius: 50%" src="{{ asset('fontend/media/h.jpg') }}"
                                alt="Card image cap" height="40%" width="100%" alt="Profile Image">

                        </div>
                        <ul class="list-group list-group-flush">
                            <a href="#" class="btn btn-primary btn-sm btn-block">Home</a>
                            <a href="#" class="btn btn-primary btn-sm btn-block">Home</a>
                            <a href="#" class="btn btn-primary btn-sm btn-block">Home</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm btn-block">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf

                            </form>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h3 class="text-center"><span class="text-danger">Hi...!!</span><strong class="text-warning">{{ Auth::user()->name; }}</strong> Update Your Profile</h3>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
