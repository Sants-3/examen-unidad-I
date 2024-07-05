<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function verContactos(){
        $contactos = Contacto::all();
        return view("vercontactos",compact("contactos"));
    }

    public function crearContacto() {
        return view("agregarcontacto");
    }

    public function guardarContacto(Request $request) {
        $contactos = new Contacto();
        $contactos->id = $request->id;
        $contactos->codigoEntrada = $request->codigo;
        $contactos->nombre = $request->nombre;
        $contactos->apellido = $request->apellido;
        $contactos->telefono = $request->telefono;

        $contactos->save();

        return redirect(route("directorio.ver"));
    }    
}
