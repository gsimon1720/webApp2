<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ✅ Create permissions
        $permissions = [
            'manage testimonials',
            'manage events',
            'manage users',
            'manage site settings',
            'view admin dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // ✅ Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $staff = Role::firstOrCreate(['name' => 'staff']);

        // ✅ Assign all permissions to admin
        $admin->syncPermissions(Permission::all());

        // ✅ Assign limited permissions to staff
        $staff->syncPermissions([
            'manage testimonials',
            'manage events',
            'view admin dashboard',
        ]);

        // ✅ (Optional) Assign admin role to first user
        $user = User::where('email', 'admin@example.com')->first();
        if ($user) {
            $user->assignRole('admin');
        }
    }
}
