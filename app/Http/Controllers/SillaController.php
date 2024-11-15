<?php

namespace App\Http\Controllers;

use App\Models\Silla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SillaController extends Controller
{
    public function create(Request $request){

        $data =[
            "id_silla" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ],
        []);

        if($validator -> passes() && $request -> id != -1){
            $silla = new Silla();
            $silla->sala_id = $request->sala_id;
            $silla->save();
            return $silla;
        }
        else{
            return "El ID no es valido";
        }
    }
    // Route::get('getsillas/{id}', [SillaController::class, 'getSillas']);
    public function getSillas($id){

        $data =[
            "id_silla" => $id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ],
        []);

        if($validator -> passes() && $id != -1){
            $datos = Silla::where('sala_id', $id)->get();
            return $datos;
        }else{
            return 'El ID no es valido';
        }
    }
    public function update(Request $request){

        $data =[
            "id_silla" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ],
        []);

        if($validator -> passes() && $request -> id != -1){
            $silla = Silla::find($request->id);
            $silla->ocupada = !$silla->ocupada;
            $silla->save();
            return $silla;
        }else{
            return 'El ID no es valido';
        }
    }
    public function delete(Request $request){

        $data =[
            "id_silla" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ],
        []);

        if($validator -> passes() && $request -> id != -1){
            $silla = Silla::find($request->id);
            $silla->delete();
            return $silla;
        }else{
            return 'El ID no es valido';
        }
    }
}
