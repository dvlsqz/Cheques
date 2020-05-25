<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $fillable = ['nombre','contacto','numero','condicion'];

    public function cuenta()
    {
        return $this->hasMany('App\Cuenta'); 
    }
}
