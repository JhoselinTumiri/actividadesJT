<?php

namespace App\Http\Controllers;

use App\Models\Actividad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;//suport por defecto?

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades', ['actividades'=>$actividades]);
    }

    public function addActividades(Request $request)
    {
        
    }

    public function deleteActividades(Request $request)
    {
        
    }
}
