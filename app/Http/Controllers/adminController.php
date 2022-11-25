<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function index()
    {
        $admin=admin::all();

        return view('admin.index',['admin'=>$admin]);
    }

    public function store(Request $request)
    {
        $save=new admin;
        $save->name=$request->name;
        $save->email=$request->email;
        $save->password=bcrypt($request->password);
        $save->save();
        $admin=admin::all();
        return view('admin.index',['admin'=>$admin]);
    }


    public function destroy(admin $admin)
    {

        $admin->delete();
        return redirect()->back();

    }

    public function newadmin()
    {
        return view('admin.create');
    }





}
