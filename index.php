<?php

require_once 'config/db.php';
require_once 'controllers/AgentController.php';

$conn = connectPostgres();
$agentController = new AgentController($conn);

$action = $_GET['action'] ?? 'listAgents';

switch ($action) {
    case 'listAgents':
        $agentController->listAgents();
        break;
    case 'createAgent':
        $agentController->createAgent();
        break;
    case 'updateAgent':
        $agentController->updateAgent($_GET['id']);
        break;
    case 'deleteAgent':
        $agentController->deleteAgent($_GET['id']);
        break;
    default:
        $agentController->listAgents();
        break;
}