<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banco;
use App\Http\Requests\BancosFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; 
use DB;

class BancoController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(Request $request){
        if($request){
          $query= trim($request->get('searchText'));
          $bancos=DB::table('bancos as b')
          ->select('b.id','b.nombre','b.contacto','b.numero','b.condicion')
          ->where('b.nombre','LIKE','%'.$query.'%')
          ->orderBy('b.id','desc')
          ->paginate(10);
    
          return view('banco.index',["bancos"=>$bancos,"searchText"=>$query]);
        }
      }
    
      public function create(){
        return view("banco.create");
      }
    
    public function store(/*BancoFormRequest $request*/ Request $request){
        $banco = new Banco;
        $banco->id = $request->get('id');
        $banco->nombre = $request->get('nombre');
        $banco->contacto = $request->get('contacto');
        $banco->numero = $request->get('numero');
        $banco->condicion = '1';
    
        $banco->save();
    
        return Redirect::to('banco/');
      }
    
      public function show($id){
        return view("banco.show",["banco"=>Banco::findOrFail($id)]);
      }
    
      public function edit($id){
        return view("banco.edit",["banco"=>Banco::findOrFail($id)]);
      }
    
      public function update(/*BancoFormRequest $request*/ Request $request, $id){
    
        $banco=Banco::findOrFail($id);
        $banco->nombre = $request->get('nombre');
        $banco->contacto = $request->get('contacto');
        $banco->numero = $request->get('numero');
        $banco->condicion = '1';
    
        $banco->update();
    
        return Redirect::to('banco/');
      }
    
      public function destroy($id){
        $banco = Banco::findOrFail($id);
        $banco->condicion='0';
        $banco->update();
        return Redirect::to('banco/');
      } 
}
