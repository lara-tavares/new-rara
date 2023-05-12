<?php

ob_start();

session_start();

require __DIR__ . "/vendor/autoload.php";
use CoffeeCode\Router\Router;

$route = new Router(CONF_URL_BASE, ":");

/**
 * Web Routes
 */

$route->namespace("Source\App");

/**
 * Web Routs
 */

$route->group("/"); // agrupa em /app
$route->get("/","Web:home");
$route->get("/sobre","Web:about");
$route->get("/contato","Web:contact");
$route->get("/produtos","Web:product");
$route->get("/testemunhas","Web:testimonial");

$route->group(null); // desagrupo do /app

/*
 * Erros Routes
 */

$route->group("error")->namespace("Source\App");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

/*
 * Error Redirect
 */

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}

ob_end_flush();