<?php

use App\Mail\EnviarMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/administrador", function () {
    return view("panel-administrador");
})->name("administrador");

Route::get("/turnos", function () {
    return view("picker");
})->name("turnos");


Route::get("/error", function () {
    return view('failrule');
})->name("error");

Route::get("/success", function () {
    return view('success');
})->name("exito");

Route::get("/email", function () {
    return view('email-template');
})->name("email-template");

Route::get("/canchas", function () {
    return view('cancha');
});
Route::get("/turnos2", function () {
    return view('picker2');
})->name("turnos2");

Route::post("/enviar-correo", function ($correo, $nombre, $fecha, $horario) {
    Mail::to($correo)->send(new EnviarMail($nombre, $fecha, $horario));
});