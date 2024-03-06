<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title'=>'register',
            'active'=>'register'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|min:5',
            'username' => ['required','min:5','max:255','unique:users'],
            'email' =>'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:25'
        ]);

        // $validatedData['password'] = byrcpt
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success','registration successfull! please login');
        return redirect('/login')->with('success','registration successfull! please login');
    }
}
