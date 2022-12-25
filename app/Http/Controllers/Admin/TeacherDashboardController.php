<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        if(Session::get('teacher_id'))
        {
            return view('teacher.home.dashboard');
        }

    }

}
