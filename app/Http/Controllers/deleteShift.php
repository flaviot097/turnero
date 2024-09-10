<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class deleteShift extends Controller
{
    //eliminar turno
    public $updete_array;
    public function deleteShifts(Request $request)
    {
        $mail = $request->get("email");
        $result = DB::select("select fecha ,nombre from reservas where email = ?", [$mail]); //obtenemos la fecha de la reserva
        dd($result);
        if (count($result) !== 0) {
            $fecha = explode("_", $result[0]->fecha);
            $horario = $fecha[1];
            $data = DB::select("select horario from turnos where fecha = ?", [$fecha[0]]);//obtenemos los hprarios de la tabla turnos

            foreach ($data as $turno) {
                // decodifico a json
                $array_horarios = json_decode($turno->horario);
                // filtra los turnos y de elimima el seleccionado
                $this->updete_array = array_filter($array_horarios, function ($value) use ($horario) {
                    return $value !== $horario;
                });
            }
            //return $data;

        } else {
            dd("no entro");
        }
        var_dump($this->updete_array);
    }
}