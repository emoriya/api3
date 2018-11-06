<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'idade', 'cidade_id'];

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
