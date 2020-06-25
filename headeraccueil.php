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
  <section id="headerversiondesktop">
    <div id="navbartoggle" class="row">
        <div class="col-lg">
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
                <a href="#" onclick="openFilter"><i class="fas fa-search text-white" ></i></a>
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
        </div>
    </div>
  </section>

    <section id="headerversionmobile">
      <div id="navbartogglemobile" >
        <div class="container-fluid row ml-0 pr-0 pl-0 bgnavbar ">
            <div id="opennavtoggle-btnmobile" class="opennavbtn"  >
               <button class="opennavbtnstylemobile" onclick="openNavmobile()"> ☰ </button>
            </div>
                <img src="imagesaccueil/logo/logo.png" class="img-fluid  logomobile" alt="logo">
                </div>
          <div class="container-fluid">
            <div class="container navbarlistcontainer col-md col-lg">
              <div id="mySidebartogglemobile" class=" sidebartogglemobile">
              <a href="#" class="closenavbtnmobile" onclick="closeNavmobile()">×</a>
              <a href="#" class="sidebarlinks" >Accueil</a>
              <a href="#">Véhicules neufs</a>
              <a href="#">Véhicules d’occasion</a>
              <a href="#">Nos services</a>
              <a href="#">Notre expertise</a>
              <a href="#">Contact</a>
            </div>
            </div>
          </div>


          <script type="text/javascript">
              function openNavmobile() {
                document.getElementById("mySidebartogglemobile").style.height = "100vh";
                document.getElementById("opennavtoggle-btnmobile").style.display = "none";
                document.getElementById("myFilterdnonemobile").style.display = "none";
                        }
              function closeNavmobile() {
                document.getElementById("mySidebartogglemobile").style.height = "0";
                document.getElementById("opennavtoggle-btnmobile").style.display= "block";
                document.getElementById("myFilterdnonemobile").style.display = "block";
              }
            </script>
      </div>
    </section>

</header>
