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
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 1984,
            'rating' => 9.8,
        ]);

        Review::create([
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre_id' => 3,
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 8.8,
        ]);

        Review::create([
            'judul' => 'Parasite',
            'poster' => 'image.png',
            'genre_id' => 2,
            'negara' => 'USA',
            'tahun' => 1976,
            'rating' => 8.8,
        ]);

        Review::create([
            'judul' => 'Inception',
            'poster' => 'image.png',
            'genre_id' => 5,
            'negara' => 'USA',
            'tahun' => 1988,
            'rating' => 9.0,
        ]);

        Review::create([
            'judul' => 'Avengers',
            'poster' => 'image.png',
            'genre_id' => 4,
            'negara' => 'USA',
            'tahun' => 1984,
            'rating' => 8.7,
        ]);
    }
}
