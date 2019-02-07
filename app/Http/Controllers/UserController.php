<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit()
    {
        return view('auth.editprofil');
    }

    public function update(Request $request)
    {
        $avatar = $request->file('avatar')->store('avatars');

        $request->user()->update([
            'avatar' => $avatar
        ]);

        return redirect()->back();
    }
}
