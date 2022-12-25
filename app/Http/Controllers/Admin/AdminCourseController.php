<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    protected $courses;
    protected $course;
    protected $message;

    public function manage()
    {
        $this->courses = Course::all();
//        foreach ($this->courses as $key=>$course)
//        {
//            $this->courses[$key]['teachers'] = Course::courseTeacher($course->teacher_id);
//        }

        return view('admin.course.manage',['courses'=>$this->courses]);
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.detail',['course'=>$this->course]);
    }
    public function status($id)
    {
        $this->message = Course::updateStatus($id);
        return redirect()->back()->with('message',$this->message);
    }
}
