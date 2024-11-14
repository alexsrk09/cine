<?php

namespace App\Http\Controllers;

use App\Models\Silla;
use Illuminate\Http\Request;

class SillaController extends Controller
{
    public function create(Request $request){
        /////////////////////////////////////////////////////////////////////////
        // comprobar si $request->id es un numero y existe en la base de datos
        /////////////////////////////////////////////////////////////////////////
        $silla = new Silla();
        $silla->sala_id = $request->sala_id;
        $silla->save();
        return $silla;
    }
    // Route::get('getsillas/{id}', [SillaController::class, 'getSillas']);
    public function getSillas($id){
        /////////////////////////////////////////////////////////////////////////
        // comprobar si $id es un numero y existe en la base de datos
        /////////////////////////////////////////////////////////////////////////
        $data = Silla::where('sala_id', $id)->get();
        return $data;
    }
    public function update(Request $request){
        /////////////////////////////////////////////////////////////////////////
        // comprobar si $request->id es un numero y existe en la base de datos
        /////////////////////////////////////////////////////////////////////////
        $silla = Silla::find($request->id);
        $silla->ocupada = !$silla->ocupada;
        $silla->save();
        return $silla;
    }
    public function delete(Request $request){
        /////////////////////////////////////////////////////////////////////////
        // comprobar si $request->id es un numero y existe en la base de datos
        /////////////////////////////////////////////////////////////////////////
        $silla = Silla::find($request->id);
        $silla->delete();
        return $silla;
    }
}
