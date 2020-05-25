<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chequera;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ChequeraFormRequest;
use Illuminate\Support\Facades\Input;
use DB;

class ChequeraController extends Controller
{
      public function __construct(){
        $this->middleware('auth');
      } 
    
      public function index(Request $request){
        if($request){
          $query= trim($request->get('searchText'));
          $chequeras=DB::table('chequeras as ch')
          ->join('cuentas as c', 'ch.idcuenta','=','c.id')
          ->join('bancos as b', 'c.idbanco','=','b.id')
          ->select('ch.id','ch.chequera','ch.observaciones','ch.ch_inicio','ch.ch_fin','c.condicion',DB::raw("c.no_cuenta as cuenta"),DB::raw("b.nombre as banco"))
          ->where('ch.chequera','LIKE','%'.$query.'%')
          ->orderBy('ch.id','desc')
          ->paginate(10);
    
          return view('chequera.index',["chequeras"=>$chequeras, "searchText"=>$query]);
        }
      }
    
      public function create(){
        $cuentas=DB::table('cuentas as c')
          ->join('bancos as b', 'c.idbanco','=','b.id')
          ->select('c.id','c.no_cuenta',DB::raw("b.nombre as banco"))
          ->get();
        return view("chequera.create",["cuentas"=>$cuentas]);
      }
    
      public function store(/*ChequeraFormRequest $request*/ Request $request){
        $chequera = new Chequera;
        $chequera->id = $request->get('id');
        $chequera->chequera= $request->get('chequera');
        $chequera->observaciones = $request->get('observaciones');
        $chequera->ch_inicio= $request->get('ch_inicio');
        $chequera->ch_fin = $request->get('ch_fin');
        $chequera->idcuenta = $request->get('idcuenta');
        $chequera->condicion = '1';
    
        $chequera->save();
    
        return Redirect::to('chequera/');
      }
    
      public function show($id){
        return view("chequera.show",["chequera"=>Chequera::findOrFail($id)]);
      }
    
      public function edit($id){
        return view("chequera.edit",["chequera"=>Chequera::findOrFail($id)]);
      }
    
      public function update(/*ChequeraFormRequest $request*/ Request $request, $id){
    
        $chequera=Chequera::findOrFail($id);
        $chequera->chequera= $request->get('chequera');
        $chequera->observaciones = $request->get('observaciones');
        $chequera->ch_inicio= $request->get('ch_inicio');
        $chequera->ch_fin = $request->get('ch_fin');
        $chequera->idcuenta = $request->get('idcuenta');
        $chequera->condicion = '1';
    
        $chequera->update();
    
        return Redirect::to('chequera/');
      }
    
      public function destroy($id){
        $chequera = Chequera::findOrFail($id);
        $chequera->condicion ='0';
        $chequera->update();
        return Redirect::to('chequera/');
      } 
}
