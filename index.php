<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Idea box</title>
    
    <link href="style.css" rel="stylesheet"> 
</head>
<body>

<div class="title">
    <center><i><u><h1>Idea box</h1></u></i></center>
</div>

    <div class="row">
        <div class="col-6">
          <p>Dans le but d’améliorer la qualité de vie de la promotion et surtout de répondre au besoin de chacun,
             le bureau des étudiants a décidé de créer une boite à lettre où chaque  étudiants pourra déposer ces suggestions,
              idée et  plainte.
               Etant donné que nous sommes des jeunes, les membres du club d’info ont pensé que les étudiants seront plus à l’aise en
                déposant leur idée sur une plateforme en ligne.</p>
        </div>
        <div class="images">
            <img src="images/chat.avif" height="420em" width="500em" > 
        </div>
    </div>
         <form action="index.php" methode="post" >
        <label class="x">Seules vos idées nous feront avancée!</label></br>
        <textarea name="suggestion" rows="5" cols="100em"required class="zone"></textarea>
        <input type="submit" value="Send" name="envoie">
        </form>
    <?php

    // si le formulaire est remplie le message est envoyé
    if(isset($_POST["envoie"]) && !empty($_POST['suggestion'])){

    $to="bde@gmail.com";
    $subject="Idée d'amélioration pour la promotion";
    $message=$_POST["suggestion"];
    $headers="content-type: text/plain; charset=utf-8\r\n";
    $headers .="from:bruel23.aps2a@gmail.com\r\n";

    if(mail($to, $subject,$message,$headers)){
    echo "Votre suggestion a été envoyé";
    }

    else {
    echo"erreur de l'envoye";
    }
    }
    ?> 
    <div class="citations">
        <blockquote>Ce n'est qu'en changeant l'éducation que l'on peut changer le monde.<i>Pape François</i> </blockquote>
    </div>
    <footer>
      <article class="col-md-12">     <img src="Images/Logo SESAME.png" width="100" height="100"></article> 
<i>
        <font color="black">
    <b> 
        Developpeurs:Club info P23<br>
         Campus SESAME Ambatoroka<br>
        Enceinte UCM 101 Antananarivo, Madagascar<br>
        Téléphone: +261 34 68 003 92<br>
    </b>
        </font>
</i>
      </footer>
</body>
</html>