<?php
require_once 'models/Agent.php';

class AgentController {
    private $db;
    private $agentModel;

    public function __construct($db) {
        $this->db = $db;
        $this->agentModel = new Agent($this->db);
    }

    public function listAgents() {
        $agents = $this->agentModel->getAllAgents();
        include 'views/agents/list.php';
    }

    public function createAgent() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'date_naissance' => $_POST['date_naissance'],
                'code_identification' => $_POST['code_identification'],
                'nationalite' => $_POST['nationalite']
            ];
            $this->agentModel->createAgent($data);
            header('Location: index.php?action=listAgents');
        } else {
            include 'views/agents/create.php';
        }
    }

    public function updateAgent($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'date_naissance' => $_POST['date_naissance'],
                'code_identification' => $_POST['code_identification'],
                'nationalite' => $_POST['nationalite']
            ];
            $this->agentModel->updateAgent($id, $data);
            header('Location: index.php?action=listAgents');
        } else {
            $agent = $this->agentModel->getAgentById($id);
            include 'views/agents/update.php';
        }
    }

    public function deleteAgent($id) {
        $this->agentModel->deleteAgent($id);
        header('Location: index.php?action=listAgents');
    }
}
