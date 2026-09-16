<?php
// Exibe erros de sintaxe na tela para ajudar no diagnóstico se algo falhar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define a URL base dinamicamente
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$script = dirname($_SERVER['SCRIPT_NAME']);
$baseUrl = rtrim($protocol . "://" . $host . $script, '/\\') . '/';

define('BASE_URL', $baseUrl);

// Carrega a model e o controller com require direto
if (file_exists('models/ProfileModel.php')) {
    require_once 'models/ProfileModel.php';
}

if (file_exists('controllers/ProfileController.php')) {
    require_once 'controllers/ProfileController.php';
    $controller = new ProfileController();
    $controller->index();
} else {
    echo "Erro: O arquivo controllers/ProfileController.php não foi encontrado.";
}