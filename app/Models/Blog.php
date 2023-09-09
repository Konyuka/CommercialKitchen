<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'excerpt',
        'cover',
        'content'
    ];


    public function categories()
    {
        return $this->hasOne(Categories::class, 'category_id');
    }

}
