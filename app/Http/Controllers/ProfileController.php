<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function show() {
        $user = auth()->user();
        return view('admin.profile.show', compact('user'));
    }

    public function edit() {
        $user = auth()->user();
        return view('admin.profile.update', compact('user'));
    }

    public function update(ProfileUpdateRequest $request, User $user) {
        $user = auth()->user();
        $data = $request->validated();

        if(is_null($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);
        return redirect()->route('admin.profile.show', $user->id);
    }
}
