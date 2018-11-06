<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['nome', 'nivel'];

    public function usuarios() {
        return $this->belongsToMany(Usuario::class);
    }
}
