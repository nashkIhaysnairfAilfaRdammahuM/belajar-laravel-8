<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rafli Afriansyah',
            'email' => 'nashkihaysnairfailfardammahum@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        User::create([
            'name' => 'Haysnairfa Ilfar',
            'email' => 'muhammadrafliafriansyahikhsan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident, eaque architecto perferendis sapiente magnam. Minima deleniti quia, aliquam ratione ipsa iure eum esse, impedit delectus cumque officia maiores sequi ea non placeat quae et nihil vel facere molestiae adipisci ab. Dolor harum dolore illo et, fuga corporis dignissimos delectus fugiat voluptatum culpa! Expedita architecto culpa blanditiis nemo magnam doloribus quae, molestiae voluptas aliquid, rem voluptates. Assumenda consequatur odit illo, fuga ipsa quam neque saepe eveniet? Minima cum est alias vero voluptatum quaerat voluptas minus libero.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident, eaque architecto perferendis sapiente magnam. Minima deleniti quia, aliquam ratione ipsa iure eum esse, impedit delectus cumque officia maiores sequi ea non placeat quae et nihil vel facere molestiae adipisci ab. Dolor harum dolore illo et, fuga corporis dignissimos delectus fugiat voluptatum culpa! Expedita architecto culpa blanditiis nemo magnam doloribus quae, molestiae voluptas aliquid, rem voluptates. Assumenda consequatur odit illo, fuga ipsa quam neque saepe eveniet? Minima cum est alias vero voluptatum quaerat voluptas minus libero.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident, eaque architecto perferendis sapiente magnam. Minima deleniti quia, aliquam ratione ipsa iure eum esse, impedit delectus cumque officia maiores sequi ea non placeat quae et nihil vel facere molestiae adipisci ab. Dolor harum dolore illo et, fuga corporis dignissimos delectus fugiat voluptatum culpa! Expedita architecto culpa blanditiis nemo magnam doloribus quae, molestiae voluptas aliquid, rem voluptates. Assumenda consequatur odit illo, fuga ipsa quam neque saepe eveniet? Minima cum est alias vero voluptatum quaerat voluptas minus libero.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident,',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quod aspernatur molestias officiis eveniet autem, tempore quisquam, neque maxime omnis ducimus recusandae incidunt provident, eaque architecto perferendis sapiente magnam. Minima deleniti quia, aliquam ratione ipsa iure eum esse, impedit delectus cumque officia maiores sequi ea non placeat quae et nihil vel facere molestiae adipisci ab. Dolor harum dolore illo et, fuga corporis dignissimos delectus fugiat voluptatum culpa! Expedita architecto culpa blanditiis nemo magnam doloribus quae, molestiae voluptas aliquid, rem voluptates. Assumenda consequatur odit illo, fuga ipsa quam neque saepe eveniet? Minima cum est alias vero voluptatum quaerat voluptas minus libero.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
