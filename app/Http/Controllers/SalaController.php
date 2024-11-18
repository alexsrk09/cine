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
    public function create(Request $request)
    {
        if(!isset($request['descripcion']) || strlen($request['descripcion']) == 0){
            $request['descripcion'] = "descripcion vacia";
        }

        $data =[
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion']
        ];

        $validator = Validator::make($data,
        [
            'nombre' => 'required|string|max:100',
            'descripcion' => 'string|max:1000'
        ],
        []);

        if($validator ->passes()){
            echo "create";
            $sala = new Sala();
            $sala->nombre = $request['nombre'];
            $sala->descripcion = $request['descripcion'];
            $sala->save();
            return $sala;
        }else{
            return "Los datos introducidos son errones";
        }
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
