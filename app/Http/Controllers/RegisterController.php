<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]) ;

    } 

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => "required|max:255",
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:filter|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::query()->create($validatedData);
        // User::create($validatedData);
        // $request->session()->flash('success', 'Berhasil register, silahkan login!');
        return redirect('/login')->with('success', 'Berhasil register, silahkan login!');

    }

}
