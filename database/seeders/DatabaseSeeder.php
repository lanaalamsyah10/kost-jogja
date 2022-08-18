<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
        User::create([
            'name' => 'Kost Jogja',
            'username' => 'kostjogja',
            'email' => 'kostjogja@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        // User::create([
        //     'name' => 'Kosan Sleman',
        //     'email' => 'kosansleman@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Kosan Yogyakarta',
            'slug' => 'kosan-yogyakarta',
        ]);

        Category::create([
            'name' => 'Kosan Sleman',
            'slug' => 'kosan-sleman',
        ]);
       
        Category::create([
            'name' => 'Kosan Bantul',
            'slug' => 'kosan-bantul',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Kosan Lestari',
        //     'slug' => 'kosan-lestari',
        //     'excerpt' => 'Kosan Lestari adalah sebuah jasa yang menawarkan sebuah kamar atau tempat untuk ditinggali dengan sejumlah pembayaran tertentu untuk setiap periode tertentu',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint exercitationem labore molestias commodi consectetur voluptatibus omnis distinctio repellat! Labore voluptatum porro cumque corrupti sint incidunt excepturi provident praesentium? Magni rem error, odio ducimus, corporis, obcaecati iure aliquam veritatis pariatur eos quam autem quaerat facilis culpa veniam cumque consequuntur rerum et? Delectus at repudiandae eum necessitatibus aperiam, unde sit incidunt consequatur minima iure recusandae blanditiis dolore vitae natus a velit, sapiente ipsa eaque. Eligendi quisquam error assumenda, illum atque fugit tempore officiis reiciendis, quas repellendus quibusdam veniam nisi dolorum blanditiis quam enim maiores ipsa delectus rerum maxime saepe laudantium mollitia consectetur possimus. Magni repellendus, corrupti velit saepe vero hic temporibus atque natus illum facere alias unde, dignissimos quod ad incidunt!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Kosan Hijau',
        //     'slug' => 'kosan-hijau',
        //     'excerpt' => 'Kosan Hijau adalah sebuah jasa yang menawarkan sebuah kamar atau tempat untuk ditinggali dengan sejumlah pembayaran tertentu untuk setiap periode tertentu',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint exercitationem labore molestias commodi consectetur voluptatibus omnis distinctio repellat! Labore voluptatum porro cumque corrupti sint incidunt excepturi provident praesentium? Magni rem error, odio ducimus, corporis, obcaecati iure aliquam veritatis pariatur eos quam autem quaerat facilis culpa veniam cumque consequuntur rerum et? Delectus at repudiandae eum necessitatibus aperiam, unde sit incidunt consequatur minima iure recusandae blanditiis dolore vitae natus a velit, sapiente ipsa eaque. Eligendi quisquam error assumenda, illum atque fugit tempore officiis reiciendis, quas repellendus quibusdam veniam nisi dolorum blanditiis quam enim maiores ipsa delectus rerum maxime saepe laudantium mollitia consectetur possimus. Magni repellendus, corrupti velit saepe vero hic temporibus atque natus illum facere alias unde, dignissimos quod ad incidunt!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Kosan Oren',
        //     'slug' => 'kosan-oren',
        //     'excerpt' => 'Kosan Oren adalah sebuah jasa yang menawarkan sebuah kamar atau tempat untuk ditinggali dengan sejumlah pembayaran tertentu untuk setiap periode tertentu',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint exercitationem labore molestias commodi consectetur voluptatibus omnis distinctio repellat! Labore voluptatum porro cumque corrupti sint incidunt excepturi provident praesentium? Magni rem error, odio ducimus, corporis, obcaecati iure aliquam veritatis pariatur eos quam autem quaerat facilis culpa veniam cumque consequuntur rerum et? Delectus at repudiandae eum necessitatibus aperiam, unde sit incidunt consequatur minima iure recusandae blanditiis dolore vitae natus a velit, sapiente ipsa eaque. Eligendi quisquam error assumenda, illum atque fugit tempore officiis reiciendis, quas repellendus quibusdam veniam nisi dolorum blanditiis quam enim maiores ipsa delectus rerum maxime saepe laudantium mollitia consectetur possimus. Magni repellendus, corrupti velit saepe vero hic temporibus atque natus illum facere alias unde, dignissimos quod ad incidunt!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Kosan Ungu',
        //     'slug' => 'kosan-ungu',
        //     'excerpt' => 'Kosan Ungu adalah sebuah jasa yang menawarkan sebuah kamar atau tempat untuk ditinggali dengan sejumlah pembayaran tertentu untuk setiap periode tertentu',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint exercitationem labore molestias commodi consectetur voluptatibus omnis distinctio repellat! Labore voluptatum porro cumque corrupti sint incidunt excepturi provident praesentium? Magni rem error, odio ducimus, corporis, obcaecati iure aliquam veritatis pariatur eos quam autem quaerat facilis culpa veniam cumque consequuntur rerum et? Delectus at repudiandae eum necessitatibus aperiam, unde sit incidunt consequatur minima iure recusandae blanditiis dolore vitae natus a velit, sapiente ipsa eaque. Eligendi quisquam error assumenda, illum atque fugit tempore officiis reiciendis, quas repellendus quibusdam veniam nisi dolorum blanditiis quam enim maiores ipsa delectus rerum maxime saepe laudantium mollitia consectetur possimus. Magni repellendus, corrupti velit saepe vero hic temporibus atque natus illum facere alias unde, dignissimos quod ad incidunt!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
