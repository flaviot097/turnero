<div class="contenedor-todos" >
    <div class="card">
        <div class="title">
          <p class="heading">Turnos reservasdos</p>
          <p class="desc"></p>
        </div>
        <div class="fecha-hoy" > {{$fechaHoy}} </div>
        {{-- turnos para el pasado del mismo mes --}}
        <?php  $i=0; ?>
        @foreach ($array_new as $turno)
            @if ((explode("-",$turno[0]))[2] > explode("-",$fechaHoy)[2] && $meses[$i] === "pasado")
                <div class="wrapper">
                        <div class="color night-rider">
                            <p class="items-turnero" >Fecha: {{$turno[0]}}</p>
                            <p class="items-turnero" >Horario:{{$turno[1]}}</p>
                            <p class="items-turnero" >{{$turno[2]}}</p>
                            <p class="items-turnero" >Numero:{{$turno[3]}}</p>
                            <p class="items-turnero" >{{$turno[5]}}</p>
                            <span class="hex">{{$turno[4]}}</span>
                        </div>
                </div>
            @endif
        <?php $i++; ?>
        @endforeach

        <?php  $i=0; ?>

        @forEach($array_new as $turno)
            {{-- turnos de hoy --}}
            @if ($turno[0]==$fechaHoy)
                <div class="wrapper">
                    <div class="color night-rider">
                        <p class="items-turnero" >Fecha: {{$turno[0]}}</p>
                        <p class="items-turnero" >Horario:{{$turno[1]}}</p>
                        <p class="items-turnero" >{{$turno[2]}}</p>
                        <p class="items-turnero" >Numero:{{$turno[3]}}</p>
                        <p class="items-turnero" >{{$turno[5]}}</p>
                        <span class="hex">{{$turno[4]}}</span>
                    </div>
                </div>b
            @else
                {{-- @if ((explode("-",$turno[0]))[2] > explode("-",$fechaHoy)[2] && $meses[$i] === "actual")
                <div class="wrapper">
                        <div class="color night-rider">
                            <p class="items-turnero" >Fecha: {{$turno[0]}}</p>
                            <p class="items-turnero" >Horario:{{$turno[1]}}</p>
                            <p class="items-turnero" >{{$turno[2]}}</p>
                            <p class="items-turnero" >Numero:{{$turno[3]}}</p>
                            <span class="hex">{{$turno[4]}}</span>
                        </div>
                    </div>
                @endif --}}

            @endif
        <?php $i++; ?>
        @endforeach
        {{-- turnos para el futuro del mismo mes --}}
        <?php  $i=0; ?>
        @foreach ($array_new as $turno)
            @if ((explode("-",$turno[0]))[2] > explode("-",$fechaHoy)[2] && $meses[$i] === "actual")
                <div class="wrapper">
                        <div class="color night-rider">
                            <p class="items-turnero" >Fecha: {{$turno[0]}}</p>
                            <p class="items-turnero" >Horario:{{$turno[1]}}</p>
                            <p class="items-turnero" >{{$turno[2]}}</p>
                            <p class="items-turnero" >Numero:{{$turno[3]}}</p>
                            <p class="items-turnero" >{{$turno[5]}}</p>
                            <span class="hex">{{$turno[4]}}</span>
                        </div>
                </div>
            @endif
        <?php $i++; ?>
        @endforeach
    </div>
</div>
