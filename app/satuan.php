<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $fillable = [
        'id_satuan','nama_satuan'
    ];
    public $timestamps = true;
}
