<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class schoolstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        // School::create([
        //     'name' => 'vidhi',
        //     'email' => 'xyz@gamil.com',
        //     'city' => 'visnagar',
        // ]);


        // // for($i=0; $i<10; $i++){
        // //     School::create([
        // //         'name'=> fake()->name(),
        // //         'email'=> fake()->email(),
        // //         'city'=> fake()->city()
        // //     ]);
        // }

        $json = File::get("database/seeders/data.json");

        $data = json_decode($json, true);
        
        foreach($data as $item){
            School::create($item);
        }
    }
}
