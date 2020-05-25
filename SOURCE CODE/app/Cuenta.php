<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable = ['no_cuenta','tipo','saldo','condicion','idbanco'];

    public function banco(){
        return $this->belongsTo('App\Banco');
    }

    public function chequera()
    {
        return $this->hasMany('App\Chequera'); 
    }
}
