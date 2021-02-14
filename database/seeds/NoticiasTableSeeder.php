<?php

use Illuminate\Database\Seeder;
use App\Noticia;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Noticia::class, 10)->create();
    }
}
