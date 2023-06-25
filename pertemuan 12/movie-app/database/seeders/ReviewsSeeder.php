<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => '1',
            'user' => 'image.png',
            'rating' => 1,
            'review' => 'USA',
            'tanggal' => 2021-05-6,
            
        ]);

        Review::create([
            'movie_id' => '2',
            'user' => 'image.png',
            'rating' => 3,
            'review' => 'USA',
            'tanggal' =>2021-05-6 ,
           
        ]);

        Review::create([
            'movie_id' => '1',
            'user' => 'image.png',
            'rating' => 2,
            'review' => 'USA',
            'tanggal' =>2021-05-6 ,
            
        ]);

        Review::create([
            'movie_id' => '3',
            'user' => 'image.png',
            'rating' => 5,
            'review' => 'USA',
            'tanggal' =>2021-05-6 ,
            
        ]);

        Review::create([
            'movie_id' => '3',
            'user' => 'image.png',
            'rating' => 5,
            'review' => 'USA',
            'tanggal' =>2021-05-6 ,
           
        ]);
    }
}
