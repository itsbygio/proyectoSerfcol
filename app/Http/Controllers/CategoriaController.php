<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function __construct()
    {

    }
    public function getCategorias()
    {
       return  Categoria::all();
    }

    public function index()
    {
        return view('categorias.index',[
            'categorias'=>Categoria::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'titulo'=> 'required',
        ]);
        */
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

       Categoria::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }

         return  $categoria->update($request->all());

    }
    public function ShowProducts($categoria){

        $categorias= Categoria::all();
        $category =  Categoria::where('titulo',$categoria)->firstOrFail();
        $productos = Producto::where('id_categoria', $category->id)->get();
        return $productos;
    }
    public function ListProducts(request $request){
            return view('livewire.Catalogo.lcategorias');
        // $categorias= Categoria::all();
        // $category =  Categoria::where('titulo',$categoria)->firstOrFail();
        // $productos = Producto::where('id_categoria', $category->id)->get();
        // return view('categorias.CategoryList',[
        //     'productos'=> $productos,
        //     'categorias'=>  $categorias
        // ]);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $ids)
    {  
        //Convertimos el conjunto de ids en string a array

        $ids = explode(",", $ids);
        foreach($ids as $id){
            Categoria::where('id',$id)->delete();

        }

    }
}
