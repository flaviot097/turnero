<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class PAnministrador extends Component
{
    public $status = "falso";
    public $contrasenia_entrada;
    public $user_entrada;

    public $esAdministrador = false;

    public function mount()
    {
        // Leer la cookie
        $this->esAdministrador = Cookie::get('administrador_padel') == "exito";
    }
    public function cambiarStatus()
    {
        $consulta = DB::select("select * from usuarios");
        if (!isset($consulta)) {
            //si no hay susuario se crea uno
            DB::insert('insert into usuarios (user,contrasenia) values (?, ?)', ["administrador_padel", "QWEas150"]);
            //INSERT INTO padel.usuariosusuarios  (user,contrasenia) VALUES ("administrador_padel","QWEas150")
        }

        if ($this->status == "falso") {


            $contrasenia_db = $consulta[0]->contrasenia;
            $user_db = $consulta[0]->user;


            if ($contrasenia_db == $this->contrasenia_entrada && $user_db == $this->user_entrada) {
                $this->status = "verdadero";
                Cookie::queue('administrador_padel', 'exito', 120);
                return redirect()->to(url("administrador"));
                ;
            }
        }
    }
    public function render()
    {
        return view('livewire.p-anministrador', [
            'esAdministrador' => $this->esAdministrador,
        ]);
    }
}
