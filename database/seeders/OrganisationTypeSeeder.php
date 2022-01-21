<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\OrganisationType;

class OrganisationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $record = [
            ["name" => "Motherless Babies Home", "comment" => "Home for the motherless"],
            ["name" => "Home for elderly", "comment" => "Home for elderly"],
            ["name" => "People with disability", "comment" => "People with Disability"],
            ["name" => "NGO", "comment" => "Non Governmental Organisation"],
        ];

        foreach($record as $item){
            OrganisationType::create($item);
        }
    }
}
