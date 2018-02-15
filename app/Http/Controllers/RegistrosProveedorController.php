<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RegProveedor;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistrosProveedorFormRequest;
use DB;

class RegistrosProveedorController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
    		$proveedores=DB::table('proveedor')->where('proveedor','LIKE','%'.$query.'%')
    		->where('privilegio','=','0')
    		->orderBy('id','desc')
    		->paginate(7);
    		return view('registrosproveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view("registrosproveedor.create");
    }
    public function store(RegistrosProveedorFormRequest $request){
    	$proveedor=new RegProveedor;
    	$proveedor->correo=$request->get('correo');
    	$proveedor->password=$request->get('password');
    	$proveedor->proveedor=$request->get('proveedor');
    	$proveedor->telefono=$request->get('telefono');
    	$proveedor->direccion=$request->get('direccion');
    	$proveedor->privilegio='0';
    	$proveedor->save();
    	return Redirect::to('registrosproveedor');

    }
    public function show($id){
    	return view("registrosproveedor.show",["proveedor"=>RegProveedor::findOrFail($id)]);
    }
    public function edit($id){
    	return view("registrosproveedor.edit",["proveedor"=>RegProveedor::findOrFail($id)]);
    }
    public function update(RegistrosProveedorFormRequest $request,$id){
    	$proveedor=RegProveedor::findOrFail($id);
    	$proveedor->correo=$request->get('correo');
    	$proveedor->password=$request->get('password');
    	$proveedor->proveedor=$request->get('proveedor');
    	$proveedor->telefono=$request->get('telefono');
    	$proveedor->direccion=$request->get('direccion');
    	$proveedor->update();
    	return Redirect::to('registrosproveedor');
    }
   // public function destroy(){

    //}

}
//--registrar proveedor ruta para REGISTRO DE PROVEEDORES 15-02-18 !!Daniel Alanis
