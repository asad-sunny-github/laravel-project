<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Crypt;

class TeacherController extends Controller
{
    private $teachers;
    private $teacher;
    private $decrypt;
    public function add()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {
        $request->validate(
           [
             'name' => 'required',
             'email' => 'required|email:rfc,dns|unique:teachers,email',
             'image' => 'required|image'
           ],
            [
                'name.required' => 'Vai Please nam den'
            ]
        );

        Teacher::newTeacher($request);
        return redirect()->back()->with('message','Teacher Info Saved Successfully.');
    }
    public function manage()
    {
        $this->teachers = Teacher::all();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }
    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        //$this->decrypt = Crypt::decrypt($this->teacher->password);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }
    public function update(Request $request,$id)
    {
       Teacher::updateTeacher($request,$id);
        return redirect('/manage-teacher')->with('message','Teacher Info update successfully.');

    }
    public function destroy($id)
    {
        Teacher::deleteTeacher($id);
        return redirect()->back()->with('message','Teacher Info deleted successfully.');
    }
    public function instructorProfile($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.profile',['teacher',$this->teacher]);
    }
}
