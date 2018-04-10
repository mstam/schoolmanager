<?php

namespace App\Http\Controllers;
use App\Course;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $students = Student::latest()->paginate(5);


      return view('students.index',compact('students'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $courses = Course::all();
      return view('students.create', compact('courses'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    request()->validate([
      'name' => 'required',
      'age' => 'required|numeric',
      'email' => 'required|email',
    ]);


    $student = Student::create($request->all());

    if (isset($request->courses)){
        $student->courses()->attach($request->courses);
    }

    return redirect()->route('students.index')
                  ->with('success','Student created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function show(Student $student)
  {
       return view('students.show',compact('student'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function edit(Student $student)
  {
      $courses = Course::with('students')->get();
      return view('students.edit',compact('student', 'courses'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Student $student)
  {
      request()->validate([
       'name' => 'required',
       'age' => 'required|numeric',
       'email' => 'required|email',
      ]);


      $student->update($request->all());

      $student->courses()->sync($request->input('courses'));

      return redirect()->route('students.index')
                   ->with('success','Student updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Student  $student
   * @return \Illuminate\Http\Response
   */
  public function destroy(Student $student)
  {
    $student->delete();


    return redirect()->route('students.index')
                  ->with('success','Student deleted successfully');
  }
}
