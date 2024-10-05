<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="expositor.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="img-sanvicente">
        <img src="https://rondanet.sanvicentefundacion.com/themes/custom/svf_theme_rondanet/san-vicente.svg" alt="San Vicente Logo">
    </div>
    <div class="contenido">
        <h1 class="titulo">ASISTENCIA A LOS EVENTOS FORMATIVOS</h1>
        <div class="grid">
            <div class="div-input">
                <label for="idFecha">Fecha</label>
                <input class="input-expositor" type="date" id="idFecha">
            </div>
            <div class="div-input">
                <label for="idNombre">Nombre del capacitor</label>
                <input class="input-expositor" type="text" id="idNombre">
            </div>
            <div class="div-input">
                <label for="idCentroCostos">Centro de costos</label>
                <input class="input-expositor" type="text" id="idCentroCostos">
            </div>
            <div class="div-input">
                <label for="idConsecutivo">Número de consecutivo</label>
                <input class="input-expositor" type="text" id="idCentroCostos">
            </div>
            <div class="div-input">
                <label for="idDuracion">Duración de la capacitación</label>
                <input class="input-expositor" type="text" id="idDuracion">
            </div>
            <div class="div-input">
                <label for="idSalon">Salón</label>
                <input class="input-expositor" type="text" id="idSalon">
            </div>
            <div class="div-input">
                <label for="idPersonasConvocadas">Número de personas convocadas</label>
                <input class="input-expositor" type="number" id="idPersonasConvocadas">
            </div>
            <div class="div-input">
                <label for="idPersonasAsistieron">Número de personas que asistieron</label>
                <input class="input-expositor" type="text" id="idDuracion">
            </div>
        </div>
        <div class="div-boton">
            <button id="btn-confirmar">Confirmar Capacitacion</button>
        </div>
        <div id="Compartir" class="compartir" hidden>
            <img id="qr-asistencia" src="" alt="">
            <a id="link-asistencia" href="#">Link Asistencia</a>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>