<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' =>1,
            'genre' => 'Drama',
            'deskripsi' => 'Example',
        ],
        [
            
            'no' =>2,
            'genre' => 'Action',
            'deskripsi' => 'Example',
        ],
        [
           
            'no' =>3,
            'genre' => 'Drama',
            'deskripsi' => 'Example',
        ],
        [
           
            'no' =>4,
            'genre' => 'Drama',
            'deskripsi' => 'Example',
        ],
        [
            
            'no' =>5,
            'genre' => 'Romance',
            'deskripsi' => 'Example',
        ],
    ];

    public function getAllGenres() {
        return $this->genres;
    }

}