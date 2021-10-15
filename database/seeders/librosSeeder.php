<?php

namespace Database\Seeders;

use App\Models\libros;
use Illuminate\Database\Seeder;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        libros::factory(100)->create();
    }
}
