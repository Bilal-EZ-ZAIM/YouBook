<?php

namespace Database\Seeders;

use App\Models\Livers; // Make sure the model name is in singular and follows the correct case
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Str;


class LiversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data from the table
        // DB::table('livers')->insert([
        //     'name'=> Str::random(20),
        //     'bio'=> Str::random(400)
        // ]);

        // Seed the table using a factory
        Livers::factory(200)->create();
    }
}
