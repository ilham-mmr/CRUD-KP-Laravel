<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    public $table = 'negara';
    protected $guarded = [];

    public function kota(){
     return $this->hasMany(Kota::class);
    }

}
