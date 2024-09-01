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
.text{margin-top: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;}
.texto-reserva{
    border: 1px solid #c3e6cb;
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
            <svg id="ok" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><circle style="fill:#25AE88;" cx="25" cy="25" r="25"/><polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points=" 38,15 22,33 12,25 "/></svg>
            {{-- <svg id="ok" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="Layer_28"><circle cx="16" cy="16" fill="#a9d2ed" r="14"/><path d="m22.9394 10-9.9394 9.9395-3.9394-3.9395c-.1953-.1953-.5118-.1953-.7071 0l-.707.707c-.1953.1953-.1953.5118 0 .7071l4.6464 4.6464c.1953.1953.4512.293.707.293s.5117-.0977.707-.293l10.6464-10.6464c.1953-.1953.1953-.5118 0-.7071l-.7068-.707c-.1952-.1952-.5118-.1952-.7071 0z" fill="#36a0e8"/></g></svg> --}}

        </div>
        <div class="text" >
            <span class="texto-reserva" >Se hizo la reserva con exito</span>
            <p>Se ha enviado un correo con a su <a href="https://gmail.com/">Gmail</a></p>
        </div>
    </div>

</div>
