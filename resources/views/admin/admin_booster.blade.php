@extends('admin.admin_master')
@section('admin')
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
            <div class="sidebar-brand-icon rotate-n-0">
                <i class="fas fa-user-lock"></i>
            </div>
            <div class="sidebar-brand-text mx-3">OGService Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>


        <!-- Nav Item - Charts -->
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.customer')}}">
                <i class="fas fa-fw fa-users"></i>
                <span>Customer</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.booster')}}">
                <i class="fas fa-fw fa-user-circle"></i>
                <span>Boosters</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                {{--            <form--}}
                {{--                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
                {{--                <div class="input-group">--}}
                {{--                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."--}}
                {{--                           aria-label="Search" aria-describedby="basic-addon2">--}}
                {{--                    <div class="input-group-append">--}}
                {{--                        <button class="btn btn-primary" type="button">--}}
                {{--                            <i class="fas fa-search fa-sm"></i>--}}
                {{--                        </button>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </form>--}}

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    {{--                <li class="nav-item dropdown no-arrow d-sm-none">--}}
                    {{--                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"--}}
                    {{--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                        <i class="fas fa-search fa-fw"></i>--}}
                    {{--                    </a>--}}
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                         aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                       placeholder="Search for..." aria-label="Search"
                                       aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>




                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::guard('admin')->user()->name}}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('dashb/img/undraw_profile.svg')}}" alt="profile_pic"/>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            {{--                        <a class="dropdown-item" href="#">--}}
                            {{--                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                            Profile--}}
                            {{--                        </a>--}}
                            <a class="dropdown-item">
                                {{Auth::guard('admin')->user()->email}}
                            </a>
                            {{--                        <a class="dropdown-item" href="#">--}}
                            {{--                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                            Settings--}}
                            {{--                        </a>--}}
                            {{--                        <a class="dropdown-item" href="#">--}}
                            {{--                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                            Activity Log--}}
                            {{--                        </a>--}}
                            {{--                        <div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @if(Session::has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                {{--            <h3>Login Admin Name: {{Auth::guard('admin')->user()->name}} </h3>--}}
                {{--                <h4>Login Admin Email: {{Auth::guard('admin')->user()->email}} </h4>--}}


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Booster</h1>
                    <p class="mb-4">Manage Booster Data with Advanced Admin Controls </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Booster</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" >
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($booster as $boosters)
                                        <tr>

                                            <td>{{ $boosters->id }}</td>
                                            <td>{{ $boosters->name }}</td>
                                            <td>{{ $boosters->email }}</td>
                                            <td>{{ $boosters->password }}</td>
                                            <td>{{ $boosters->created_at }}</td>
                                            <td>
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn-block btn-primary " type="submit"><i class="far fa-edit"> Edit</i></button>
                                                </form>
                                                {{--                                           <a href=""><i class="far fa-edit"> Edit</i></a>--}}
                                            </td>
                                            <td>
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-block btn-danger" type="submit"> <i class="fas fa-times-circle">Delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>


            <!-- /.container-fluid -->
        </div>



            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto" style="padding-top: 20%">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Online Gaming Service 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
    </div>
        <!-- End of Content Wrapper -->
@endsection
