
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
        <hr class="linea">
        <div class="grid">
            <div class="div-input">
                <label for="idCodigo">Codigo de solicitud</label>
                <input class="input-solicitud" type="text" id="idFecha">
            </div>
            <div class="div-input">
                <label for="idFecha">Fecha de solicitud</label>
                <input class="input-solicitud" type="date" id="idFecha">
            </div>
        </div>
        <div class="div-boton">
            <button class="btn" id="btn-consultar">Consultar solicitud</button>
        </div>
        <div id="contenido-oculto" class="div-oculto">
            <h2 style="text-align: center; color:#288b28;">Confirmacion de Entrega</h2>
            <div class="grid">
                <div class="div-input">
                    <label for="idNombreSolicitante">Nombre de quien recibe</label>
                    <input class="input-solicitud" type="text" id="idNombreSolicitante">
                </div>
                <div class="div-input">
                    <label for="idNombreEntrega">Nombre de quien entrega</label>
                    <input class="input-solicitud" type="text" id="idNombreEntrega">
                </div>
                <div class="div-input">
                    <label for="idEquipo">Equipo solicitado</label>
                    <input class="input-solicitud" type="text" id="idEquipo">
                </div>
                <div class="div-input">
                    <label for="idMaterial">Material individual</label>
                    <input class="input-solicitud" type="text" id="idMaterial">
                </div>
                <div class="div-input">
                    <label>Llego completo?</label>
                    <div>
                        <select class="input-solicitud select" name="" id="">
                            <option value="">Seleccione una opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="div-input">
                    <label for="idObservacionesRecibido">Observaciones</label>
                    <input class="input-solicitud" type="text" id="idObservacionesRecibido">
                </div>
            </div>
            <div class="div-boton">
                <button class="btn" id="btn-consultar">Recibir solicitud</button>
            </div>
        </div>
    </div>
</body>
<script src="script-copy.js"></script>
</html>
