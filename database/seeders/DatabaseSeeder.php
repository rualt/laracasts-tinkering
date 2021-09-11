<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
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

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal_category = Category::create([
            'name' => 'Pesonal',
            'slug' => 'personal'
        ]);

        $family_category = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work_category = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal_category->id,
            'title' => 'My Personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Hic praesentium est tempore odio illum consequuntur accusantium nobis quae,
                dicta dolore ducimus, laborum ut reprehenderit consequatur facere architecto velit sed quas!',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family_category->id,
            'title' => 'My Family post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Hic praesentium est tempore odio illum consequuntur accusantium nobis quae,
                dicta dolore ducimus, laborum ut reprehenderit consequatur facere architecto velit sed quas!',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work_category->id,
            'title' => 'My Work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Hic praesentium est tempore odio illum consequuntur accusantium nobis quae,
                dicta dolore ducimus, laborum ut reprehenderit consequatur facere architecto velit sed quas!',
        ]);
    }
}
