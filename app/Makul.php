<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table      = 'makul';
    protected $guarded = ['id'];
    protected $primarykey = 'id';
    public $timestamps    = false;

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'makul_id', 'id');
    }
}
