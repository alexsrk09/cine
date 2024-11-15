<?php

namespace App\Http\Controllers;
use App;
use App\Models\Sala;
use App\Models\Silla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalaController extends Controller
{
    // crud Model Sala
    public function create()
    {
        $sala = new Sala();
        $sala->nombre = $_POST['nombre'];
        $sala->descripcion = $_POST['descripcion'];
        $sala->save();
        return $sala;
    }
    public function getAll(){
        return Sala::all();
    }
    public function delete(Request $request){

        $data =[
            "id_sala" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_sala' => 'required|integer',
        ],
        []);

        if($validator -> passes() && $request -> id != -1){
            $sala = Sala::find($request->id);
            $sillas = App\Models\Silla::where('sala_id', $request->id)->get();
            foreach ($sillas as $silla) {
                $silla->delete();
            }
            $sala->delete();
            return $sala;
        }else{
            return "La Sala no existe";
        }

    }
    // Route::get('getsillas/{id}', [SalaController::class, 'getSillas']);
}
