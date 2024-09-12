
<div class="calendar">


        @if ($arrayDateDays)
        <div class="diasmes" >
            @for ($i = 1; $i <= $diasDelMes; $i++)
                @if ($i<=$actualday)
                    <button disabled class="calendar-day" id="disabled-button" wire:click="selectDate({{ null }})">{{$i}}</button>
                @endif
                @if ($i>=$actualday && $i <= $actualday+7)
                    <button class="calendar-day {{ $diaSeleccionado === $i ? 'selected' : '' }}" wire:click="selectDate({{ $i }})" class="fila">{{$i}}</button>
                @endif
                @if ($actualday+7 <= $i )
                    <button disabled class="calendar-day" id="disabled-button" wire:click="selectDate({{ null }})">{{$i}}</button>
                @endif
                {{-- <button class="calendar-day {{ $diaSeleccionado === $i ? 'selected' : '' }}" wire:click="selectDate({{ $i }})" class="fila">{{$i}}</button> --}}
            @endfor
        </div>
            @livewire('datehours',[
                "diaSeleccionado" =>$diaSeleccionado,
                'mes_padre' => $mes,
                'anio_padre' => $anio,
                "reactividad"=>$listener,
                "cancha"=>$cancha,
            ])
        @endif



     <!-- <div class="calendar-container">
        <div id="calendar" class="calendar"></div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Agregar Evento</h2>
            <form id="eventForm">
                <label for="eventTitle">Título del evento:</label>
                <input type="text" id="eventTitle" required>
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>

-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.calendar-day');
    let previouslySelectedButton = null;

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Si hay un botón previamente seleccionado, remueve la clase 'selected'
            if (previouslySelectedButton) {
                previouslySelectedButton.classList.remove('selected');
            }

            // Agrega la clase 'selected' al botón actualmente clickeado
            this.classList.add('selected');

            // Guarda este botón como el previamente seleccionado
            previouslySelectedButton = this;

            // Aquí puedes manejar cualquier lógica adicional, como la llamada a un método Livewire
        });
    });
});

</script>
</div>
