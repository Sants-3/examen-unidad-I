<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    public function obtenerTodos(){
        $directorios = Directorio::all();

        return view("directorio",compact("directorios"));
    }

    public function crear() {
        return view("crearEntrada");
    }

    public function guardarDirectorio(Request $request) {
        $directorio = new Directorio();
        $directorio->codigoEntrada = $request->codigoEntrada;
        $directorio->nombre = $request->nombre;
        $directorio->apellido = $request->apellido;
        $directorio->correo = $request->correo;
        $directorio->telefono = $request->telefono;

        $directorio->save();

        return redirect(route("directorio.ver"));
    }    

}
