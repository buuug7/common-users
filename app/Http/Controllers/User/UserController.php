<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile()
    {
        return view('settings.profile.index');
    }

    public function showProfile(Request $request)
    {
        $profile = $request->user()->profile;
        $user = $request->user();
        return json_encode([
            'username' => $user->name,
            'email' => $user->email,
            'website' => $profile->website,
            'bio' => $profile->bio,
            'errors' => [],
            'message' => '',
        ]);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'website' => 'nullable|url',
            'bio' => '',
        ]);

        $user = $request->user();
        $user->name = $request->post('username');
        $user->save();

        $request->user()->profile()->update([
            'website' => $request->post('website'),
            'bio' => $request->post('bio'),
        ]);

        return json_encode([
            'message' => 'success updated!',
            'web' => $request->post('website'),
        ]);
    }
}
