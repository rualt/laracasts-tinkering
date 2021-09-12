<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;

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

        // php artisan migrate:fresh --seed

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            //assign all 5 post to single user
            'user_id' => $user->id,
        ]);
    }
}
