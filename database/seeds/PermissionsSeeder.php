<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'view_post',
            'label' => 'Visualisar Post',
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
