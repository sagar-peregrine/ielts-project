@extends('admin.layouts-admin.admin')
@section('content')

    <div id="content" class="main-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Calendar Course</li>
                        </ol>
                        <a type="submit" href="{{route('create-calendar')}}"  class="btn btn-primary mt-3">Add New</a>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <div class="row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Calendar</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Day</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Instructor</th>
                                            <th class="text-center" scope="col">Description</th>
                                            <th class="text-center" scope="col">Course Duration</th>
                                            <th class="text-center" scope="col">Course Link</th>
                                            <th class="text-center" scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $user)
                                            <tr>
                                                <td>{{ $user->course_name }}</td>
                                                <td>{{ $user->day }}</td>
                                                <td>{{ $user->time }}</td>
                                                <td>{{ $user->instructor }}</td>
                                                <td class="text-center">{{ $user->description }}</td>
                                                <td>{{ $user->course_duration }}</td>
                                                <td>{{ $user->course_link }}</td>
                                                <td class="text-center">
                                                    <!-- Edit Action -->
                                                    <a href="{{ route('edit-calendar', $user->id) }}" class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>

                                                    <!-- Delete Action -->
                                                    <form action="{{ route('delete-calendar', $user->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this contact?');">
                                                            Delete
                                                        </button>
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
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
@endsection
