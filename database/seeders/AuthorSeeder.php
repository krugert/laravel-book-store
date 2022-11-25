<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
		// \App\Models\Author::factory()->count(40)->create();
		
		Author::factory(50)->create();
        // Author::factory()
        //     ->count(50)
        //    ->create();
    }

    /*
    public function run()
    {
        Author::factory()->hasBooks(10)->create();
    }
    */
}
