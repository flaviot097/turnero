<div class="container-form-shift" >

    @if (count($listado_reservas)===0)
        @foreach($listTurnos as $turno)
                <button class="turnos-horarios {{ $horario_seleccionado === $turno ? 'selected' : '' }}" wire:click="selecShift('{{$turno}}')" >{{$turno}}</button>
        @endforeach
    @else
        @foreach($listado_disponibles as $turno)
            <button class="turnos-horarios {{ $horario_seleccionado === $turno ? 'selected' : '' }}" wire:click="selecShift('{{$turno}}')" >{{$turno}}</button>
        @endforeach
    @endif


    <form class="formulario" wire:submit="createShift()">
        <label for="nombre y apellido">Nombre y Apellido</label>
        <input type="text" wire:model="nombre" required>
        <label for="Numero de Telefono">Numero de Telefono</label  >
        <input type="number" wire:model="numero" required >
        <label for="email">Email</label>
        <input type="email" wire:model="email" required >

        <button class="guardar-turno" type="submit">Hacer reserva</button>
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
