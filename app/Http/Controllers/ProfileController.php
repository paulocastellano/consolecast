<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Inertia\Inertia;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return Inertia::render('Profile/Edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => "required|unique:users,email,{$user->id},id"
        ])->validateWithBag('updateProfile');


        // user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        session()->flash('flash.banner', 'Profile updated.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function updatePassword(Request $request)
    {
        Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed'
        ])->validateWithBag('updatePassword');

        // user
        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->save();

        session()->flash('flash.banner', 'Password updated.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function destroy(Request $request)
    {
        // user
        $user = auth()->user();

        // validate password
        if (!Hash::check($request->password, $user->password)) {
            session()->flash('flash.banner', 'The password entered is incorrect.');
            session()->flash('flash.bannerStyle', 'danger');
            return back();
        }

        // delete user
        $user->delete();

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        session()->flash('flash.banner', 'Your account has been successfully deleted.');
        session()->flash('flash.bannerStyle', 'success');
        return redirect(route('login'));
    }
}
