<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="expositor-copy.css">
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
                <label for="idFecha">Fecha de solicitud</label>
                <input class="input-solicitud" type="date" id="idFecha">
            </div>
            <div class="div-input">
                <label for="idNombre">Nombre del solicitante</label>
                <input class="input-solicitud" type="text" id="idNombre">
            </div>
            <div class="div-input">
                <label for="idServicio">Servicio que solicita</label>
                <select class="input-solicitud" name="" id="idServicio">
                    <option value="">Seleccione el Servicio</option>
                    <option value="">Seleccione el Servicio</option>
                    <option value="">Seleccione el Servicio</option>
                    <option value="">Seleccione el Servicio</option>
                </select>
            </div>
            <div class="div-input">
                <label for="idConsecutivo">Material individual enviado a esterilizar</label>
                <input class="input-solicitud" type="text" id="idCentroCostos">
            </div>
            <div class="div-input">
                <label for="idDuracion">Persona que entrega el material en el servicio</label>
                <input class="input-solicitud" type="text" id="idDuracion">
            </div>
            <div class="div-input">
                <label for="idSalon">Persona que recibe el material</label>
                <input class="input-solicitud" type="text" id="idSalon">
            </div>
        </div>
        <div class="div-boton">
            <button id="btn-confirmar">Confirmar solicitud</button>
        </div>
    </div>
</body>
<script src="script-copy.js"></script>
</html>