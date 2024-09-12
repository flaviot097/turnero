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
        $result = DB::select("select fecha ,cancha from reservas where email = ?", [$mail]); //obtenemos la fecha de la reserva
        if (count($result) !== 0) {
            $fecha = explode("_", $result[0]->fecha);
            $horario = $fecha[1];
            $cancha = $result[0]->cancha;

            $tabla = "";
            if ($cancha == "cancha1") {
                $tabla = "turnos";
            } else {
                $tabla = "turnos_c2";
            }

            $data = DB::select("select horario from $tabla where fecha = ?", [$fecha[0]]);
            //$data = DB::select("select horario from turnos where fecha = ?", [$fecha[0]]);obtenemos los hprarios de la tabla turnos

            foreach ($data as $turno) {
                // decodifico a json
                $array_horarios = json_decode($turno->horario);
                // filtra los turnos y de elimima el seleccionado
                $this->updete_array = array_filter($array_horarios, function ($value) use ($horario) {
                    return $value !== $horario;
                });
                ;
            }
            // eliminar registros con mas de un turno
            if (count(json_decode($data[0]->horario)) !== 1) {

                //dd($fecha[0]);
                //actualizo registro

                $fecha_update = $fecha[0];
                $json = json_encode(array_values($this->updete_array));
                $ejecucion1 = DB::update("update $tabla set horario = ? where fecha = ?", [$json, $fecha_update]);

                //elimino de reservas
                $ejecucion2 = DB::delete("delete from reservas where email = ?", [$mail]);
                if ($ejecucion1 !== 0 && $ejecucion2 !== 0) {
                    return redirect()->back()->with(['message' => 'Turno eliminado con exito'], 200);
                } else {
                    return redirect()->back()->with(['message' => 'no pudo ser eliminado'], 200);
                }
            } else {
                //actualizo registro cancha uno
                $fecha_update = $fecha[0];
                $json = json_encode(array_values($this->updete_array));
                $ejecucion1 = DB::update("update $tabla set horario = ? where fecha = ?", [$json, $fecha_update]);

                //elimino de reservas
                $ejecucion2 = DB::delete("delete from reservas where email = ?", [$mail]);
                if ($ejecucion1 !== 0 && $ejecucion2 !== 0) {
                    return redirect()->back()->with(['message' => 'Turno eliminado con exito'], 200);
                } else {
                    return redirect()->back()->with(['message' => 'no pudo ser eliminado'], 200);
                }
            }
            ;


        } else {
            return redirect()->back()->with(['message' => 'No hay turnos registrados con este Email']);
        }
        if (count($this->updete_array) == 0) {

        }
    }
}
