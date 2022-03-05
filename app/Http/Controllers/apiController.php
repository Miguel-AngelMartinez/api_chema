<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apimodel;
class apiController extends Controller
{
    public function index()
    {
        $contenido= apimodel::all();
        $unidades=[];
        foreach ($contenido as $contenidos) {
             $unidades[]=[
                'nombre'=>$contenidos->nombre,
                'descripcion'=>$contenidos->descripcion,
                'img'=>$contenidos->img,
                
             ];
             
        } 
        return view('index',['unidades'=>$unidades]);
    }
    public function index2()
    {
        $contenido=apimodel::all();
        return response()->json(["estatus"=>"ok","unidades"=>$contenido]);
    }
}
