<style>
body{
    background-image: url("/img/fondo-padel.jpeg");
    background-size: 100% 100%;
}

/* From Uiverse.io by Praashoo7 */
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  width: 20vh;
  padding-left: 2em;
  padding-right: 2em;
  padding-bottom: 0.4em;
  background-color: #171717;
  border-radius: 25px;
  transition: .4s ease-in-out;
}

.form:hover {
  transform: scale(1.05);
  border: 1px solid black;
}

#heading {
  text-align: center;
  margin: 2em;
  color: rgb(255, 255, 255);
  font-size: 1.2em;
}

.field {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5em;
  border-radius: 25px;
  padding: 0.6em;
  border: none;
  outline: none;
  color: white;
  background-color: #171717;
  box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
}

.input-icon {
  height: 1.3em;
  width: 1.3em;
  fill: white;
}

.input-field {
  background: none;
  border: none;
  outline: none;
  width: 100%;
  color: #d3d3d3;
}

.form .btn {
  display: flex;
  justify-content: center;
  flex-direction: row;
  margin-top: 2.5em;
}

.button1 {
  padding: 0.5em;
  padding-left: 1.1em;
  padding-right: 1.1em;
  border-radius: 5px;
  margin-right: 0.5em;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button1:hover {
  background-color: black;
  color: white;
}

.button2 {
  padding: 0.5em;
  padding-left: 2.3em;
  padding-right: 2.3em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
  margin-bottom: 0.5em !important;
}

.button2:hover {
  background-color: rgb(116, 116, 116);
  color: white;

}

.button3 {
  margin-bottom: 3em;
  padding: 0.5em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-color: #252525;
  color: white;
}

.button3:hover {
  background-color: red;
  color: white;
}

</style>
<style>
    /* style reservasdias*/
    .card {
  --black: #000000;
  --ch-black: #141414;
  --eer-black: #1b1b1b;
  --night-rider: #2e2e2e;
  --white: #ffffff;
  --af-white: #f3f3f3;
  --ch-white: #e1e1e1;
  font-family: Helvetica, sans-serif;
}

.wrapper {
  margin: 2rem auto;
  width: 70%;
  font-size: small;
}

.title {
  text-align: center;
  color: #1b1b1b;
}

.heading {
  font-weight: bold;
  letter-spacing: 7px;
  font-size: 1.5rem;
  position: relative;
  margin-bottom: 6px;
}

.heading::before {
  content: '';
  position: absolute;
  inset: 0;
  background: #e8e8e8;
  z-index: -1;
  filter: blur(50px);
  height: 50px;
}

.color {
  padding: 10px 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.hex {
  text-align: end;
  font-family: monospace;
  text-transform: uppercase;
  padding-top: 15px;
}


.night-rider {
  background: var(--night-rider);
  color: var(--ch-white);
  width: 100%;
border-radius: 5px;
}


.border {
  color: var(--night-rider);
  padding: 10px 10px;
  text-align: center;
}

.border span {
  border-radius: 5px;
  color: var(--ch-white);
  padding: 2px 4px;
  background-color: var(--night-rider);
}
.contenedor-main,.contenedor-if-else{
    width: 100%
}
.contenedor-todos{
    margin-left: 20%;
    margin-right: 20%;
}
.items-turnero{
    margin-left: 5px;
    margin-right: 5px;
}
.contenedor-domulario-session{
    widows: 100%;
    height: 100%;
    display: flex;
    flex-wrap: nowrap;
    justify-items: center;
    align-items: center;
    justify-content: center;
}

</style>
<div class="contenedor-main" >
    @livewireStyles
        @livewire('p-anministrador')
    @livewireScripts
</div>
