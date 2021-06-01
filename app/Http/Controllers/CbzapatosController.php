<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cbzapatos;
use App\zapatos;

class CbzapatosController extends Controller
{
    public  function index(){
        $zapatos = Cbzapatos::get();   // Devolverá todas las zapatos
        return view('zapatos.index')->with('zapatos', $zapatos);
    }

    public function show($Idzapato){
    $zapatos = Cbzapatos::find($Idzapato); // Devuelve la zapatos seleccionada por id.
    return view('zapatos.show')->with('zapatos', $zapatos);
    }

    

    public $timestamps = false;

    public function create()
    {
        //
        return view('zapatos.create');
    }

    /**
    *	Store a newly created resource in storage.
    *
    *	@param \Illuminate\Http\Request $request
    *	@return \Illuminate\Http\Response
    */
    public function store(Request $request)
    
    {
        //
        $this->validate($request,['calzado'=>'required', 'tipo'=>'required','color'=>'required', 'talla'=>'required', 'marca'=>'required', 'genero'=>'required', 'edades'=>'required']);
        zapatos::create($request->all());
        return redirect()->route('zapatos.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
    *	Show the form for editing the specified resource.
    *
    *	@param int $Idzapato
    *	@return \Illuminate\Http\Response
    */

    public function edit($Idzapato)
    {
        $zapatos = zapatos::whereIdzapato($Idzapato)->firstOrFail();
        return view('zapatos.edit', compact('zapatos'));
    }

    public function update(Request $request, $Idzapato)
    {
        $zapatos = zapatos::whereIdzapato($Idzapato)->firstOrFail();
        $zapatos->calzado = $request->get('calzado');
        $zapatos->tipo = $request->get('tipo');
        $zapatos->color = $request->get('color');
        $zapatos->talla = $request->get('talla');
        $zapatos->marca = $request->get('marca');
        $zapatos->genero = $request->get('genero');
        $zapatos->edades = $request->get('edades');
        
        $zapatos->save();
        return redirect(action('CbzapatosController@edit', $zapatos->Idzapato))->with($Idzapato . ' ha sido actualizado');
    }

    
    /**
    *	Update the specified resource in storage.
    *
    *	@param \Illuminate\Http\Request $request
    *	@param int $Idzapato
    *	@return \Illuminate\Http\Response
    */
    
    
    /**
    *	Remove the specified resource from storage.
    *
    *	@param int $Idzapato
    *	@return \Illuminate\Http\Response
    */
    public function destroy($Idzapato)
    {
        $zapatos = zapatos::find($Idzapato);
        
        $zapatos->delete();
        return redirect('/zapatos');
    }
}



