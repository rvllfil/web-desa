<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['nama', 'nik', 'no_wa', 'jenis_surat', 'pesan'];
    protected $table = 'services';
}
