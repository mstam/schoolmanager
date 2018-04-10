@extends('courses.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course #{{ $course->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
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
                <strong>Title:</strong>
                <p>{{ $course->title }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Course day:</strong>
                <p>{{ $course->course_day }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Duration:</strong>
                <p>{{ $course->duration }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Teachers:</strong>
                 @if ($course->teachers())
                    <ul>
                      @foreach ($course->teachers as $teacher)
                          <li>{{ $teacher->name }}</li>
                      @endforeach
                    </ul>
                 @else
                    <span>None</span>
                 @endif
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Students:</strong>
                 @if ($course->students())
                    <ul>
                      @foreach ($course->students as $student)
                          <li>{{ $student->name }}</li>
                      @endforeach
                    </ul>
                 @else
                    <span>None</span>
                 @endif
            </div>

        </div>

@endsection
