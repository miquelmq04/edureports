<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Carregar la configuració
$config = require '../config/config.php';

// Autoloader simple
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';

    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $relative_class = substr($class, strlen($prefix));
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        
        if (file_exists($file)) {
            require $file;
        }
    }
});

// Carregar helpers
require '../app/helpers.php';

// Crear router
$router = new \App\Router();

// ==================== RUTES ====================

// Pàgina d'inici
$router->get('/', ['App\\Controllers\\HomeController', 'index']);

//Processar el formulari de home
$router->post('/generate-report', ['App\\Controllers\\ReportController', 'processForm']);

// Mostrar la pàgina on es genera l'informe
$router->get('/write-report', ['App\\Controllers\\ReportController', 'showReport']);

// Servir la ruta solicitada 
$response = $router->dispatch();
echo $response;
?>
