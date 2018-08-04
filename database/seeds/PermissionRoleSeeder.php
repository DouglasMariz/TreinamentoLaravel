<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
