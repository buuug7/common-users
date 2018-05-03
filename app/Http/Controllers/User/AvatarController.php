<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    public function update(Request $request)
    {
        $croppedImage = $request->file('croppedImage');

        $link = Storage::disk('public')->put('avatars', $croppedImage);

        $url = asset('storage/' . $link);

        $oldAvatarUrl = $request->user()->profile->avatar_url;

        Storage::disk('public')->delete($oldAvatarUrl);

        $request->user()->profile()->update([
            'avatar_url' => $link,
        ]);

        return json_encode([
            'url' => $url,
        ]);
    }
}
