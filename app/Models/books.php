<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    
    protected $fillable = [
    
        'author',
        'title',
        'pieces',
    ];

    public function copies()
    {
        return $this->hasMany(copies::class, 'book_id', 'book_id');
    }
}
