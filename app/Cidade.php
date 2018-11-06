<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
