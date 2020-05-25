<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cuenta;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CuentaFormRequest;
use Illuminate\Support\Facades\Input;
use DB;
 

class CuentaController extends Controller
{
      public function __construct(){
        $this->middleware('auth');
      } 
    
      public function index(Request $request){
        if($request){
          $query= trim($request->get('searchText'));
          $cuentas=DB::table('cuentas as c')
          ->join('bancos as b', 'c.idbanco','=','b.id')
          ->select('c.id','c.no_cuenta','c.tipo','c.saldo','c.condicion',DB::raw("b.nombre as banco"))
          ->where('c.no_cuenta','LIKE','%'.$query.'%')
          ->orderBy('c.id','desc')
          ->paginate(10);
    
          return view('cuenta.index',["cuentas"=>$cuentas, "searchText"=>$query]);
        }
      }
    
      public function create(){
        $bancos=DB::table('bancos')->get();
        return view("cuenta.create",["bancos"=>$bancos]);
      }
    
      public function store(/*CuentaFormRequest $request*/ Request $request){
        $cuenta = new Cuenta;
        $cuenta->id = $request->get('id');
        $cuenta->no_cuenta = $request->get('no_cuenta');
        $cuenta->tipo = $request->get('tipo');
        $cuenta->saldo = $request->get('saldo');
        $cuenta->idbanco = $request->get('idbanco');
        $cuenta->condicion = '1';
    
        $cuenta->save();
    
        return Redirect::to('cuenta/');
      }
    
      public function show($id){
        return view("cuenta.show",["cuenta"=>Cuenta::findOrFail($id)]);
      }
    
      public function edit($id){
        return view("cuenta.edit",["cuenta"=>Cuenta::findOrFail($id)]);
      }
    
      public function update(/*CuentaFormRequest $request*/ Request $request, $id){
    
        $cuenta=Cuenta::findOrFail($id);
        $cuenta->no_cuenta = $request->get('no_cuenta');
        $cuenta->tipo = $request->get('tipo');
        $cuenta->saldo = $request->get('saldo');
        $cuenta->idbanco = $request->get('idbanco');
        $cuenta->condicion = '1';
    
        $cuenta->update();
    
        return Redirect::to('cuenta/');
      }
    
      public function destroy($id){
        $cuenta = Cuenta::findOrFail($id);
        $cuenta->condicion ='0';
        $cuenta->update();
        return Redirect::to('cuenta/');
      }
    
}
