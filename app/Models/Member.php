<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name', 'nim', 'major', 'position', 'linked',
        'github', 'instagram', 'email', 'image'
    ];
}
