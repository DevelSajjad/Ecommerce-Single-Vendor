@extends('admin.master')
@section('body')

        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    <div class="sl-pagebody">
        <div class="row">
                        {{-- ////// Side Bar --}}
                            <div class="col-sm-6">
                                @include('admin.include.sidebar')
                            </div>
                        {{-- //////End Side Bar --}}
                        <div class="col-sm-6">
                            <div class="card">
                                <h3 class="text-center"><span class="text-danger">Hi...!!</span><strong class="text-warning">{{ Auth::user()->name; }}</strong> Update Your Profile</h3>
                                <div class="card-body">
                                    <form action="{{ route('admin.update.profile') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                                            @error('name')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                                            @error('email')
                                               <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
                                            @error('phone')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div>
    </div>

@endsection
