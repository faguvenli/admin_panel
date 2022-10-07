<?php

namespace App\Http\Actions;

use App\Models\User;

class UserAction
{
    public function store($data) {
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $user->assignRole($data['role']);
        session()->flash('success', 'kaydedildi');
        return redirect()->route('admin.users.index');
    }

    public function update($user, $data) {
        if(is_null($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);

        $user->syncRoles($data['role']);

        session()->flash('success', 'güncellendi');
        return redirect()->route('admin.users.edit', $user);
    }
}
