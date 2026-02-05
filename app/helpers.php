<?php

/**
 * Renderitza una vista amb dades
 */
function view($view, $data = [])
{
    extract($data);
    
    $view_path = __DIR__ . '/views/' . str_replace('.', '/', $view) . '.php';
    
    if (!file_exists($view_path)) {
        return '<h1>Error: Vista no trobada</h1><p>' . htmlspecialchars($view_path) . '</p>';
    }
    
    ob_start();
    require $view_path;
    return ob_get_clean();
}

/**
 * Obté la URL base
 */
function base_url($path = '')
{
    $config = require __DIR__ . '/../config/config.php';
    $base = rtrim($config['base_url'] ?? '', '/');
    return $base . ($path ? '/' . ltrim($path, '/') : '');
}

/**
 * Fa un redireccionament
 */
function redirect($path)
{
    header('Location: ' . base_url($path));
    exit;
}

/**
 * Obté la URL actual sense la base
 */
function current_path()
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}
