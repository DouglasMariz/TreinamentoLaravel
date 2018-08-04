<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(PermissionRoleSeeder::class);

        $this->call(PaisesSeeder::class);

        $this->call(TesteSeed::class);
    }
}
