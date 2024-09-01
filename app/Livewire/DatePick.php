<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class DatePick extends Component
{
    public $diasDelMes;
    public $arrayDateDays = [];
    public $diaSeleccionado;
    public $anio;
    public $cancha;
    public $mes;
    public $listener;
    public function selectDate($i)
    {
        $this->listener = "true";
        $this->diaSeleccionado = $i;
    }
    public function render()
    {
        $numero_cancha=url()->current();
        $this->cancha = explode("turno", $numero_cancha);
        $fechaTodo = date('Y-m-d');
        $anio = date("Y");
        $mes = date("m");
        $dia = date("d");
        $this->anio = $anio;
        $this->mes = $mes;
        $diasDelMes = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
        $this->diasDelMes = $diasDelMes;
        $arrayDateDays = array_fill(0, $diasDelMes, 0);
        $this->arrayDateDays = $arrayDateDays;
        //dd($arrayDateDays);
        return view('livewire.date-pick');
    }


}