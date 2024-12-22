@extends('admin.layouts-admin.admin')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page">Create Calendar Course</li>

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
                                <form class="row g-3" action="{{ route('store-calendar') }}" method="POST">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Course Name</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Course Name"
                                               name="course_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail44" class="form-label">Day</label>
                                        <select class="form-select " name="day">
                                            <option value="">Default select</option>
                                            <option value="sunday">Sunday</option>
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                            <option value="saturday">Saturday</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail43" class="form-label">Time</label>
                                        <input type="time" class="form-control" id="inputEmail43" placeholder="Email"
                                               name="time">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Instructor</label>
                                        <input type="text" class="form-control" id="inputPassword4" name="instructor">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                               placeholder="1234 Main St" name="description">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword443" class="form-label">Course Duration</label>
                                        <input type="text" class="form-control" id="inputPassword443" name="course_duration">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword41" class="form-label">Course Link</label>
                                        <input type="text" class="form-control" id="inputPassword41" name="course_link">
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
