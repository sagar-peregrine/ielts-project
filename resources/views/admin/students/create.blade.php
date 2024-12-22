@extends('admin.layouts-admin.admin')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page">Create Student</li>

                        </ol>

                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <div class="row">

                    <div id="flLoginForm" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">

                            </div>
                            <div class="widget-content widget-content-area">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="row g-3" action="{{ route('store-student') }}" method="POST">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name"
                                               name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail44" class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" id="inputEmail44"
                                               placeholder="Contact Number" name="contact_number">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail43" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail43" placeholder="Email"
                                               name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" name="password">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                               placeholder="1234 Main St" name="address">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent

@endsection
