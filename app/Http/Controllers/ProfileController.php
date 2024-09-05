<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $user = $profile;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('image') ){

            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile/'), $image_name);
            $user->image = $image_name;

        }

        $user->save();


        return redirect()->route('profile.index')->with('success', 'Profile Updated Successfully');
    }

    public function profile_password(Request $request, User $profile)
    {
        // Validate the request
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Get the user (profile)
        $user = $profile;

        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('profile.index')->with('error', 'Current Password does not match');
        }

        // Update the password
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect with success message
        return redirect()->route('profile.index')->with('success', 'Password Updated Successfully');
    }

}
