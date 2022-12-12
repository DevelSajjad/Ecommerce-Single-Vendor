@extends('frontend.master')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row text-center">
				<!-- Sign-in -->
<div class="col-md-12 col-sm-12 sign-in">
		@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif
	<h4 class="text-center " style="font-weight: 900; font-size: 30px">Forget Password</h4>
	<form action="{{ route('password.email') }}" method="POST" class="register-form outer-top-xs" role="form">
        @csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input  type="email" name="email" placeholder="Email" value="{{ old('email') }}" style="text-align: center;" class=" form-control unicase-form-control text-input" id="exampleInputEmail1" >

             @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>
	  	<button type="submit" class="btn-upper btn btn-success checkout-page-button">Send Password Reset Link</button>
	</form>
</div>
<!-- Sign-in -->

	</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection



