<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cbventa;

class CbventaController extends Controller
{
    public  function index(){
        $ventas = Cbventa::get();   // Devolverá todas las ventas
        return view('venta.index')->with('ventas', $ventas);
    }

    public function show($Idzapato){
    $venta = Cbventa::find($Idzapato); // Devuelve la ventas seleccionada por id.
    return view('venta.show')->with('venta', $venta);
    }

}
