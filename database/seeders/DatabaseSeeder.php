<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Articles;
use App\Models\Users;
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
        $users = Users::find(1);
        if ($users) {
            Users::factory(1)->create();
        }
        Articles::factory(20)->create();
        
    }
}
