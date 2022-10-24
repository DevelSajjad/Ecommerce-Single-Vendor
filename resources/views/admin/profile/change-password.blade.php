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
                                    <form action="{{ route('admin-update-password') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Old Password</label>
                                            <input type="password" name="oldPassword"  class="form-control" placeholder="Old Password">
                                            @error('oldPassword')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">New Password</label>
                                            <input type="password" name="newPassword"  class="form-control" placeholder="New Password">
                                            @error('newPassword')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="confirmPassword"  class="form-control" placeholder="Confirm Password">
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

@endsection
