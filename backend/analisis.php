<?php
function analizarTexto($texto) {
    $stopwords = file(__DIR__.'/stopwords.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $stopwords = array_map('strtolower', $stopwords);

    $texto = strtolower($texto);
    $texto = preg_replace('/[^\p{L}\p{N}\s]/u', '', $texto);
    $palabras = preg_split('/\s+/', $texto);

    $frecuencias = [];
    foreach ($palabras as $palabra) {
        if ($palabra === '' || in_array($palabra, $stopwords)) {
            continue;
        }
        $frecuencias[$palabra] = ($frecuencias[$palabra] ?? 0) + 1;
    }

    arsort($frecuencias);
    return $frecuencias;
}