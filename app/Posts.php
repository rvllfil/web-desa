<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['judul', 'content', 'thumbnail', 'slug'];
}
