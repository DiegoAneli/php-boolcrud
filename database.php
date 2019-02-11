<?php

  include "env.php";

  $conn = new Mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error)
  {
    die('errore' . $conn->connect_error);

  }
  else {
    echo 'ok';

  }

 ?>
