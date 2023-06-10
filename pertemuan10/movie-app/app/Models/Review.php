<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable =['film', 'user', 'rating', 'review', 'tanggal'];
    
    public function review()
    {
        return $this->beLongsTo(Genre::class, 'review_id');
    }
}