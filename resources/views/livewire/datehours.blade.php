<div class="container-form-shift" >

    @if (!empty($listado_disponibles))
        @foreach($listado_disponibles as $turno)
            <button class="turnos-horarios {{ $horario_seleccionado === $turno ? 'selected' : '' }}" wire:click="selecShift('{{$turno}}')" >{{$turno}}</button>
        @endforeach
    @else
        seleccione un dia
    @endif

    <div wire:loading wire:target="selecthour">
        <p>Cargando horarios disponibles...</p>
    </div>

    <form class="formulario" wire:submit="createShift()">
        <label for="nombre y apellido">Nombre y Apellido</label>
        <input type="text" wire:model="nombre" required>
        <label for="Numero de Telefono">Numero de Telefono</label  >
        <input type="number" wire:model="numero" required >
        <label for="email">Email</label>
        <input type="email" wire:model="email" required >

        <button class="guardar-turno" type="submit" @if ($horario_seleccionado == null)
        disabled
        @endif >Hacer reserva</button>
    </form>
    {{-- <div>
        @if (session()->has('message'))
            <div @if (session('message')=="Turno reservado con éxito.")
                    style="color: green;"
                @else
                    style="color: rgb(235, 8, 8);"
                @endif>
                    {{ session('message') }}
            </div>
        @endif
    </div> --}}
</div>
