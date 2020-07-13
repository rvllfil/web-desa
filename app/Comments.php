<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $guarded = [];

    public function child()
    {
        return $this->hasMany(Comments::class, 'parent_id');
    }
}
