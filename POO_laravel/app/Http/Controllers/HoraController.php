<?php

namespace App\Http\Controllers;

use App\Model\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{

    function Hora($request){

        $hora = setHora($request->get('hora'), $request->get('minuto'), $request->get('segundo'));

        return view('welcome', compact('hora'));
    }

}
