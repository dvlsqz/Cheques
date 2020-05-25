<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    protected $fillable = ['no_cheque','monto','monto_letras','lugar','fecha','condicion','idproveedor','idchequera'];

    public function chequera(){
        return $this->belongsTo('App\Chequera');
    }

}
