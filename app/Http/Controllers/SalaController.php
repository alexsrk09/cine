<?php

namespace App\Http\Controllers;
use App\Models\Sala;
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
    public function delete($id){
        $sala = Sala::find($id);
        $sala->delete();
        return $sala;
    }
    // Route::get('getsillas/{id}', [SalaController::class, 'getSillas']);
}
