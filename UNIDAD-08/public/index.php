<?php

require_once '../vendor/autoload.php';
require_once '../includes/Datos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 03 Unidad 08 - Conversor de divisas</title>
</head>
<body>
    <h1>Conversor de divisas</h1>
    <form id="formulario" action="">
        <label for="cantidad">Elija la cantidad</label>
        <br>
        <input type="number" name="cantidad" id="cantidad" pattern="[0-9\.]+" value="100">
        <br>
        <label for="moneda">Elije la moneda</label>
        <br>
        <select name="moneda" id="moneda">
            <option id="EUR" value="EUR">Euro</option>
            <option value="USD" selected>Dolar estadounidense</option>
            <option value="GBP">Libra esterlina</option>
            <option value="JPY">Yen japonés</option>
            <option value="CHF">Franco suizo</option>
            <option value="CAD">Dolar canadiense</option>
            <option value="AUD">Dolar australiano</option>
        </select>
    </form>
    <button type="button" onclick="convertir()">Convertir</button>
    <table id="tabla" style="display: none">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Moneda de origen</th>
                <th>Cantidad</th>
                <th>Moneda de destino</th>
                <th>Conversión</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="fecha"></td>
                <td>EUR</td>
                <td id="cantidad"></td>
                <td id="monedaDestino"></td>
                <td id="conversion"></td>
            </tr>
        </tbody>
    </table>
    <script src="funciones.js"></script>
    
    <?php
        echo $jaxon->getCss(), "\n", $jaxon->getJs(), "\n", $jaxon->getScript(), "\n";
    ?>
</body>
</html>

