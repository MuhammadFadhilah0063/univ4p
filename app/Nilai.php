<?php

namespace App;

use App\Mahasiswa;
use App\Makul;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['user_id', 'makul_id', 'nilai'];
    public $timestamps    = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'user_id', 'id');
    }

    public function makul()
    {
        return $this->belongsTo(Makul::class, 'makul_id', 'id');
    }
}
