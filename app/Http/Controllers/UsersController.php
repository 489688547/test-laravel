<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }

    public function showLogin()
    {
        return view('login', compact('user'));
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $user_data = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($user_data))
        {
            return redirect()->route('profile',[Auth::user()]);
        }
        else
        {
            return redirect('login');
        }   
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|max:50'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email
        ]);

        return redirect()->route('profile',$id);
    }
}
