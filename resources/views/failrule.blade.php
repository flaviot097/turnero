<style>
    .container-exito{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    #ok{
        width: 20vh;
        height: 20vh;
    }
    .text{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;}
    .volver{
        margin-top: 20px;
        border: 1px solid #e6c3c3;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 12px;
        border-radius: 5px;
        text-decoration: none;
        color: gray;
        background-color: #52bae4;
    }
    .volver:hover{background-color: #1b789c;
    color: floralwhite}
    .texto-reserva{
        border: 1px solid #e6c3c3;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 20px;
        border-radius: 5px;

        font-family: Arial, sans-serif;
        text-align: center;
    }
    p{
        font-family: Arial, sans-serif;
        text-align: center;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("/img/fondo-padel.jpeg");
        background-size: 100% 100%;
    }

    </style>
    <div class="container" >
        <div class="container-exito" >
            <div>
                <svg id="ok" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                    <path fill="#f44336" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path fill="#fff" d="M29.656,15.516l2.828,2.828l-14.14,14.14l-2.828-2.828L29.656,15.516z"></path><path fill="#fff" d="M32.484,29.656l-2.828,2.828l-14.14-14.14l2.828-2.828L32.484,29.656z"></path>
                    </svg>
                {{-- <svg id="ok" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="Layer_28"><circle cx="16" cy="16" fill="#a9d2ed" r="14"/><path d="m22.9394 10-9.9394 9.9395-3.9394-3.9395c-.1953-.1953-.5118-.1953-.7071 0l-.707.707c-.1953.1953-.1953.5118 0 .7071l4.6464 4.6464c.1953.1953.4512.293.707.293s.5117-.0977.707-.293l10.6464-10.6464c.1953-.1953.1953-.5118 0-.7071l-.7068-.707c-.1952-.1952-.5118-.1952-.7071 0z" fill="#36a0e8"/></g></svg> --}}

            </div>
            <div class="text" >
                <span class="texto-reserva" >Error al hacer la reserva .Intente nuevamente</span>
                <p><a class="volver" href="{{route("turnos")}}">volver al turnero</a></p>
            </div>
        </div>

    </div>

