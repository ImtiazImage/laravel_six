@extends('welcome')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('frontend/img/about-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <h1>This is Display Posts page</h1>
                <span class="subheading">This is what I do.</span>
            </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">
            
                <a href="{{ route('student') }}" class="btn btn-danger"> Add Student </a>
                <hr />

                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Student Name</th>
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $std)
                    <tr>
                        <td>{{$std->id}}</td>
                        <td>{{$std->name}}</td>
                        <td>{{$std->email}}</td>
                        <td>{{$std->phone}}</td>
                        <td>
                            <a href="{{URL::to('edit-student/'.$std->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{URL::to('delete-student/'.$std->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a>
                            <a href="{{URL::to('view-single-studnet/'.$std->id)}}" class="btn btn-sm btn-success">View</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection