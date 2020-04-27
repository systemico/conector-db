<?php
require_once dirname(__FILE__)."/../vendor/autoload.php";
require_once dirname(__FILE__)."/Settings.php";
use conector_db\ConectorDB;

$conector= ConectorDB::get_conector(Settings::$DB_HOST,Settings::$DB_USER, Settings::$DB_PASSWORD, Settings::$DB_NAME);
print_r($conector->select("show tables"));