<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function updateProfile(Request $request)
    {
        // Mevcut kullanıcıyı al
        $user = Auth::user();

        // Formdan gelen verileri doğrula
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        // Kullanıcı adı ve e-posta adresini güncelle
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Kullanıcıyı profil sayfasına yönlendir
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }


}
