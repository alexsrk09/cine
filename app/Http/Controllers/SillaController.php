<?php

namespace App\Http\Controllers;

use App\Models\Silla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @class SillaController
 * @brief Controlador para gestionar las sillas en una sala de cine.
 */
class SillaController extends Controller
{
    /**
     * @brief Crea una nueva silla en una sala.
     * @param Request $request Contiene el ID de la sala donde se creará la silla.
     * @return Silla|string Retorna la silla creada o un mensaje de error si el ID no es válido.
     */
    public function create(Request $request)
    {
        $data = [
            "sala_id" => $request->sala_id,
        ];

        $validator = Validator::make($data,
        [
            'sala_id' => 'required|integer',
        ]);

        if ($validator->passes() && $request->sala_id != -1) {
            $silla = new Silla();
            $silla->sala_id = $request->sala_id;
            $silla->ocupada = false;
            $silla->save();
            return $silla;
        } else {
            return "El ID no es válido";
        }
    }

    /**
     * @brief Obtiene todas las sillas de una sala específica.
     * @param int $id ID de la sala.
     * @return \Illuminate\Database\Eloquent\Collection|string Retorna una colección de sillas o un mensaje de error si el ID no es válido.
     */
    public function getSillas($id)
    {
        $data = [
            "id_silla" => $id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ]);

        if ($validator->passes() && $id != -1) {
            $datos = Silla::where('sala_id', $id)->get();
            return $datos;
        } else {
            return 'El ID no es válido';
        }
    }

    /**
     * @brief Actualiza el estado de ocupación de una silla.
     * @param Request $request Contiene el ID de la silla a actualizar.
     * @return Silla|string Retorna la silla actualizada o un mensaje de error si el ID no es válido.
     */
    public function update(Request $request)
    {
        $data = [
            "id_silla" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ]);

        if ($validator->passes() && $request->id != -1) {
            $silla = Silla::find($request->id);
            if ($silla) {
                $silla->ocupada = !$silla->ocupada;
                $silla->save();
                return $silla;
            } else {
                return "Silla no encontrada";
            }
        } else {
            return 'El ID no es válido';
        }
    }

    /**
     * @brief Elimina una silla del sistema.
     * @param Request $request Contiene el ID de la silla a eliminar.
     * @return Silla|string Retorna la silla eliminada o un mensaje de error si el ID no es válido.
     */
    public function delete(Request $request)
    {
        $data = [
            "id_silla" => $request->id,
        ];

        $validator = Validator::make($data,
        [
            'id_silla' => 'required|integer',
        ]);

        if ($validator->passes() && $request->id != -1) {
            $silla = Silla::find($request->id);
            if ($silla) {
                $silla->delete();
                return $silla;
            } else {
                return "Silla no encontrada";
            }
        } else {
            return 'El ID no es válido';
        }
    }
}
