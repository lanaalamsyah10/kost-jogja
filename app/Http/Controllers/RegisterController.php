<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title"=>"Register",
            "active"=>"register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();
        // return redirect()->route('login.index')->with('success', 'Register Successfully');

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

    User::create ($validatedData);

    return redirect('/login')->with(['success' => 'Registration successfull! Please Login']);
    }
    
}
