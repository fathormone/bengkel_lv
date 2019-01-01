<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Hasil_motor extends Model
{
    use SoftDeletes;
 
    protected $fillable = [
        'nama', 'spesifikasi'
    ];
    protected $dates = ['deleted_at'];
}
