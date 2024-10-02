<?php

require_once 'vendor/autoload.php'; //necessaire pour couchdb

// Connexion PostgreSQL en utilisant les variables d'environnement
function connectPostgres()
{
    $connection_string = 
        "host=" . getenv('PG_HOST') .
        " port=" . getenv('PG_PORT') .
        " dbname=" . getenv('PG_DBNAME') .
        " user=" . getenv('PG_USER') .
        " password=" . getenv('PG_PASSWORD');
    $conn = pg_connect($connection_string);

    if (!$conn) {
        die("Error in connection: " . pg_last_error());
    }

    return $conn;
}

// Connexion CouchDB en utilisant les variables d'environnement
function connectCouchDB()
{


    $client = new \PHPOnCouch\CouchClient('http://' . getenv('COUCHDB_USER') . ':' . getenv('COUCHDB_PASSWORD') . '@' . getenv('COUCHDB_URL'), getenv('COUCHDB_DB'));

    return $client;
}
