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
    SELECT dept_no, dept_name
    FROM   departments
    ";
    $stmt = $con->prepare($query);
    $stmt->execute();
    if ($stmt = $con->prepare($query)) {

      $stmt->execute();
      ?>
      <h2>Departments</h2>
      <table>
        <th>Dept. No</th><th>Dept. Name</th>
      <?php
      foreach ($stmt as $row) {
        ?>
        <tr>
          <td><?=$row[0]?></td><td><?=$row[1]?></td>
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
