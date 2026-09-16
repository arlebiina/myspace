<?php
// Detecta se a conexão é HTTP ou HTTPS
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Pega o diretório base dinamicamente (funciona em subpastas e domínios)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$baseUrl = $protocol . $_SERVER['HTTP_HOST'] . rtrim($scriptDir, '/') . '/';

define('BASE_URL', $baseUrl);