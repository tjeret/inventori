<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class ProfilController extends Controller
{
    public function index()
    {
        $user['user'] = Auth::user();

        return view('admin.pages.user.profile', $user);
    }

    public function update(User $user, Request $request)
    {
        // $user =
        $data = $request->validate([
            'name' => 'required|max:255' . $user->id,
            'phone' => 'required|email|max:255|unique:users,email,' . $user->id,
            'img' => 'required|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2000',
        ]);
        try {
            File::delete('dist/img/user/' . $user->img);
            $imageName = $user->username . '.' . 'jpeg';
        } catch (Exception $e) {
            $imageName = $user->username . '.' . 'jpeg';
        }
        $request->image->move('dist/img/user/', $imageName);
        $user->image = $imageName . '?' . Carbon::now();

        return redirect()->back();
        $user->fill($data);
        $user->save();
        return back()->with('succes', 'Data berhasil di ubah');
    }
}
