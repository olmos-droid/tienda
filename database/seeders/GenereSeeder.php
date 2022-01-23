<?php

namespace Database\Seeders;

use App\Models\Genere;
use Illuminate\Database\Seeder;

class GenereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $gener01 = new Genere();
        $gener01->name='Terror';
        $gener01->save();

        $gener02 = new Genere();
        $gener02->name = 'Drama';
        $gener02->save();

        $gener03 = new Genere();
        $gener03->name = 'Comedy';
        $gener03->save();


        $gener04 = new Genere();
        $gener04->name = 'Porno';
        $gener04->save();

        $gener05 = new Genere();
        $gener05->name = 'Ciencia Ficcion';
        $gener05->save();

        $gener06 = new Genere();
        $gener06->name = 'Documental';
        $gener06->save();

        $gener07 = new Genere();
        $gener07->name = 'Suspense';
        $gener07->save();

        $gener08 = new Genere();
        $gener08->name = 'Thriller';
        $gener08->save();

    }
}
