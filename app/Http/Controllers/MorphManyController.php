<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MorphManyController extends Controller
{
  public function index()
  {
    Student::create([
      'name' => 'MD EMON HASSAN',
      'email' => 'elitedevemon@gmail.com'
    ]);

    Teacher::create([
      'name' => 'MD ROFIKUL ISLAM',
      'email' => 'rafikulislam@gmail.com'
    ]);
  }
  public function student()
  {
    $student = Student::findOrFail(1);
    $student->post()->create([
      'comment' => 'this is student comment'
    ]);
    return $student;
  }
  public function teacher()
  {
    $teacher = Teacher::findOrFail(1);
    $teacher->post()->create([
      'comment' => 'this is teacher comment'
    ]);
    return $teacher;
  }
}