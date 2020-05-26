<?php
  $connessione = mysqli_connect("localhost","root","root","contatti");

  if($connessione){
    echo "STATUS DB: Connesso";
  }
?>
