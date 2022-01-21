<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisation;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Organisation::factory()
            ->count(1)
            ->create();
    }
}
