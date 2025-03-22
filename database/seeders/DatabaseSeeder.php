<?php

namespace Database\Seeders;

use App\Models\Cottage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected $imageGallery = [
        'https://cdn.devdojo.com/images/june2023/mountains-01.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-02.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-03.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-04.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-05.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-06.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-07.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-08.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-09.jpeg',
        'https://cdn.devdojo.com/images/june2023/mountains-10.jpeg'
    ];

    public $data = [
        [
              'https://cdn.devdojo.com/images/june2023/mountains-01.jpeg',
              'https://images.unsplash.com/photo-1604601638406-edc29b54dcf7?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
              'https://images.unsplash.com/photo-1509648033237-ae6ef40c2838?q=80&w=2050&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-02.jpeg',
            'https://images.unsplash.com/photo-1576874748772-584aa2bee2d4?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1563714193017-5a5fb60bc02b?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-03.jpeg',
            'https://images.unsplash.com/photo-1595877244574-e90ce41ce089?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1476087433162-979f1a57093f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
           'https://cdn.devdojo.com/images/june2023/mountains-04.jpeg',
           'https://images.unsplash.com/photo-1595521624992-48a59aef95e3?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
           'https://images.unsplash.com/photo-1631167911940-90c454e3ad19?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
                'https://cdn.devdojo.com/images/june2023/mountains-05.jpeg',
                'https://images.unsplash.com/photo-1565024144003-1e575b05564e?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'https://images.unsplash.com/photo-1518108312238-a611d811f835?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'

        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-06.jpeg',
            'https://images.unsplash.com/photo-1579627559220-1c543a79a0a6?q=80&w=2047&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1579627559431-e9082454f2c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-07.jpeg',
            'https://images.unsplash.com/photo-1592310492886-05cfb98369c3?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1622209470866-3692e27d665c?q=80&w=2113&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-08.jpeg',
            'https://images.unsplash.com/photo-1587395047498-5eeacfe58f62?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1611022914922-2073d77f98fd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-09.jpeg',
            'https://images.unsplash.com/photo-1638658978520-1e5b88ed75bf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1638658978541-17a4532e99ed?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'https://cdn.devdojo.com/images/june2023/mountains-10.jpeg',
            'https://images.unsplash.com/photo-1596217188492-e7fa61ed0665?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1627551884732-6a2c5b0ee9f7?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ]
    ];


    public function run(): void
    {
    //    Cottage::factory()->create([
    //         'user_id' => User::factory()->create()->id,
    //         'title' => $this->faker->sentence(3),
    //         'description' => $this->faker->paragraph(4),
    //         'location' => $this->faker->city(),
    //         'address' => $this->faker->address(),
    //         'price' => $this->faker->randomFloat(2, 50, 500),
    //         'image_path' => $this->faker->randomElement($this->imageGallery),
    //    ])

    foreach ($this->data as $key => $value) {
        Cottage::factory()->create([
            'user_id' => User::factory()->create()->id,
            'title' => fake('en_US')->sentence(),
            'description' => fake('en_US')->paragraph(4),
            'location' => fake()->city(),
            'address' => fake()->address(),
            'price' => fake()->randomFloat(2, 50, 500),
            'image_path' => $this->imageGallery[$key],
            'gallery' => json_encode($value)
        ]);

    };
}

}
