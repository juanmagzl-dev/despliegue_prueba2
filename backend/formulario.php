<?php
require_once __DIR__.'/analisis.php';

// Validación básica
if (!isset($_POST['texto']) || empty(trim($_POST['texto']))) {
    header('Location: ../frontend/index.html?error=1');
    exit;
}

$texto = $_POST['texto'];
$resultados = analizarTexto($texto);

// Guardar resultados en sesión para mostrarlos
session_start();
$_SESSION['resultados'] = $resultados;
$_SESSION['texto_original'] = $texto;

header('Location: ../frontend/resultados.php');