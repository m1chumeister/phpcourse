<!DOCTYPE html>
<htlm lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h3>Użytkownicy z tabeli users </h3>
    <?php
      require_once('./scripts/1_connect.php');
      // $sql = "SELECT * FROM users";
      $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
      $result = $conn->query($sql);
      $count=0;
      while ($users = $result->fetch_assoc()) {
        $count++;
        echo <<< E
        Użytkownik $count:<br>
        Imię i nazwisko: $users[name] $users[surname]<br>
        Miasto: $users[city]<br>
        Data utworzenia: $users[created_at]
        <hr>
E;
      }
     ?>
   </body>
 </htlm>
