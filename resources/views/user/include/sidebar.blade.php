<div class="col-sm-6">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <img class="card-img-top" style="border-radius: 50%" src="{{ asset(Auth::user()->image) }}"
                alt="Card image cap" height="40%" width="100%" alt="Profile Image">

        </div>
        <ul class="list-group list-group-flush">
            <a href="{{ route('user.dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
            <a href="{{ route('order-list') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>
            <a href="{{ route('return-order-list') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>
            <a href="{{ route('cancel-order-list') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>
            <a href="{{ route('user-image') }}" class="btn btn-primary btn-sm btn-block">Update Image</a>
            <a href="{{ route('update-password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm btn-block">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </ul>
    </div>
</div>
