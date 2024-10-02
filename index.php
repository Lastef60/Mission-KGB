<?php

require_once 'config/db.php';

// connexion à la BDD PostgreSQL
$pgsqlConnection = connectPostgres();

// connexion à la BDD CouchDB
$couchdbConnection = connectCouchDB();
