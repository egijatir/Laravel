<?php

namespace Database\Seeders;

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
        User::factory(5)->create();
        // User::create(
        //     [
        //         'name'=>'Egi Jati Ramadhan',
        //         'email'=>'Egijatir@gmail.com',
        //         'password'=>bcrypt('123456')
        //     ]
        //     );
        Category::create(
            [
                'name'=>'Web Programing',
                'slug'=>'web-programing'
            ]
            );
        Category::create(
            [
                'name'=>'Personal',
                'slug'=>'personal'
            ]
            );
        Post::factory(20)->create();
        // Post::create(
        //     [
        //         'title'=>'Judul Pertama',
        //         'slug'=>'judul-pertama',
        //         'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero',
        //         'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero
        //         consectetur iste repellendus quisquam magni, at, vel asperiores consequatur eaque fugiat 
        //         accusamus ratione laudantium a ab suscipit aliquid. Eveniet quaerat ipsam autem dolorem, 
        //         libero optio beatae accusantium eligendi maiores nemo odio perferendis facere explicabo 
        //         necessitatibus hic pariatur quibusdam voluptas nobis cum illo, possimus nostrum dolore labore. 
        //         Similique sint atque voluptatem delectus laudantium eveniet sed numquam, voluptates, qui fugit
        //         expedita, vero sapiente minima. Distinctio sapiente quod beatae repellendus explicabo optio et 
        //         ad provident possimus dolorum temporibus eligendi ipsa, 
        //         inventore sit eveniet molestias iste modi hic saepe asperiores dolorem tenetur?',
        //         'category_id'=>1,
        //         'user_id'=>1,
        //     ]
        //     );
        //     Post::create(
        //         [
        //             'title'=>'Judul Kedua',
        //             'slug'=>'judul-kedua',
        //             'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero',
        //             'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero
        //             consectetur iste repellendus quisquam magni, at, vel asperiores consequatur eaque fugiat 
        //             accusamus ratione laudantium a ab suscipit aliquid. Eveniet quaerat ipsam autem dolorem, 
        //             libero optio beatae accusantium eligendi maiores nemo odio perferendis facere explicabo 
        //             necessitatibus hic pariatur quibusdam voluptas nobis cum illo, possimus nostrum dolore labore. 
        //             Similique sint atque voluptatem delectus laudantium eveniet sed numquam, voluptates, qui fugit
        //             expedita, vero sapiente minima. Distinctio sapiente quod beatae repellendus explicabo optio et 
        //             ad provident possimus dolorum temporibus eligendi ipsa, 
        //             inventore sit eveniet molestias iste modi hic saepe asperiores dolorem tenetur?',
        //             'category_id'=>2,
        //             'user_id'=>1,
        //         ]
        //         );
        //         Post::create(
        //             [
        //                 'title'=>'Judul Ketiga',
        //                 'slug'=>'judul-ketiga',
        //                 'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero',
        //                 'body'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia odit possimus libero
        //                 consectetur iste repellendus quisquam magni, at, vel asperiores consequatur eaque fugiat 
        //                 accusamus ratione laudantium a ab suscipit aliquid. Eveniet quaerat ipsam autem dolorem, 
        //                 libero optio beatae accusantium eligendi maiores nemo odio perferendis facere explicabo 
        //                 necessitatibus hic pariatur quibusdam voluptas nobis cum illo, possimus nostrum dolore labore. 
        //                 Similique sint atque voluptatem delectus laudantium eveniet sed numquam, voluptates, qui fugit
        //                 expedita, vero sapiente minima. Distinctio sapiente quod beatae repellendus explicabo optio et 
        //                 ad provident possimus dolorum temporibus eligendi ipsa, 
        //                 inventore sit eveniet molestias iste modi hic saepe asperiores dolorem tenetur?',
        //                 'category_id'=>1,
        //                 'user_id'=>1,
        //             ]
        //             );
    }
}
