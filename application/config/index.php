<?php
require_once "controllers/AnggotaController.php";

$controller = new AnggotaController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    default:
        $controller->index();
}