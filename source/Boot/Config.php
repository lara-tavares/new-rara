<?php
// Definição de todas as constantes do sistema
// Esse script consta no composer.json para ser incluido automaticamente

// DATABASE

define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "..."); // aqui deve ser alterado para o nome do banco de dados


// PROJECT URLs

define("CONF_URL_BASE", "http://www.localhost/new-rara"); // depois da / deve vir o nome da pasta do trabalho
define("CONF_URL_TEST", "http://www.localhost/new-rara"); // depois da / deve vir o nome da pasta do trabalho

// VIEW

define("CONF_VIEW_WEB", __DIR__ . "/../../themes/web/");

// SITE

define("CONF_SITE_NAME", "NEW RARA");
