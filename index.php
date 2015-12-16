<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello Steve</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <h2>Environment vars</h2>
    <code>
      <?php print_r($_ENV);  ?>
    </code>
    <h2>
      The code below will output the results from connecting to MySQL
    </h2>
    <?php
      $servername = $_ENV["MYSQL_SERVICE_HOST"];
      $username = $_ENV["MYSQL_USER"];
      $password = $_ENV["MYSQL_PASSWORD"];
      $database = $_ENV["MYSQL_DATABASE"];

      try {
          $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo 'Connected successfully';
      } catch (PDOException $e) {
          echo 'Connection failed: '.$e->getMessage();
      }
    ?>
    <h2>phpinfo</h2>
    <?php

      phpinfo();

    ?>
  </body>
</html>
