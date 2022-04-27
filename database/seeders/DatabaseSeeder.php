<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Budi Markudi',
        //     'email' => 'budiMarkudi123@gmail.com',
        //     'password' => bcrypt('12345') 
        // ]);
        User::create([
            'name' => 'Fatih Fwz',
            'username' => 'fth87',
            'email' => 'itsthedreamgt@gmail.com',
            'password' => bcrypt('30september') 
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
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
        //     'title' => 'Judul 1',
        //     'slug' => 'judul-1',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo, voluptate velit aperiam? Amet vero expedita nemo ea minima beatae sunt totam quos voluptatum magnam odit a at reprehenderit, libero recusandae provident voluptas eius! Debitis consectetur assumenda provident saepe nisi quisquam facere optio laboriosam possimus ipsam voluptates odit, sint placeat expedita. Impedit consectetur deleniti ab facere nobis. Delectus voluptates repellat modi! Veniam eaque, sunt corporis quia molestias labore assumenda beatae dolorum a numquam enim minima? Ea recusandae nihil soluta voluptatem asperiores accusantium fugiat ex deleniti libero non totam iure quibusdam odio nulla repudiandae dignissimos cupiditate, nobis eligendi consequuntur assumenda temporibus. Pariatur veritatis ex eveniet ab, culpa cupiditate iusto facilis consequuntur iste incidunt id, minima dolor? Incidunt similique sit optio? Tenetur error similique omnis. Facere nulla modi nisi minus recusandae obcaecati id assumenda labore dolor expedita quia excepturi qui, in itaque molestias quos, dolore vel repellendus asperiores quo cumque ab quod. Optio voluptatem reiciendis dolorem omnis aperiam.'
        // ]);

        // Post::create([
        //     'title' => 'Judul 2',
        //     'slug' => 'judul-2',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo, voluptate velit aperiam? Amet vero expedita nemo ea minima beatae sunt totam quos voluptatum magnam odit a at reprehenderit, libero recusandae provident voluptas eius! Debitis consectetur assumenda provident saepe nisi quisquam facere optio laboriosam possimus ipsam voluptates odit, sint placeat expedita. Impedit consectetur deleniti ab facere nobis. Delectus voluptates repellat modi! Veniam eaque, sunt corporis quia molestias labore assumenda beatae dolorum a numquam enim minima? Ea recusandae nihil soluta voluptatem asperiores accusantium fugiat ex deleniti libero non totam iure quibusdam odio nulla repudiandae dignissimos cupiditate, nobis eligendi consequuntur assumenda temporibus. Pariatur veritatis ex eveniet ab, culpa cupiditate iusto facilis consequuntur iste incidunt id, minima dolor? Incidunt similique sit optio? Tenetur error similique omnis. Facere nulla modi nisi minus recusandae obcaecati id assumenda labore dolor expedita quia excepturi qui, in itaque molestias quos, dolore vel repellendus asperiores quo cumque ab quod. Optio voluptatem reiciendis dolorem omnis aperiam.'
        // ]);

        // Post::create([
        //     'title' => 'Judul 3',
        //     'slug' => 'judul-3',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae unde in qui laboriosam voluptas suscipit illum ullam neque sequi animi possimus maxime aperiam, fugit beatae, cupiditate et aspernatur rem quo. Iure nisi veniam rerum repellendus eum perferendis! Recusandae ut asperiores sequi perspiciatis molestias blanditiis magni praesentium illum cupiditate vel repellendus accusamus alias quo, voluptate velit aperiam? Amet vero expedita nemo ea minima beatae sunt totam quos voluptatum magnam odit a at reprehenderit, libero recusandae provident voluptas eius! Debitis consectetur assumenda provident saepe nisi quisquam facere optio laboriosam possimus ipsam voluptates odit, sint placeat expedita. Impedit consectetur deleniti ab facere nobis. Delectus voluptates repellat modi! Veniam eaque, sunt corporis quia molestias labore assumenda beatae dolorum a numquam enim minima? Ea recusandae nihil soluta voluptatem asperiores accusantium fugiat ex deleniti libero non totam iure quibusdam odio nulla repudiandae dignissimos cupiditate, nobis eligendi consequuntur assumenda temporibus. Pariatur veritatis ex eveniet ab, culpa cupiditate iusto facilis consequuntur iste incidunt id, minima dolor? Incidunt similique sit optio? Tenetur error similique omnis. Facere nulla modi nisi minus recusandae obcaecati id assumenda labore dolor expedita quia excepturi qui, in itaque molestias quos, dolore vel repellendus asperiores quo cumque ab quod. Optio voluptatem reiciendis dolorem omnis aperiam.'
        // ]);

        
    }
}
