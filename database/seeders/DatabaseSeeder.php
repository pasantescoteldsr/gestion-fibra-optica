<?php

namespace Database\Seeders;

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
        $this->call(SeederTablaPermisos::class);
        $this->call(SuperAdminSeeder::class);
        \App\Models\User::factory(10)->create();
        \App\Models\Olt::factory(10)->create();
    }
}
