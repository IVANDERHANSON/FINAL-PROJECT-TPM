<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => 'required|max:100',
            "username" => "required|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:8"
        ]);

        $validated["password"] = Hash::make($request->password);

        User::create($validated);
        return redirect('/login');
    }
}
