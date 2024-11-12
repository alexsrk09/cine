<?php

namespace App\Http\Controllers;

use App\Models\Silla;
use Illuminate\Http\Request;

class SillaController extends Controller
{
    // Route::get('getsillas/{id}', [SillaController::class, 'getSillas']);
    public function getSillas($id){
        $data = Silla::where('sala_id', $id)->get();
        return $data;
    }
}
