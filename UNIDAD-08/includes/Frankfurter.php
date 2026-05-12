<?php

namespace Clases;

use RuntimeException;

class Frankfurter {
    private static $urlBase = 'https://api.frankfurter.dev/v2';
   
    public static function tasas(string $monedaOrigen, array $monedasDest) {
        $js = [];

        foreach($monedasDest as $m) {
            $url = SELF::$urlBase . '/rate/' . $monedaOrigen . '/' . $m;

            // Iniciamos a sesión curl
            $sesion = curl_init($url);

            curl_setopt_array($sesion, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 15,
                CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            ]);

            try {
                $respuesta = curl_exec($sesion);
                if(curl_errno($sesion)) {
                    throw new RuntimeException();
                } else {
                    $js[] = json_decode($respuesta);
                }
            } catch (RuntimeException $ex) {
                die('No se pudo obtener la información de la API de Frankfuter. Error');
            }
        }

        return $js;

    }

    /**
     * Convierte el importe de una moneda de origen a otra
     * 
     * Como la api no tiene un endpoint de conversión (frankfurter.dev/#conversion), se obtiene
     * la tasa de cambio, se hace la operación y se devuelve un array asociativo con la info
     */
    public static function convertir(float $importe, string $monedaOrigen, string $monedaDest) {
        $tasas = SELF::tasas($monedaOrigen, [$monedaDest]);
        return [ 'date' => $tasas[0]->date, 'rate' => $importe * $tasas[0]->rate]; 
    }

    public static function monedas() {
        $url = SELF::$urlBase . '/currencies';

        // Iniciamos a sesión curl
        $sesion = curl_init($url);

        curl_setopt_array($sesion, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
        ]);

        try {
            $respuesta = curl_exec($sesion);
            if(curl_errno($sesion)) {
                throw new RuntimeException();
            } else {
                return json_decode($respuesta);
            }
        } catch (RuntimeException $ex) {
            die('No se pudo obtener la información de la API de Frankfuter. Error');
        }
    }
}