<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    protected $fillable = [
      'nama_kategori','slug',
    ];
     public $timestamps = true;
}
