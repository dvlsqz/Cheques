<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chequera extends Model
{
    protected $fillable = ['chequera','observaciones','ch_inicio','ch_fin','condicion','idcuenta'];

    public function banco(){
        return $this->belongsTo('App\Banco');
    }

    public function cheque()
    {
        return $this->hasMany('App\Cheque'); 
    }


}
