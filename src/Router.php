<?php

namespace Src;

class Router
{
    public static function dispatch()
    {
        $routes = require documentRoot("app/Routes/web.php");

        $controller = "";
        $action = "";
        $url = getUrl();

        // Variável para armazenar se uma rota foi encontrada
        $routeFound = false;

        foreach ($routes as $pattern => $route) {
            $pattern = "~^" . str_replace(['/', '\d+'], ['\/', '(\d+)'], $pattern) . "$~";

            if (preg_match($pattern, $url, $matches)) {
                $routeFound = true;
                array_shift($matches);
                [$controller, $action] = explode("@", $route);
                break;
            }
        }

        // Se nenhuma rota foi encontrada, lançar um erro
        if (!$routeFound) {
            View::render("notfound");
            die();
        }

        try {
            require documentRoot("app/Controllers/$controller.php");

            $requestedController = new $controller();

            $requestedController->$action(...$matches);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
