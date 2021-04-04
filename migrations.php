<?php
/**
 * php-framework
 *
 * @autor: dimexis
 * @date: 02.04.21
 * @time: 17:47
 * @file: migrations.php
 */

use App\controllers\AuthController;
use App\controllers\SiteController;
use globalindex\phpmvc\Application;

require_once __DIR__ . "/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
  "db" => [
    "dsn" => $_ENV['DB_DSN'],
    "user" => $_ENV['DB_USER'],
    "password" => $_ENV['DB_PASSWORD']
  ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();