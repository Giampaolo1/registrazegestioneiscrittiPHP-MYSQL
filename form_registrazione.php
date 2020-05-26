<?php
  $connessione = mysqli_connect("localhost","root","root","contatti");

  if($connessione){
    echo "STATUS DB: Connesso";
  }
?>

<?php

  $avviso="";

  if(isset($_POST["submit"])){
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $mail = $_POST["email"];

    if(!empty($nome) && !empty($cognome) && !empty($mail)){

      $query = "INSERT INTO utenti(nome,cognome,email) VALUES('{$nome}','{$cognome}','{$mail}')";

      $creaUtenti = mysqli_query($connessione,$query);

      if (!$creaUtenti) {
        die('Query fallita' . mysqli_error($connessione));
      }

      $avviso = "Dati registrati con successo";
      echo $avviso;
      }else{
      $avviso = "I campi non devono essere vuoti";
      echo $avviso;
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

    <title>Form di registrazione</title>
  </head>
  <body>

    <div class="container-fluid">
      <h2>Lascia i tuoi dati</h2>
      <form action="form_registrazione.php" method="post" class="register-form">

  			<div class="row">
  				<div class="col-xs-6 col-sm-6 col-md-6">
            <label for="nome">NOME</label>
            <input type="text" name="nome" class="form-control">
  				</div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="cognome">COGNOME</label>
            <input type="text" name="cognome" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="email">EMAIL</label>
            <input type="email" name="email" class="form-control">
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <button class="btn-default regbutton" type="button" name="submit">Registrati</button>
          </div>
        </div>

      </form>
    </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  </body>
</html>
