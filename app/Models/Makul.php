<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table      = 'makul';
    protected $fillable   = ['id', 'kode_makul', 'nama_makul', 'sks'];
    protected $primarykey = 'id';
    public $timestamps    = false;
}
