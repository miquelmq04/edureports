<?php

$config = require __DIR__ . '/../config/config.php';

// 1. Importem la classe de la base de dades
require_once '../app/models/Database.php';

try {
    // 2. Obtenim la connexió (el Singleton s'encarrega de tot)
    $db = Database::getConnection();

    // 3. Executem la consulta
    // Fem servir query() directament perquè no hi ha variables externes (és segur)
    $stmt = $db->query("SELECT nombre FROM usuarios");
    
    // 4. Obtenim tots els resultats en un array
    $usuaris = $stmt->fetchAll();

    // 5. Mostrem els noms per pantalla
    echo "<h2>Llista de Professors:</h2>";
    if ($usuaris) {
        foreach ($usuaris as $usuari) {
            echo "👤 Nom: " . $usuari['nombre'] . "<br>";
        }
    } else {
        echo "No hi ha usuaris a la base de dades.";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

require_once '../app/views/header.php';
