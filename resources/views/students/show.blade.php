@extends('students.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student #{{ $student->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
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
                <p>{{ $student->name }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Age:</strong>
                <p>{{ $student->age }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Email:</strong>
                <p>{{ $student->email }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Courses:</strong>
                 @if ($student->courses())
                    <ul>
                      @foreach ($student->courses as $course)
                          <li>{{ $course->title }}</li>
                      @endforeach
                    </ul>
                 @endif
            </div>
        </div>

@endsection
