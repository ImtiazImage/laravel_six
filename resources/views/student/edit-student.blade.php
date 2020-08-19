@extends('welcome')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('frontend/img/about-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <h1>This is write post page</h1>
                <span class="subheading">This is what I do.</span>
            </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <a href="{{route('all.student')}}" class="btn btn-info">   All Students </a>
                <hr /><br />
                <h3>Add New Student</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{URL::to('update-student/'.$student->id)}}" method="post">
                @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Stuent Name</label>
                            <input type="text" class="form-control" value="{{$student->name}}" placeholder="Student Name" name="name" required>
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Stuent E-mail</label>
                            <input type="email" class="form-control" value="{{$student->email}}" placeholder="Student E-mail" name="email" required>
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Stuent Phone</label>
                            <input type="number" class="form-control" value="{{$student->phone}}" placeholder="Student Phone" name="phone" required>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection