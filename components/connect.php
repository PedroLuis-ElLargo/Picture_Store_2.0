<?php
  $db_name = 'mysql:host=localhost; dbname=db_pictures_store';
  $db_user_name = 'root';
  $db_user_pass = '';

  /**
   * @param string $db_name
   * @param string $db_user_name
   * @param string $db_user_pass
   * @return mixed
   */
  $connection = new PDO($db_name, $db_user_name, $db_user_pass);
?>