<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::factory(200)->create();
        // DB::table('profiles')->insert([
        //     'name' =>  'bilal',
        //     'email' => "bila@gmail.com",
        //     'password' => Hash::make('12345678'),
        //     'bio'=>"vhgjkln,m",

        // ]);
    }
}