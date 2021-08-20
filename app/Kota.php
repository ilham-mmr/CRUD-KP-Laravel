<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $guarded = [];
    public $table = 'kota';


    public function negara()
    {
        return $this->belongsTo(Negara::class,'negara_id','id');
    }

}
