<?php

namespace App\Http\Controllers;

use App\Models\Silla;
use Illuminate\Http\Request;

class SillaController extends Controller
{
    public function create(Request $request){
        $silla = new Silla();
        $silla->sala_id = $request->sala_id;
        $silla->save();
        return $silla;
    }
    // Route::get('getsillas/{id}', [SillaController::class, 'getSillas']);
    public function getSillas($id){
        $data = Silla::where('sala_id', $id)->get();
        return $data;
    }
}
