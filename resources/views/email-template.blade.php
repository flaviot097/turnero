<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirmación de Reserva</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    p {
      line-height: 1.5;
    }

    .button {
      display: inline-block;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>¡Tu reserva ha sido confirmada!</h1>
    <p>Estimado/a {{$nombre}},</p>
    <p>Te confirmamos que reserva de la cancha de para el dia {{$fecha}} en el rango horario de {{$horario}} ha sido realizada con éxito.</p>
    <p><strong>Detalles de la reserva:</strong></p>
    <ul>
      {{-- <li><strong>Cancha:</strong> [Nombre de la cancha]</li> --}}
      <li><strong>Fecha:</strong> {{$fecha}}</li>
      <li><strong>Hora:</strong> {{$horario}}</li>
      <li><strong>Duración:</strong> 1 hora y 30 minutos </li>
    </ul>
    <p>Para cualquier consulta, no dudes en contactarnos al [Número de teléfono] o <span>lacandelapadel@gmail.com</span> .</p>
    <p>¡Te esperamos!</p>
    <p><a href="[Enlace a tu sitio web]" class="button">Visitar nuestro sitio web</a></p>
  </div>
</body>
</html>
