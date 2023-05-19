<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            "no" => 1,
            "judul" => "The Shawshank Redemption",
            "poster" => "image.png",
            "genre" => "Drama",
            "negara" => "USA",
            "tahun" => "1994",
            "rating" => "9.8",
        ],
        [
            "no" => 2,
            "judul" => "Forrest Gump",
            "poster" => "image.png",
            "genre" => "Drama",
            "negara" => "USA",
            "tahun" => "1994",
            "rating" => "9.8",
        ],
        [
            "no" => 3,
            "judul" => "The Godfather",
            "poster" => "image.png",
            "genre" => "Drama",
            "negara" => "USA",
            "tahun" => "1972",
            "rating" => "7.7",
        ],
        [
            "no" => 4,
            "judul" => "Seven Samurai",
            "poster" => "image.png",
            "genre" => "Action",
            "negara" => "Japan",
            "tahun" => "1954",
            "rating" => "8.6",
        ],
        [
            "no" => 5,
            "judul" => "Avengers: Endgame",
            "poster" => "image.png",
            "genre" => "Action",
            "negara" => "USA",
            "tahun" => "2019",
            "rating" => "8.4",
        ]
    ];

    public function getAllmovies()
    {
        return $this->movies;
    }
}
