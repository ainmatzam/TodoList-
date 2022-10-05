<?php
 
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('senarais')->insert([
		//     'name' => 'alia',
		//     'description' => 'testing',
		//     'user_id' => '1',

	    // ]);
        User::factory()->count(5)->create();
    }
}