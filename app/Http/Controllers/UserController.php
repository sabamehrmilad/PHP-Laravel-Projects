<?php

namespace App\Http\Controllers;

use App\Models\efficient;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users=efficient::paginate(8);
        return view('user.users', ['users' => $users]);

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
      return view('register');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name = $request->user_name;
        $user->phone = $request->user_phone;
        $user->national_code = $request->user_national_code;
        $user->birthday = $request->date_picker;
        $user->is_validate=1;
        $user->save();
        return view('user.store');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
       //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */


    public function destroy(user $user)
    {
        //
    }
}
