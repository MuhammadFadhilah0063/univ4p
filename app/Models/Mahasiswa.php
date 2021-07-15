<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table      = 'mahasiswa';
    // protected $fillable   = ['user_id', 'kode_makul', 'nama_makul', 'sks'];
    protected $guarded = ['id'];
    protected $primarykey = 'id';
    public $timestamps    = false;
}
