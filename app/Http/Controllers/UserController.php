<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'biography' => 'nullable|string',
            'website_link' => 'nullable|url',
            'social_media_handles' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $user->update($request->only(['biography', 'website_link', 'social_media_handles']));

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars');
            $user->avatar = $path;
            $user->save();
        }

        return redirect()->route('profile');
    }
}
