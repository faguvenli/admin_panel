<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'isSuperAdmin' => true
        ]);

        $user1->assignRole(1);

        $user2 = User::create([
            'name' => 'Standart Kullanıcı',
            'email' => 'standart@user.com',
            'password' => bcrypt('user'),
            'isSuperAdmin' => false
        ]);

        $user2->assignRole(1);
    }
}
