<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function create()
    {
        return view();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6|same:c_password',
            'c_password' => 'required|string|min:6|same:password',
            'email' => 'required|email|unique:users',
            'role' => 'required|numeric',
            'suspend' => 'required|numeric',
        ]);

        $user = User::create($this);
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->role = $request->role;
        $user->suspend = '0';

        $user->save();

        return redirect()->route('user.create')->with(['message' => 'Input user telah berhasil']);
    }

    public function update(Request $request, $id)
    {
        //
    }
}
