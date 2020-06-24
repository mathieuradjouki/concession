<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="c'est un site de concessionnaire automobile" />
    <title>CONCESSIONAUTO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4f9557e6e.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d4f9557e6e.js" crossorigin="anonymous"></script>
    <link href="/stylesheet.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="pageaccueil.css">


  </head>
  <body>
  <header>
    <section id="navbartoggle">
          <div id="opennavtoggle-btn" class="opennavbtn"  >
             <button class="opennavbtnstyle" onclick="openNav()"> ☰ </button>
          </div>
          <div id="mySidebartoggle" class="sidebartoggle">
            <a href="#" class="closenavbtn" onclick="closeNav()">× Fermer</a>
            <a href="#">Accueil</a>
            <a href="#">Véhicules neufs</a>
            <a href="#">Véhicules d’occasion</a>
            <a href="#">Nos services</a>
            <a href="#">Notre expertise</a>
            <a href="#">Contact</a>
          </div>

          <div  class="container containerwidth logoloupe">
            <div  class="logo ">
                <img src="imagesaccueil/logo/logo.png" alt="logo">
            </div>
            <div id="logoloupednone" class="iconeloupe ">
                <a href="myFilterdnone" onclick="openFilter"><i class="fas fa-search text-white" ></i></a>
            </div>
          </div>

        <script type="text/javascript">
            function openNav() {
              document.getElementById("mySidebartoggle").style.width = "700px";
              document.getElementById("opennavtoggle-btn").style.display = "none";
              document.getElementById("myFilterdnone").style.display = "none";
              document.getElementById("logoloupednone").style.display = "block";
            }
            function closeNav() {
              document.getElementById("mySidebartoggle").style.width = "0";
              document.getElementById("opennavtoggle-btn").style.display= "block";
              document.getElementById("logoloupednone").style.display = "none";
              document.getElementById("myFilterdnone").style.display = "block";
            }

          </script>
    </section>

</header>
