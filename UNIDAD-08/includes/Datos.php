<?php


require_once '../vendor/autoload.php';

use Jaxon\Jaxon;
use function Jaxon\jaxon;

use Clases\Frankfurter;

function convertir(string $cantidad, string $monedaOrigen, string $monedaDestino) {
    $respuesta = jaxon()->newResponse();

    if ($cantidad > 0 && is_numeric($cantidad) && preg_match('[A-Z]{3}', $monedaOrigen) && preg_match('[A-Z]{3}', $monedaDestino)) {
        $respuesta->alert('Importe incorrecto');
    } else {
        $datosConversion = Frankfurter::convertir($cantidad, $monedaOrigen, $monedaDestino);
        $respuesta->assign('fecha', 'innerHTML', $datosConversion['date']);
        $respuesta->assign('cantidad', 'innerHTML', $cantidad);
        $respuesta->assign('monedaDestino', 'innerHTML', $monedaDestino);
        $respuesta->assign('conversion', 'innerHTML', $datosConversion['rate']);
        $respuesta->assign('tabla', 'style', 'display : block;');
    }

}

$jaxon = jaxon();
$jaxon->register(Jaxon::CALLABLE_FUNCTION, 'convertir', ['mode' => "'asynchronous'"]);
if($jaxon->canProcessRequest()) $jaxon->processRequest();
