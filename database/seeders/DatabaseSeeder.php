<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        // User::create([
        //     'name' => 'Asyim Akbar Prayitna',
        //     'email' => 'Abay7857@gmail.com',
        //     'password' => bcrypt('0404097')
        // ]);

        // User::create([
        //     'name' => 'Yanto is Coming',
        //     'email' => 'Yanto7857@gmail.com',
        //     'password' => bcrypt('0404097')
        // ]);

        // User::create([
        //     'name' => 'Sukri is Coming',
        //     'email' => 'Sukri7857@gmail.com',
        //     'password' => bcrypt('0404097')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet, officiis saepe deleniti temporibus consequatur sit delectus ipsam mollitia corrupti, perferendis qui.</p><p>Corporis enim unde voluptates excepturi totam voluptatem necessitatibus obcaecati nisi sed ut. Tempora, eligendi possimus eos, aperiam delectus eum rerum at quibusdam, natus nisi aut labore soluta maiores optio assumenda? Minima sunt necessitatibus, labore nulla nisi explicabo a nobis! Recusandae reprehenderit voluptates accusamus laudantium, exercitationem eum totam omnis labore nesciunt.</p><p> Dolorem sit inventore adipisci sunt libero deserunt sapiente expedita doloremque natus illum, eum voluptas repudiandae perferendis repellendus architecto reprehenderit odit minima quaerat eveniet accusantium labore enim possimus culpa. Tempora eum qui aliquam porro quas aut iusto, inventore error corrupti sunt libero harum molestiae rerum dolores, nesciunt deserunt enim iste dicta eos corporis? Culpa recusandae neque atque. Ipsum tempora minus laborum ea repellat sit, asperiores delectus voluptatum.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet, officiis saepe deleniti temporibus consequatur sit delectus ipsam mollitia corrupti, perferendis qui.</p><p>Corporis enim unde voluptates excepturi totam voluptatem necessitatibus obcaecati nisi sed ut. Tempora, eligendi possimus eos, aperiam delectus eum rerum at quibusdam, natus nisi aut labore soluta maiores optio assumenda? Minima sunt necessitatibus, labore nulla nisi explicabo a nobis! Recusandae reprehenderit voluptates accusamus laudantium, exercitationem eum totam omnis labore nesciunt.</p><p> Dolorem sit inventore adipisci sunt libero deserunt sapiente expedita doloremque natus illum, eum voluptas repudiandae perferendis repellendus architecto reprehenderit odit minima quaerat eveniet accusantium labore enim possimus culpa. Tempora eum qui aliquam porro quas aut iusto, inventore error corrupti sunt libero harum molestiae rerum dolores, nesciunt deserunt enim iste dicta eos corporis? Culpa recusandae neque atque. Ipsum tempora minus laborum ea repellat sit, asperiores delectus voluptatum.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit iure hic quos dicta id asperiores officia pariatur alias molestias architecto amet, officiis saepe deleniti temporibus consequatur sit delectus ipsam mollitia corrupti, perferendis qui.</p><p>Corporis enim unde voluptates excepturi totam voluptatem necessitatibus obcaecati nisi sed ut. Tempora, eligendi possimus eos, aperiam delectus eum rerum at quibusdam, natus nisi aut labore soluta maiores optio assumenda? Minima sunt necessitatibus, labore nulla nisi explicabo a nobis! Recusandae reprehenderit voluptates accusamus laudantium, exercitationem eum totam omnis labore nesciunt.</p><p> Dolorem sit inventore adipisci sunt libero deserunt sapiente expedita doloremque natus illum, eum voluptas repudiandae perferendis repellendus architecto reprehenderit odit minima quaerat eveniet accusantium labore enim possimus culpa. Tempora eum qui aliquam porro quas aut iusto, inventore error corrupti sunt libero harum molestiae rerum dolores, nesciunt deserunt enim iste dicta eos corporis? Culpa recusandae neque atque. Ipsum tempora minus laborum ea repellat sit, asperiores delectus voluptatum.</p>',
        // ]);
        
        
    }
}
