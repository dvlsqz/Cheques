<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor;
use App\Http\Requests\ProveedoresFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input; 
use DB;

class ProveedorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
    
      public function index(Request $request){
        if($request){
          $query= trim($request->get('searchText'));
          $proveedores=DB::table('proveedores as p')
          ->select('p.id','p.nombre','p.numero','p.condicion')
          ->where('p.nombre','LIKE','%'.$query.'%')
          ->orderBy('p.id','desc')
          ->paginate(10);
    
          return view('proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
        }
      }
    
      public function create(){
        return view("proveedor.create");
      }
    
    public function store(/*ProveedorFormRequest $request*/ Request $request){
        $proveedor = new Proveedor;
        $proveedor->id = $request->get('id');
        $proveedor->nombre = $request->get('nombre');
        $proveedor->numero = $request->get('numero');
        $proveedor->condicion = '1';
    
        $proveedor->save();
    
        return Redirect::to('proveedor/');
      }
    
      public function show($id){
        return view("proveedor.show",["proveedor"=>Proveedor::findOrFail($id)]);
      }
    
      public function edit($id){
        return view("proveedor.edit",["proveedor"=>Proveedor::findOrFail($id)]);
      }
    
      public function update(/*ProveedorFormRequest $request*/ Request $request, $id){
    
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->nombre = $request->get('nombre');
        $proveedor->numero = $request->get('numero');
        $proveedor->condicion = '1';
    
        $proveedor->update();
    
        return Redirect::to('proveedor/');
      }
    
      public function destroy($id){
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->condicion='0';
        $proveedor->update();
        return Redirect::to('proveedor/');
      }
}
