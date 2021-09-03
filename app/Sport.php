<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model {

    public function negaras() {
        return $this->belongsToMany(Negara::class, 'negara_sport', 'sport_id', 'negara_id');
    }
}
