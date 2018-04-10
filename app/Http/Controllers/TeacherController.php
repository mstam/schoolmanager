<?php

namespace App\Http\Controllers;
use App\Course;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $teachers = Teacher::latest()->paginate(5);


      return view('teachers.index',compact('teachers'))
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
      return view('teachers.create', compact('courses'));
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


    $teacher = Teacher::create($request->all());

    if (isset($request->courses)){
        $teacher->courses()->attach($request->courses);
    }

    return redirect()->route('teachers.index')
                  ->with('success','Teacher created successfully.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Teacher  $teacher
   * @return \Illuminate\Http\Response
   */
  public function show(Teacher $teacher)
  {
       return view('teachers.show',compact('teacher'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Teacher  $teacher
   * @return \Illuminate\Http\Response
   */
  public function edit(Teacher $teacher)
  {
      $courses = Course::with('teachers')->get();
      return view('teachers.edit',compact('teacher', 'courses'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Teacher  $teacher
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Teacher $teacher)
  {
      request()->validate([
       'name' => 'required',
       'age' => 'required|numeric',
       'email' => 'required|email',
      ]);


      $teacher->update($request->all());

      $teacher->courses()->sync($request->input('courses'));

      return redirect()->route('teachers.index')
                   ->with('success','Teacher updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Teacher  $teacher
   * @return \Illuminate\Http\Response
   */
  public function destroy(Teacher $teacher)
  {
    $teacher->delete();


    return redirect()->route('teachers.index')
                  ->with('success','Teacher deleted successfully');
  }
}
