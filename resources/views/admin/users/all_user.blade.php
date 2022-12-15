@extends('admin.master')
@section('body')
     <!-- ########## START: MAIN PANEL ########## -->
     <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">GramMela</a>
          <span class="breadcrumb-item active">All Users</span>
        </nav>

        <div class="sl-pagebody">
          <div class="row row-sm">
            <div class="col-md-12">
              <div class="card">
                  {{-- @php
                      $online_user = 0;
                  @endphp
                  @foreach ($users as $row)
                  @php
                      if($row->userIsOnline()){
                        $online_user = $online_user + 1;
                      }
                  @endphp
                  @endforeach
                <div class="card-header"> Total Users {{ count($users) }}
                    and Active Users <span class="badge badge-pill badge-success">{{ $online_user }} </span>

                </div> --}}
                <div class="card-body">
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">Image</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-20p">Phone</th>
                            <th class="wd-10p">Online/Offline</th>
                            <th class="wd-10p">Account</th>
                            <th class="wd-15p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                          <tr>
                            <td>
                                <img src="{{ asset($user->image) }}" alt="" height="60px;" width="60px;">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                {{-- @if ($user->userIsOnline()) --}}
                                    <span class="badge badge-pill badge-success">Active Now</span>
                                {{-- @else --}}
                                    {{-- <span class="badge badge-pill badge-danger">{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span> --}}
                                {{-- @endif --}}
                            </td>
                            {{-- <td>
                                @if ($user->isban == 0)
                                    <span class="badge badge-pill badge-primary">Unbanned</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Banned</span>
                                @endif
                            </td> --}}
                            {{-- <td>
                            @if ($user->isban == 0)
                            <a href="{{ url('admin/user-banned/'.$user->id) }}" class="btn btn-sm btn-danger" title="view data"> <i class="fa fa-arrow-down"></i> Banned</a>
                            @else
                              <a href="{{ url('admin/user-unbanned/'.$user->id) }}" class="btn btn-sm btn-primary" title="view data"> <i class="fa fa-arrow-up"></i> Unbanned</a>
                            @endif
                            </td> --}}
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div><!-- table-wrapper -->
              </div>
              </div><!-- card -->
            </div>
          </div>
        </div>
    </div>
@endsection