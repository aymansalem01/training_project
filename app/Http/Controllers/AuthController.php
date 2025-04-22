<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $input = $request->email;
        $isEmail = filter_var($input, FILTER_VALIDATE_EMAIL);
        $isPhone = preg_match('/^07[0-9]{8}$/', $input);

        if (!$isEmail && !$isPhone) {
            return back()->withErrors(['email' => 'Please enter a valid email or Jordanian phone number.'])->withInput();
        }

        if ($isEmail && User::where('email', $input)->exists()) {
            return back()->withErrors(['email' => 'Email already exists.'])->withInput();
        }

        if ($isPhone && User::where('phone_number', $input)->exists()) {
            return back()->withErrors(['email' => 'Phone number already exists.'])->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $isEmail ? $input : null,
            'phone_number' => $isPhone ? $input : null,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);
        return redirect()->route('login');
    }

    public  function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $input = $request->email;
        $isEmail = filter_var($input, FILTER_VALIDATE_EMAIL);
        $user = null;

        if ($isEmail) {
            $user = User::where('email', $input)->first();
        } else {
            if (!preg_match('/^07[0-9]{8}$/', $input)) {
                return back()->withErrors(['email' => 'Invalid phone number format']);
            }
            $user = User::where('phone_number', $input)->first();
        }

        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email or phone number']);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Wrong password']);
        }

        if (Auth::check()) {
            Auth::logout();
        }

        Auth::login($user);
        $user->createToken($user->id)->accessToken;

        if ($user->role === 'admin') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        $id = auth()->user()->id;
        Auth::user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        Auth::logout();
        return redirect()->route('log');
    }

    public function edit()
    {
        $id = auth()->user()->id;
        return redirect()->route('edit', $id);
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::find($id);
        if ($user->name != $request->name || $user->phone_number != $request->phone_number) {
            $user->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->back()->with(['message' => 'Update successful']);
        }

        return redirect()->back()->with(['message' => 'No changes detected']);
    }
}
