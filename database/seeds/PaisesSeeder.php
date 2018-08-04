<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Paises;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Forma 1*/
        DB::table('paises')->delete();
        DB::table('paises')->insert([
            'nome' => 'Brasil',
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('paises')->insert([
            'nome' => 'Portugal',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        /*Forma 2*/
        Paises::create(['nome' => 'Brasil']);
        Paises::create(['nome' => 'Portugal']);

        /*Forma 3*/
        $json = File::get(__DIR__ . '/json/paises.json');
        $paises = json_decode($json, true);
        foreach ($paises as $pais) {
            Paises::create($pais);
        }
    }
}
