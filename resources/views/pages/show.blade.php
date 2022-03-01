 @extends('layouts.admin_layout')
 @section('content')
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">All Users</h1>
                <a href="{{route('user.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Add User</a>
            </div>

            <!-- Content Row -->
            <div class="row">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">email</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if (count($admin) > 0)
                            @foreach ($admin as $admin)
                            <tr>
                                <th scope="row">{{$admin->id}}</th> 
                                <td>{{$admin->first_name}}</td>
                                <td>{{$admin->last_name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                  <a href="{{route('user.edit',$admin->id)}}" class="btn btn-primary">Edit</a>
                                  <form action="{{route('user.destroy',$admin->id)}}"  method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" value="delete">Delete</button>
                                </form>
                                </td>
                              </tr>
                            @endforeach
                          @endif
                      </tbody>
                </table>
                <a href="" class="btn btn-primary" value="">Add User</a>
            </div>     
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

 @endsection
 
   