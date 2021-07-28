<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Contacto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('producto.index')->with('productos', $producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $productos = new Producto();
        $productos->nombre = $request->get('nombre');
        $productos->imagen = $request->get('imagen');
        $productos->descripcion = $request->get('descripcion');
        $productos->precio = $request->get('precio');
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'storage/uploads/';
            $filename = time() .'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $productos->imagen = $destinationPath.$filename;
        }
        $productos->save();

        return redirect()->action('App\Http\Controllers\ProductoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contactos = Contacto::all();
        return view('producto.contacto')->with('productos', $contactos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $producto->nombre = $request->get('nombre');
        $producto->imagen = $request->get('imagen');
        $producto->descripcion = $request->get('descripcion');
        $producto->precio = $request->get('precio');
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'storage/uploads/';
            $filename = time() .'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath.$filename;
        }
       
        $producto->save();
        return redirect()->action('App\Http\Controllers\ProductoController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->back();
    }
}
