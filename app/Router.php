<?php

namespace App;

class Router
{
    private $routes = [];
    private $request_uri;
    private $request_method;

    public function __construct()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        // Normalitzem els camins per evitar problemes amb barres invertides
        $script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']); // ex: /edureports/public/index.php
        $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])); // ex: /edureports/public
        
        // 1. Si la URI comença amb el script complet (index.php), l'eliminem
        if (stripos($uri, $script_name) === 0) {
            $uri = substr($uri, strlen($script_name));
        }
        // 2. Si no, si comença amb el directori base, l'eliminem
        elseif (stripos($uri, $script_dir) === 0 && $script_dir !== '/') {
            $uri = substr($uri, strlen($script_dir));
        }

        $this->request_uri = $uri ?: '/';
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Registra una ruta GET
     */
    public function get($path, $callback)
    {
        $this->addRoute('GET', $path, $callback);
    }

    /**
     * Registra una ruta POST
     */
    public function post($path, $callback)
    {
        $this->addRoute('POST', $path, $callback);
    }

    /**
     * Registra una ruta PUT
     */
    public function put($path, $callback)
    {
        $this->addRoute('PUT', $path, $callback);
    }

    /**
     * Registra una ruta DELETE
     */
    public function delete($path, $callback)
    {
        $this->addRoute('DELETE', $path, $callback);
    }

    /**
     * Afegeix una ruta al registre
     */
    private function addRoute($method, $path, $callback)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'callback' => $callback,
            'regex' => $this->pathToRegex($path)
        ];
    }

    /**
     * Converteix una ruta amb paràmetres a regex
     */
    private function pathToRegex($path)
    {
        $pattern = preg_replace('/{([a-z_]+)}/', '(?P<$1>[^/]+)', $path);
        return '#^' . $pattern . '$#';
    }

    /**
     * Resol la ruta i executa el callback corresponent
     */
    public function dispatch()
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $this->request_method) {
                if (preg_match($route['regex'], $this->request_uri, $matches)) {
                    // Filtra només els paràmetres nomenats
                    $params = array_filter($matches, function($key) {
                        return is_string($key);
                    }, ARRAY_FILTER_USE_KEY);

                    return $this->executeCallback($route['callback'], $params);
                }
            }
        }

        // Ruta no trobada
        http_response_code(404);
        return $this->render404();
    }

    /**
     * Executa el callback de la ruta
     */
    private function executeCallback($callback, $params = [])
    {
        if (is_callable($callback)) {
            return call_user_func_array($callback, [$params]);
        } elseif (is_array($callback) && count($callback) === 2) {
            // Format: ['ControllerClass', 'methodName']
            $controller_class = $callback[0];
            $method = $callback[1];
            
            if (class_exists($controller_class)) {
                $controller = new $controller_class();
                return call_user_func_array([$controller, $method], [$params]);
            }
        }

        http_response_code(500);
        return '<h1>Error: Callback no valid</h1>';
    }

    /**
     * Renderitza una pàgina 404
     */
    private function render404()
    {
        return '<h1>404 - Pàgina no trobada</h1><p>La ruta sol·licitada no existeix.</p>';
    }

    /**
     * Obté la base URL
     */
    public static function getBaseUrl()
    {
        $config = require __DIR__ . '/../config/config.php';
        return $config['base_url'] ?? '';
    }
}
