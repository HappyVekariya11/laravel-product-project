<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
//var_dump(request()->all());
//return request()->all();
       $attributes= request()->validate([
            'name'=>'required|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            //'username'=>['required','min:7','max:255',Rule::unique('users'(table name),'username')],
            'email'=>'required|email|max:255|min:7|unique:users,email',
            'password'=>['required','min:7','max:255']
            //'password'=>['required','min:7','max:255']
        ]);
        //for encrypt password
$attributes['password']= $attributes['password']; //bcrypt($attributes['password']);

      $user=  User::create($attributes);
       // session()->flash('success','your account has been created');
   // log the user in
       auth()->login($user);
        return redirect('/')->with('success','your account has been created');
    }

}
