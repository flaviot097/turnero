<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\select;

class Datehours extends Component
{
    #[Reactive]
    public $diaSeleccionado;
    public $mes_padre;
    public $anio_padre;
    public $dateQuery;
    public $cancha;

    #[Reactive]
    public $reactividad;

    public $horario_seleccionado;
    private $id;

    public $nombre;
    public $numero;
    public $email;
    public $listado_reservas = array();
    public $listado_disponibles;

    public $listTurnos = array("9:00 - 10:30", "10:30 - 12:00", "12:00 - 13:30", "13:30 - 15:00", "15:00 - 16:30", "16:30 - 18:00", "18:00 - 19:30", "19:30 - 21:00", "21:00 - 22:30");
    public $listdb;
    public function selecShift($turno)
    {
        $this->horario_seleccionado = $turno;
    }
    public function selecthour()
    {
        $this->dateQuery = $this->anio_padre . "-" . $this->mes_padre . "-" . $this->diaSeleccionado;
        if ($this->cancha[1] == "s") {
            $dbQuery = DB::select("select * from turnos where fecha = '$this->dateQuery'");
        } else {
            $dbQuery = DB::select("select * from turnos_c2 where fecha = '$this->dateQuery'");
        }
        $this->listdb = $dbQuery;
        foreach ($this->listdb as $turno_disponibles) {
            if (count(json_decode($turno_disponibles->horario)) !== 0) {
                $this->listado_reservas = json_decode($turno_disponibles->horario);
            }

        }

        //filtrar los turnos disponibles
        $this->listado_disponibles = array_diff($this->listTurnos, $this->listado_reservas);
    }

    public function createShift()
    {
        $turno = $this->horario_seleccionado;
        $fecha = $this->dateQuery;
        $fechaid = $fecha . "_" . $turno;
        $actualizar = "";
        $resultado = false;
        $resultado1 = false;
        $arrayActualizar = array();
        $arrayNuevo = array();
        //guardar turno
        if (count($this->listdb) !== 0) {
            foreach ($this->listdb as $reservas) {
                $this->id = $reservas->id;
                if (count(json_decode($reservas->horario)) >= 1) {
                    foreach (json_decode($reservas->horario) as $res) {
                        array_push($arrayNuevo, $res);
                    }
                }
                if (count($arrayNuevo) === 0) {
                    $actualizar = "false";
                }
            }


        }
        if (count($this->listdb) !== 0) {
            array_push($arrayNuevo, $turno);
            $json = json_encode($arrayNuevo);
            if ($this->nombre !== null && $this->email !== null && $this->numero !== null) {
                //dd($json);
                if ($this->cancha[1] == "s") {
                    $resultado = DB::update("update turnos set horario = '$json' where id = '$this->id'");
                } else {
                    $resultado = DB::update("update turnos_c2 set horario = '$json' where id = '$this->id'");
                }
                $resultado1 = DB::insert('insert into reservas (fecha, email, numero_telefono, nombre) values (?,?,?,?)', [$fechaid, $this->email, $this->numero, $this->nombre]);
                if ($resultado1 == true) {
                    session()->flash('message', 'Turno reservado con éxito.');
                    // enviar mail
                    Mail::send('email-template', ['email' => "$this->email", "nombre" => "$this->nombre", "fecha" => "$fecha", "horario" => "$turno"], function ($message) {
                        $message->to("$this->email")
                            ->subject('Reserva La Candela Padel');
                    });
                    return redirect()->to(url("success"));
                } else {
                    session()->flash('message', 'Hubo un problema al reservar el turno, Intente mas tarde.');
                }
            }
        }
        if (count($this->listdb) === 0) {
            array_push($arrayActualizar, $turno);
            $json_arr = json_encode($arrayActualizar);
            if ($this->nombre !== null && $this->email !== null && $this->numero !== null) {
                if ($this->cancha[1] == "s") {
                $resultado = DB::insert('insert into turnos (fecha, horario) values (?, ?)', [$fecha, $json_arr]);
            }else{
                    $resultado = DB::insert('insert into turnos_c2 (fecha, horario) values (?, ?)', [$fecha, $json_arr]);
                }
                $resultado1 = DB::insert('insert into reservas (fecha, email, numero_telefono, nombre) values (?,?,?,?)', [$fechaid, $this->email, $this->numero, $this->nombre]);
            }
            if ($resultado === true && $resultado1 === true) {
                session()->flash('message', 'Turno reservado con éxito.');
                // enviar mail
                Mail::send('email-template', ['email' => "$this->email", "nombre" => "$this->nombre", "fecha" => "$fecha", "horario" => "$turno"], function ($message) {
                    $message->to("$this->email")
                        ->subject('Reserva La Candela Padel');
                });
                return redirect()->to(url("success"));
            } else {
                session()->flash('message', 'Hubo un problema al reservar el turno, Intente mas tarde.');
            }
        }




    }


    public function render()
    {
        if ($this->reactividad === "true") {
            $this->selecthour();
        }
        return view('livewire.datehours');
    }
}