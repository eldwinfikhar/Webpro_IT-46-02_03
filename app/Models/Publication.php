<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    protected $fillable = ['title', 'author', 'year', 'publisher', 'link'];
}
