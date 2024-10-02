<?php
class Agent {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllAgents() {
        $query = "SELECT * FROM agents";
        $result = pg_query($this->db, $query);
        return pg_fetch_all($result);
    }

    public function getAgentById($id) {
        $query = "SELECT * FROM agents WHERE id = $1";
        $result = pg_query_params($this->db, $query, array($id));
        return pg_fetch_assoc($result);
    }

    public function createAgent($data) {
        $query = "INSERT INTO agents (nom, prenom, date_naissance, code_identification, nationalite)
                  VALUES ($1, $2, $3, $4, $5)";
        $params = array($data['nom'], $data['prenom'], $data['date_naissance'], $data['code_identification'], $data['nationalite']);
        return pg_query_params($this->db, $query, $params);
    }

    public function updateAgent($id, $data) {
        $query = "UPDATE agents SET nom=$1, prenom=$2, date_naissance=$3, code_identification=$4, nationalite=$5 WHERE id=$6";
        $params = array($data['nom'], $data['prenom'], $data['date_naissance'], $data['code_identification'], $data['nationalite'], $id);
        return pg_query_params($this->db, $query, $params);
    }

    public function deleteAgent($id) {
        $query = "DELETE FROM agents WHERE id=$1";
        return pg_query_params($this->db, $query, array($id));
    }
}
