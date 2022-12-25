<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    private $users;
    private $user;
    public function add()
    {
        return view('admin.user.add');
    }
    public function create(Request $request)
    {
        User::newUser($request);
        return redirect()->back()->with('message','User info saved successfully.');
    }
    public function manage()
    {
        $this->users = User::all();
        return view('admin.user.manage',['users'=>$this->users]);
    }
    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit',['user'=>$this->user]);
    }
    public function update(Request $request,$id)
    {
        User::updateUser($request,$id);
        return redirect('/manage-user')->with('message','User info updated successfully.');
    }
    public function destroy($id)
    {
        User::deleteUser($id);
        return redirect()->back()->with('message','User Info deleted successfully.');
    }
}
