<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cheque;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ChequeFormRequest;
use Illuminate\Support\Facades\Input;
use DB;


class ChequeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      } 
    
      public function index(Request $request){
        if($request){
          $query= trim($request->get('searchText'));
          $cheques=DB::table('cheques as che')
          ->join('proveedores as p', 'che.idproveedor','=','p.id')
          ->join('chequeras as ch', 'che.idchequera','=','che.id')
          ->select('che.id','che.no_cheque','che.monto','che.lugar','che.fecha','che.condicion',DB::raw("ch.chequera as chequera"),DB::raw("p.nombre as proveedor"))
          ->where('che.no_cheque','LIKE','%'.$query.'%')
          ->orderBy('che.id','desc')
          ->paginate(10);
    
          return view('cheque.index',["cheques"=>$cheques, "searchText"=>$query]);
        }
      }
    
      public function create(){
        $chequeras=DB::table('chequeras as ch')
        ->join('cuentas as c', 'ch.idcuenta','=','c.id')
        ->join('bancos as b', 'c.idbanco','=','b.id')
        ->select('ch.id','ch.chequera',DB::raw("c.no_cuenta as cuenta"),DB::raw("b.nombre as banco"))
        ->get();
        $proveedores=DB::table('proveedores')->get();
        return view("cheque.create",["chequeras"=>$chequeras,'proveedores'=>$proveedores]);
      }
    
      public function store(/*ChequeFormRequest $request*/ Request $request){
        $cheque = new Cheque;
        $cheque->id = $request->get('id');
        $cheque->no_cheque= $request->get('no_cheque');
        $cheque->monto= $request->get('monto');
        $cheque->monto_letras= $request->get('monto_letras');
        $cheque->lugar= $request->get('lugar');
        $cheque->fecha = $request->get('fecha');
        $cheque->idchequera = $request->get('idchequera');
        $cheque->idproveedor = $request->get('idproveedor');
        $cheque->condicion = '1';
    
        $cheque->save();
    
        return Redirect::to('cheque/');
      }
    
      public function show($id){
        return view("cheque.show",["cheque"=>Cheque::findOrFail($id)]);
      }
    
      public function edit($id){
        return view("cheque.edit",["cheque"=>Cheque::findOrFail($id)]);
      }
    
      public function update(/*ChequeFormRequest $request*/ Request $request, $id){
    
        $cheque=Cheque::findOrFail($id);
        $cheque->no_cheque= $request->get('no_cheque');
        $cheque->monto= $request->get('monto');
        $cheque->monto_letras= $request->get('monto_letras');
        $cheque->lugar= $request->get('lugar');
        $cheque->fecha = $request->get('fecha');
        $cheque->idchequera = $request->get('idchequera');
        $cheque->idproveedor = $request->get('idproveedor');
        $cheque->condicion = '1';
    
        $cheque->update();
    
        return Redirect::to('cheque/');
      }
    
      public function destroy($id){
        $cheque = Cheque::findOrFail($id);
        $cheque->condicion ='0';
        $cheque->update();
        return Redirect::to('cheque/');
      } 
}
