<?php

namespace App\Http\Controllers;
use App;
use App\Models\Sala;
use App\Models\Silla;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    // crud Model Sala
    public function create()
    {
        echo "create";
        $sala = new Sala();
        $sala->nombre = $_POST['nombre'];
        $sala->save();
        return $sala;
    }
    public function getAll(){
        return Sala::all();
    }
    public function delete(Request $request){
        /////////////////////////////////////////////////////////////////////////
        // comprobar si $request->id es un numero y existe en la base de datos
        /////////////////////////////////////////////////////////////////////////

        $sala = Sala::find($request->id);
        $sillas = App\Models\Silla::where('sala_id', $request->id)->get();
        foreach ($sillas as $silla) {
            $silla->delete();
        }
        $sala->delete();
        return $sala;
    }
    // Route::get('getsillas/{id}', [SalaController::class, 'getSillas']);
}
