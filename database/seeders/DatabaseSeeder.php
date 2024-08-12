<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                "name" => "Mahadi Dwi Nugraha",
                "username" => "mahadidn",
                "email" => "mahadidwinugraha@gmail.com",
                "password" => bcrypt("mahadi123")
            ]);

            // User::create([
            //     "name" => "Muhammad Fatih",
            //     "email" => "fatih@gmail.com",
            //     "password" => bcrypt("12345")
            // ]);

            User::factory(3)->create();

            Category::create([
                "name" => "Web Programming",
                "slug" => "web-programming"
            ]);

            Category::create([
                "name" => "Personal",
                "slug" => "personal"
            ]);

            Category::create([
                "name" => "Web Design",
                "slug" => "web-design"
            ]);

            Post::factory(20)->create();
            
            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa,',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa, culpa rem quaerat! Omnis delectus perspiciatis non fugit explicabo hic esse in accusamus repellat aliquid numquam nesciunt fugiat facere dolores debitis nulla repudiandae, nisi vero? Pariatur assumenda qui quod, commodi corrupti animi reiciendis nobis consectetur officia! Sint nam magni a eos? Sed aliquam totam amet qui? Eius, commodi accusamus. Ut deleniti numquam mollitia blanditiis maxime dolores nesciunt, hic eligendi ea! At earum saepe consequuntur dolorum. Commodi alias ipsa ullam laudantium fuga, dolor cupiditate ut.',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Kedua',
            //     'slug' => 'judul-kedua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa,',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa, culpa rem quaerat! Omnis delectus perspiciatis non fugit explicabo hic esse in accusamus repellat aliquid numquam nesciunt fugiat facere dolores debitis nulla repudiandae, nisi vero? Pariatur assumenda qui quod, commodi corrupti animi reiciendis nobis consectetur officia! Sint nam magni a eos? Sed aliquam totam amet qui? Eius, commodi accusamus. Ut deleniti numquam mollitia blanditiis maxime dolores nesciunt, hic eligendi ea! At earum saepe consequuntur dolorum. Commodi alias ipsa ullam laudantium fuga, dolor cupiditate ut.',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ketiga',
            //     'slug' => 'judul-ketiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa,',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa, culpa rem quaerat! Omnis delectus perspiciatis non fugit explicabo hic esse in accusamus repellat aliquid numquam nesciunt fugiat facere dolores debitis nulla repudiandae, nisi vero? Pariatur assumenda qui quod, commodi corrupti animi reiciendis nobis consectetur officia! Sint nam magni a eos? Sed aliquam totam amet qui? Eius, commodi accusamus. Ut deleniti numquam mollitia blanditiis maxime dolores nesciunt, hic eligendi ea! At earum saepe consequuntur dolorum. Commodi alias ipsa ullam laudantium fuga, dolor cupiditate ut.',
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Keempat',
            //     'slug' => 'judul-keempat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa,',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur ullam commodi voluptates autem? Adipisci optio veniam id ullam voluptatem exercitationem corrupti eveniet veritatis, non ipsa, culpa rem quaerat! Omnis delectus perspiciatis non fugit explicabo hic esse in accusamus repellat aliquid numquam nesciunt fugiat facere dolores debitis nulla repudiandae, nisi vero? Pariatur assumenda qui quod, commodi corrupti animi reiciendis nobis consectetur officia! Sint nam magni a eos? Sed aliquam totam amet qui? Eius, commodi accusamus. Ut deleniti numquam mollitia blanditiis maxime dolores nesciunt, hic eligendi ea! At earum saepe consequuntur dolorum. Commodi alias ipsa ullam laudantium fuga, dolor cupiditate ut.',
            //     'category_id' => 2,
            //     'user_id' => 2
            // ]);


    }
}
