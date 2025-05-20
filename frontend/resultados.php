<?php
session_start();
if (!isset($_SESSION['resultados'])) {
    header('Location: index.html');
    exit;
}

$resultados = $_SESSION['resultados'];
unset($_SESSION['resultados']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Resultados del análisis</h1>
        
        <?php if (empty($resultados)): ?>
            <p>No se encontraron palabras relevantes.</p>
        <?php else: ?>
            <div class="resultados-container">
                <table>
                    <thead>
                        <tr>
                            <th>Palabra</th>
                            <th>Frecuencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultados as $palabra => $contador): ?>
                            <tr>
                                <td><?= htmlspecialchars($palabra) ?></td>
                                <td><?= $contador ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        
        <a href="index.html" class="btn-volver">Analizar otro texto</a>
    </div>
</body>
</html>