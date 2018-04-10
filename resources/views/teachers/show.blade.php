@extends('teachers.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teacher #{{ $teacher->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Name:</strong>
                <p>{{ $teacher->name }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Age:</strong>
                <p>{{ $teacher->age }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Email:</strong>
                <p>{{ $teacher->email }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Courses:</strong>
                 @if ($teacher->courses())
                    <ul>
                      @foreach ($teacher->courses as $course)
                          <li>{{ $course->title }}</li>
                      @endforeach
                    </ul>
                 @endif
            </div>
        </div>

@endsection
