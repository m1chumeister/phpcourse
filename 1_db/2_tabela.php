<!DOCTYPE html>
<htlm lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli users </h3>
    <table>
      <tr>
        <th>Imię i nazwisko</th>
        <th>Miasto</th>
        <th>Data utworzenia konta</th>
      </tr>
    <?php
      require_once('./scripts/1_connect.php');
      // $sql = "SELECT * FROM users";
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
      $result = $conn->query($sql);
      while ($users = $result->fetch_assoc()) {
        echo <<< E
        <tr>
        <td>$users[name] $users[surname]</td>
        <td>$users[city]</td>
        <td>$users[created_at]</td>
        </tr>

E;
      }
     ?>
    </table>
   </body>
 </htlm>
