<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $courses;
    private $course;
    private $teachers;
    public function index()
    {
        return view('teacher.course.add');
    }
    public function manage()
    {
        $this->courses = Course::where('teacher_id',Session::get('teacher_id'))->get();
        foreach ($this->courses as $key=>$course)
        {
            $this->courses[$key]['teacher_name'] = Course::courseTeacher($course->teacher_id);
        }
        //return  $this->courses;

        return view('teacher.course.manage',['courses'=>$this->courses]);
    }
    public function create(Request $request)
    {
        Course::newCourse($request);

        return redirect()->back()->with('message','Course info added successfully');
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        $this->course['teacher_name'] = Course::courseTeacher($this->course->teacher_id);
        return view('teacher.course.detail',['course'=>$this->course]);
    }
    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit',['course'=>$this->course]);
    }
    public function update(Request $request,$id)
    {
        Course::updateCourse($request,$id);
        return redirect('/manage-course')->with('message','Course info updated successfully.');
    }
    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect()->back()->with('message','Course info deleted successfully.');
    }
}
