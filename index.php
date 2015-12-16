<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello Steve</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <p>
      The code below will output the results from connecting to MySQL
    </p>
    <?php
      $servername = 'localhost';
      $username = 'username';
      $password = 'password';

      try {
          $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo 'Connected successfully';
      } catch (PDOException $e) {
          echo 'Connection failed: '.$e->getMessage();
      }
    ?>
  </body>
</html>
