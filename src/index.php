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
    SELECT     dept.dept_no, dept.dept_name, CONCAT_WS(' ', emp.first_name,emp.last_name) AS 'Manager', dm.from_date as 'From Date' 
    FROM       departments dept 
    INNER JOIN dept_manager dm ON dm.dept_no = dept.dept_no 
    INNER JOIN employees emp ON emp.emp_no = dm.emp_no 
    WHERE      dm.to_date = '9999-01-01' 
    ORDER BY   dept.dept_no;
    ";
    $stmt = $con->prepare($query);
    $stmt->execute();
    if ($stmt = $con->prepare($query)) {

      $stmt->execute();
      ?>
      <h2>Departments</h2>
      <table>
        <th>Dept. No</th><th>Dept. Name</th><th>Dept. Manager</th>
      <?php
      foreach ($stmt as $row) {
        ?>
        <tr>
          <td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?><BR><i>since <?=$row[3]?></i></td>
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