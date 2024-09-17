<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<style>
    .contenedor{
        width: 100%;
    }
    .contenedor-texto-barra-picker{
        width: 65%;
    }
body{
    background-image: url("/img/fondo-padel.jpg");
    background-size: 100% 100%;
}
.data-picker{
    background-color: #f0f0f0;
    width: 50vh;
    height: 50vh;
}
</style>
<style>
.calendar-container {
    width: 50%;
    margin: 20px;
    border: #444 2px solid;
    border-radius: 10px;
}

.calendar {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 2px;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 10px;
}

.calendar div {
    background-color: #fff;
    border: solid 0.3px #e7e6e6;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    border-radius:5px;
    transition: background-color 0.3s;
box-shadow:  20px 20px 60px #d0d0d0,
             -20px -20px 60px #ffffff;
}
.calendar{
    background-color: #fff;
    border: solid 0.3px #e7e6e6;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s;
box-shadow:  20px 20px 60px #d0d0d0,
             -00px -00px 20px #ffffff;
}


.calendar div.selected {
    background-color: #87ceeb;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

button {
    background-color: #87ceeb;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    transition: background-color 0.4s ease, color 0.4s ease;
}

button:hover {
    background-color: #cecece;
}
.fila{
    background-color:blueviolet;
}

.contenedor,.calendar{background-color: transparent !important}
.contenedor{display: flex;flex-direction: column;align-items: center;justify-content:}
.calendar-day{background-color: #fffdfd;
color: #444;
height: 5vh;
width: 5vh;
border-radius: 10px;
}
.calendar-day:hover{
    border:solid #afafaf 0.3px;
}
.calendar-day.selected {
    background-color: #0056d2;
    color: #fff;
}

.diasmes{
    border: solid black 1px;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 10px; /* Espacio entre los días */
    width: 40vh; /* Ajusta el ancho según necesites */
    margin: 0 auto;
    background-color: transparent;
}
,.diasmes:hover{
    background-color: #fffdfd !important ;
}
.container-form-shift{
    margin-left: 25px;
    width: 100%;
}
.contenedor-de-contenedores{
    width: 91vh;

}
.turnos-horarios{
    width: 45%;
    background-color: rgb(23, 28, 34);
}
.turnos-horarios:hover{
    background-color: rgb(69, 70, 71);
}
.formulario{
margin-top: 20px;
display: flex;
flex-direction: column;
}
.formulario input{
  border: 0;
  border: solid 0.3px #cacaca;
  border-radius: 24px;
  padding: 10px 16px;
  cursor: pointer;
  transition: background-color .3s ease;
}
input:focus {
    border: solid 0.5px #f8ebeb27 !important;
    box-shadow: none;
    outline-color: #afafaf;
}
label{
    font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: bold;
  color: #6b6b6b;
  text-align: center;
  font-family: 'Nunito', sans-serif;
  font-size: 16px !important;
}
.text-center-dias{
    font-family: "Segoe IU", sans-serif !important;
    color: #555555;
    font-size: 1.75rem;
  line-height: 1.75rem;
  margin-left: 35vh;
}
/* cambiar de color al clikear */
.calendar-day.selected {
    background-color: rgb(23, 28, 34);
    color: white;
}
.turnos-horarios.selected {
    background-color: #474747;
    color: white;
}
.guardar-turno{
    background-color: rgb(23, 28, 34);
}
.guardar-turno:hover{
    background-color: darkgreen;
}
#svg-atras{
    height: 5%;
}
#disabled-button{
    text-decoration-line: line-through !important;
    text-decoration-color: black !important ;
}
#disabled-button:hover{
    text-decoration-line: line-through !important;
    text-decoration-color: black !important ;

}
</style>
@livewireStyles

<a href="{{ route('welcome') }}"><svg id="svg-atras" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2" data-name="Layer 2"><path d="m12.41 16 9.3-9.29a1 1 0 1 0 -1.42-1.42l-10 10a1 1 0 0 0 0 1.42l10 10a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"/></g></svg></a>
<div class="contenedor" >
    <div class="contenedor-texto-barra-picker" >
        <h1 class="text-center-dias" >Dias Disponibles</h1>
        <div class="contenedor-de-contenedores" >
            @livewire('date-pick')
        </div>
    </div>
</div>


</div>
@livewireScripts
<script>
   /* document.addEventListener('DOMContentLoaded', () => {
    const calendar = document.getElementById('calendar');
    const modal = document.getElementById('modal');
    const closeBtn = document.querySelector('.close-btn');
    const eventForm = document.getElementById('eventForm');
    const eventTitleInput = document.getElementById('eventTitle');

    // Crear un calendario simple para el mes actual
    const date = new Date();
    const year = date.getFullYear();
    const month = date.getMonth();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 1; i <= daysInMonth; i++) {
        const dayDiv = document.createElement('div');
        dayDiv.textContent = i;
        dayDiv.dataset.date = `${year}-${month + 1}-${i}`;
        dayDiv.addEventListener('click', () => {
            openModal(dayDiv);
        });
        calendar.appendChild(dayDiv);
    }

    function openModal(dayDiv) {
        dayDiv.classList.add('selected');
        modal.style.display = 'flex';
        eventForm.onsubmit = (e) => {
            e.preventDefault();
            saveEvent(dayDiv, eventTitleInput.value);
        };
    }

    function closeModal() {
        modal.style.display = 'none';
        document.querySelectorAll('.calendar div').forEach(div => div.classList.remove('selected'));
        eventTitleInput.value = '';
    }

    function saveEvent(dayDiv, title) {
        const event = document.createElement('div');
        event.textContent = title;
        event.style.marginTop = '10px';
        event.style.backgroundColor = '#87ceeb';
        event.style.color = '#fff';
        event.style.padding = '5px';
        event.style.borderRadius = '5px';
        dayDiv.appendChild(event);
        closeModal();
    }

    closeBtn.addEventListener('click', closeModal);
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
});*/

</script>
