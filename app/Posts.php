<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['judul', 'content', 'thumbnail', 'slug'];

    public function comments()
    {
        return $this->hasMany(Comments::class)->whereNull('parent_id');
    }
}
