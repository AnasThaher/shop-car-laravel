<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
       $user =  User::where('email',$request->email)->where('password',$request->password)->first();
       if(is_null($user)){
        return response()->json("false", 400);
        // return false;
       }else {
        return response()->json($user, 200);
        // return true;
       }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user =  User::where('email',$request->email)->first();
        if(is_null($user)){
            $user =  User::create($request->all());
            return response()->json($user,200);

        }else {
           return response()->json('this email Alredy exist',400);        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
