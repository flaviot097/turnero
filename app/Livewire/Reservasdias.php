<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Reservasdias extends Component
{
    public $nombre = array();
    public $array_new = array();
    public $fechaHoy;
    public $meses = array();
    public $anios = array();
    public $vueltas;

    public function consultar()
    {

        $consulta = DB::select("select * from reservas");
        foreach ($consulta as $turno) {

            //$fecha = array();
            // $hora = array();
            $this->vueltas = $this->vueltas + 1;
            $arreglo = array();
            $fecha_turno = explode("_", $turno->fecha)[0];
            $hora_turno = explode("_", $turno->fecha)[1];
            array_push($arreglo, $fecha_turno);
            array_push($arreglo, $hora_turno);
            array_push($arreglo, $turno->nombre);
            array_push($arreglo, $turno->numero_telefono);
            array_push($arreglo, $turno->email);
            array_push($this->array_new, $arreglo);
            $this->fechaHoy = date('Y-m-d');
            $dia = explode("-", $this->fechaHoy)[2];
            $mes = explode("-", $this->fechaHoy)[1];
            $anio = explode("-", $this->fechaHoy)[0];
            //dd(explode("-",$fecha_turno)[2]);
            $dia_mes_anio = (explode("-", $fecha_turno));
            $Aanio = $dia_mes_anio[0];
            $Ames = $dia_mes_anio[1];
            $Adia_p_vista = $dia_mes_anio[2];
            if ($mes == $Ames) {
                array_push($this->meses, "actual");
            } elseif ($mes > $Ames) {
                array_push($this->meses, "pasado");
            } else {
                array_push($this->meses, "futuro");
            }
            if ($anio == $Aanio) {
                array_push($this->anios, "actual");
            } else {
                array_push($this->anios, "futuro");
            }


        }
        usort($this->array_new, function ($a) use ($dia) {
            if ($a == $dia) {
                return 0;
            }
            return ($a < $dia) ? -1 : 1;
        });
    }
    public function render()
    {
        $this->consultar();
        return view('livewire.reservasdias');
    }
}