<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}