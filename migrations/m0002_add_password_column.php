<?php
/**
 * php-framework
 *
 * @autor: dimexis aka Dietrich Bojko
 * @date: 02.04.21
 * @time: 19:55
 * @file: m0002_add_password_column.php
 */

class m0002_add_password_column
{
  public function up()
  {
    $db = \globalindex\phpmvc\Application::$app->db;
    $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL");
  }

  public function down()
  {
    $db = \globalindex\phpmvc\Application::$app->db;
    $db->pdo->exec("ALTER TABLE users DROP COLUMN password");
  }
}