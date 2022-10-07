<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_groups = [
            ["id" => 1, "name" => "Ayarlar", "sort_order" => 1]
        ];

        foreach($permission_groups as $permission_group) {
            PermissionGroup::create($permission_group);
        }

        $permissions = [
            ['name' => 'Kullanıcı - Görüntüle', 'permission_group_id' => 1],
            ['name' => 'Kullanıcı - Ekle', 'permission_group_id' => 1],
            ['name' => 'Kullanıcı - Düzenle', 'permission_group_id' => 1],
            ['name' => 'Kullanıcı - Sil', 'permission_group_id' => 1],

            ['name' => 'Yetki - Görüntüle', 'permission_group_id' => 1],
            ['name' => 'Yetki - Ekle', 'permission_group_id' => 1],
            ['name' => 'Yetki - Düzenle', 'permission_group_id' => 1],
            ['name' => 'Yetki - Sil', 'permission_group_id' => 1],
        ];

        foreach($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
