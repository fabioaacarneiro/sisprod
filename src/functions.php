<?php

function getRequestMethod(): string
{
    return $_SERVER["REQUEST_METHOD"];
}

function getUrl(): string
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

function route(string $route): void
{
    echo $route;
}

function rootPath(?string $path = ''): string
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];

    return $protocol . '://' . $host . $path;
}

function documentRoot(string $filename = "")
{

    $completePath =  dirname(__DIR__, 1)  . "/$filename";
    return $completePath;
}

function partial(string $partialFilename, $data = [])
{
    extract($data);

    $partial = require(documentRoot("/app/Views/partials/$partialFilename.php"));
    return $partial;
}

function asset(string $asset)
{
    echo rootPath("/assets/$asset");
}

function dd(...$data)
{
    echo "<pre>";
    var_dump($data);
    die();
}

function redirect(string $route)
{
    return header("Location: " . rootPath($route));
}
