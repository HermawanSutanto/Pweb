<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\gudang;
use App\Models\Category;
use App\Models\Organisasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Hermawan Sutanto',
        //     'email' => 'wawan@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        // User::create([
        //     'name' => 'Bima Satria',
        //     'email' => 'Bima123@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        // User::factory(3)->create();
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        gudang::create([
            'namaBarang' => 'Bola',
            'stok' => 12
        ]);
        gudang::create([
            'namaBarang' => 'Raket',
            'stok' => 12
        ]);
        gudang::create([
            'namaBarang' => 'Gitar',
            'stok' => 12
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Organisasi::create([
            'namaOrganisasi' => 'BEM',
        ]);
        Organisasi::create([
            'namaOrganisasi' => 'HIMASIF',
        ]);
        Organisasi::create([
            'namaOrganisasi' => 'HIMATIF',
        ]);
        Organisasi::create([
            'namaOrganisasi' => 'HMIF',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsum dignissimos nemo harum doloremqueexercitationem odit enim eligendi optio sint accusamus aliquam unde dolores molestiae,. at placeat error? Non itaque consequatur pariatur possimus beatae et? Dignissimos similique necessitatibusdoloremque harum alias ex eaque. Illum reiciendis corrupti ratione iure non dignissimos. velit? Veritatis maiores et dolore expedita vitae, consectetur a quo, explicabo asperiores exercitationem velittemporibus qui deserunt distinctio,</p><p> ipsa eligendi facilis reprehenderit modi illum. quidem iure obcaecati molestias est! Assumenda velit omnis eveniet nesciunt. Accusamus earum itaque perferendisodit ipsum eveniet asperiores officia ducimus vel veritatis quos sapiente vitae illum,. temporibus quam corporis culpa tempore nihil tenetur. Facere inventore sunt reiciendis dolores provident, eosquibusdam quae molestiae ipsam, officia minima.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1


        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsum dignissimos nemo harum doloremqueexercitationem odit enim eligendi optio sint accusamus aliquam unde dolores molestiae,. at placeat error? Non itaque consequatur pariatur possimus beatae et? Dignissimos similique necessitatibusdoloremque harum alias ex eaque. Illum reiciendis corrupti ratione iure non dignissimos. velit? Veritatis maiores et dolore expedita vitae, consectetur a quo, explicabo asperiores exercitationem velittemporibus qui deserunt distinctio,</p><p> ipsa eligendi facilis reprehenderit modi illum. quidem iure obcaecati molestias est! Assumenda velit omnis eveniet nesciunt. Accusamus earum itaque perferendisodit ipsum eveniet asperiores officia ducimus vel veritatis quos sapiente vitae illum,. temporibus quam corporis culpa tempore nihil tenetur. Facere inventore sunt reiciendis dolores provident, eosquibusdam quae molestiae ipsam, officia minima.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1


        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum Ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsum dignissimos nemo harum doloremqueexercitationem odit enim eligendi optio sint accusamus aliquam unde dolores molestiae,. at placeat error? Non itaque consequatur pariatur possimus beatae et? Dignissimos similique necessitatibusdoloremque harum alias ex eaque. Illum reiciendis corrupti ratione iure non dignissimos. velit? Veritatis maiores et dolore expedita vitae, consectetur a quo, explicabo asperiores exercitationem velittemporibus qui deserunt distinctio,</p><p> ipsa eligendi facilis reprehenderit modi illum. quidem iure obcaecati molestias est! Assumenda velit omnis eveniet nesciunt. Accusamus earum itaque perferendisodit ipsum eveniet asperiores officia ducimus vel veritatis quos sapiente vitae illum,. temporibus quam corporis culpa tempore nihil tenetur. Facere inventore sunt reiciendis dolores provident, eosquibusdam quae molestiae ipsam, officia minima.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum Keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ipsum dignissimos nemo harum doloremqueexercitationem odit enim eligendi optio sint accusamus aliquam unde dolores molestiae,. at placeat error? Non itaque consequatur pariatur possimus beatae et? Dignissimos similique necessitatibusdoloremque harum alias ex eaque. Illum reiciendis corrupti ratione iure non dignissimos. velit? Veritatis maiores et dolore expedita vitae, consectetur a quo, explicabo asperiores exercitationem velittemporibus qui deserunt distinctio,</p><p> ipsa eligendi facilis reprehenderit modi illum. quidem iure obcaecati molestias est! Assumenda velit omnis eveniet nesciunt. Accusamus earum itaque perferendisodit ipsum eveniet asperiores officia ducimus vel veritatis quos sapiente vitae illum,. temporibus quam corporis culpa tempore nihil tenetur. Facere inventore sunt reiciendis dolores provident, eosquibusdam quae molestiae ipsam, officia minima.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
