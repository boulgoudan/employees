<!DOCTYPE html>
<html>
  <head>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th {
        color: white;
        background: green;
      }
    </style>
  </head>
  <body>
  <?php

    //echo phpinfo();

    // Database connection
    $MYSQL_HOST     = "mysql";
    $MYSQL_DATABASE = "employees";
    $MYSQL_PORT     = "3307";
    $MYSQL_USER     = "user";
    $MYSQL_PASSWORD = "password";

    $con = new PDO("mysql:host=$MYSQL_HOST;dbname=$MYSQL_DATABASE", $MYSQL_USER , $MYSQL_PASSWORD);
    $query = "
    SELECT firstname, lastname, is_director 
     FROM $MYSQL_DATABASE
    ";
    $stmt = $con->prepare($query);
    $stmt->execute();
    if ($stmt = $con->prepare($query)) {

      $stmt->execute();
      ?>
      <h2>List of employees</h2>
      <table>
        <th>Firstname</th><th>Lastname</th><th>Is diector?</th>
      <?php
      foreach ($stmt as $row) {
        ?>
        <tr>
          <td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?></td>
        </tr>
        <?php
      }
      ?>
      </table>
      <?php
    }

    $con = null;
    $sth = null;
  ?>
  </body>
</html>
