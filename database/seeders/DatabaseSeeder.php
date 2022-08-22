<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Marcell Budi',
            'username' => 'marcellbudi',
            'email' => 'marcellbudi@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Natura',
        //     'email' => 'natura@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolorum voluptate dolorem rem libero natus suscipit eum expedita earum fuga. Quas animi quos doloremque officia vero! Libero perferendis nemo maiores, minima officiis numquam hic, molestiae magni laborum blanditiis asperiores. Temporibus pariatur nam repellat quae veritatis autem nulla consequatur et architecto enim deserunt, incidunt officiis omnis modi. Quam voluptatibus doloremque earum mollitia illum non delectus, optio nulla magni pariatur accusamus, inventore, deleniti suscipit dignissimos veritatis omnis expedita? Odio eos aspernatur deleniti labore dolorem ut distinctio fugiat laboriosam impedit similique itaque, vel ratione necessitatibus ex delectus dolores odit sed accusantium deserunt officia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolorum voluptate dolorem rem libero natus suscipit eum expedita earum fuga. Quas animi quos doloremque officia vero! Libero perferendis nemo maiores, minima officiis numquam hic, molestiae magni laborum blanditiis asperiores. Temporibus pariatur nam repellat quae veritatis autem nulla consequatur et architecto enim deserunt, incidunt officiis omnis modi. Quam voluptatibus doloremque earum mollitia illum non delectus, optio nulla magni pariatur accusamus, inventore, deleniti suscipit dignissimos veritatis omnis expedita? Odio eos aspernatur deleniti labore dolorem ut distinctio fugiat laboriosam impedit similique itaque, vel ratione necessitatibus ex delectus dolores odit sed accusantium deserunt officia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolorum voluptate dolorem rem libero natus suscipit eum expedita earum fuga. Quas animi quos doloremque officia vero! Libero perferendis nemo maiores, minima officiis numquam hic, molestiae magni laborum blanditiis asperiores. Temporibus pariatur nam repellat quae veritatis autem nulla consequatur et architecto enim deserunt, incidunt officiis omnis modi. Quam voluptatibus doloremque earum mollitia illum non delectus, optio nulla magni pariatur accusamus, inventore, deleniti suscipit dignissimos veritatis omnis expedita? Odio eos aspernatur deleniti labore dolorem ut distinctio fugiat laboriosam impedit similique itaque, vel ratione necessitatibus ex delectus dolores odit sed accusantium deserunt officia?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolorum voluptate dolorem rem libero natus suscipit eum expedita earum fuga. Quas animi quos doloremque officia vero! Libero perferendis nemo maiores, minima officiis numquam hic, molestiae magni laborum blanditiis asperiores. Temporibus pariatur nam repellat quae veritatis autem nulla consequatur et architecto enim deserunt, incidunt officiis omnis modi. Quam voluptatibus doloremque earum mollitia illum non delectus, optio nulla magni pariatur accusamus, inventore, deleniti suscipit dignissimos veritatis omnis expedita? Odio eos aspernatur deleniti labore dolorem ut distinctio fugiat laboriosam impedit similique itaque, vel ratione necessitatibus ex delectus dolores odit sed accusantium deserunt officia?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
