<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DatePick extends Component
{
    public $diasDelMes;
    public $arrayDateDays = [];
    public $diaSeleccionado;
    public $actualday;
    public $anio;
    public $cancha;
    public $mes;
    public $listener;
    public $arregloturnosDisponibles;
    public $arregloReservas;
    public $listado_disponibles;
    public $listTurnos = array("9:00 - 10:30", "10:30 - 12:00", "12:00 - 13:30", "13:30 - 15:00", "15:00 - 16:30", "16:30 - 18:00", "18:00 - 19:30", "19:30 - 21:00", "21:00 - 22:30");

    public function selectDate($i)
    {
        if ($this->listener == null) {
            $this->listener = "true";
        } elseif ($this->listener == "true") {
            $this->listener = "false"; // para que no se repita la acción
        } else {
            $this->listener = "true";
        }

        $this->diaSeleccionado = $i;

    }
    public function render()
    {
        $numero_cancha = url()->current();
        $this->cancha = explode("turno", $numero_cancha);
        $fechaTodo = date('Y-m-d');
        $anio = date("Y");
        $mes = date("m");
        $this->actualday = date("d");
        $this->anio = $anio;
        $this->mes = $mes;
        $diasDelMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
        $this->diasDelMes = $diasDelMes;
        $arrayDateDays = array_fill(0, $diasDelMes, 0);
        $this->arrayDateDays = $arrayDateDays;

        return view('livewire.date-pick');
    }


}