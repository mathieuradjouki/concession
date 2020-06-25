<?php
include ('header.php')
 ?>
<!--Banner et Critères--><link rel="stylesheet" href="style.css">
 <header class ="banner-vehicule">
  <section class="section-criteres-voitures"> <!--debut criteres-->
    <form>
      <div class="row row-criteres-voitures">
        <div class="col-2">
          <input type="text" class="criteres-voitures" placeholder="Marque">
        </div>
        <div class="col-2">
          <input type="text" class="criteres-voitures" placeholder="Catégorie">
        </div>
        <div class="col-2">
          <input type="text" class="criteres-voitures" placeholder="Carburant">
        </div>
        <div class="col-2">
          <input type="text" class="criteres-voitures" placeholder="Puissances fiscales">
        </div>
        <div class="col">
          <button class="btn-recherche-voitures  formbutton " type="submit">RECHERCHER</button>
        </div>
        <div class="col">
          <button class="btn-reset-voitures formbutton" type="submit">RESET</button>
        </div>
        <div  class="col">
          <button type="button" class="bg-transparent btn-plus-voitures" onClick="Show('span_contenus')"><img src="img/header/bouton+.png" /></button>
        </div>
    </div>
      <span id="span_contenus" class="criteres-masquer">
          <div class="row row-voitures">
            <div class="col-2">
                <input type="text" class="criteres-voitures" placeholder="Modèle">
            </div>
            <div class="col-2 text-cacher">
                  <input type="text" class="criteres-voitures" placeholder="Prix">
            </div>
            <div class="col-2 text-cacher">
                  <input type="text" class="criteres-voitures" placeholder="Boite de vitesses">
            </div>
            <div class="col-2 text-cacher">
                  <input type="text" class="criteres-voitures" placeholder="En stock">
            </div>
          </div>
      </span>
    </form>
  </section> <!--fin criteres-->
  <h4 class="vehicules-neufs pt-5"> VEHICULES NEUFS </h4>
</header>
<!--Fin Banner et Critère-->

<!--Toutes les voitures neuves -->
<main>
  <div class="container-fluid fond-voitures">
    <div Id="page-voitures" class="container pt-3 container-card">

      <!--ligne 1-->
      <div class="row row-voitures">
        <div class="col-lg-3">
          <div class="card card-voitures" >
            <div class="card-body">
              <h5 class="card-title">ALFA ROMEO Guilia 2.2JTD ch AT8 Super</h5>
              <p class="card-text tarif-voitures">36 000 €</p>
            </div>
            <div class="hover-img">
              <img src="img/voiture/ligne-1/img-1" class="card-img-top img-overlay-voitures" alt="ligne-1 / voiture-1">
               <div class="overlay">
                 <div class="text">
                 <p> CATEGORIE : Berline </p>
                 <p> KILOMETRAGE : 10 </p>
                 <p> CARBURANT : Diesel </p>
                 <p> BOITE DE VITESSE : Automatique </p>
                 <p>  P.F. : 9 </p>
                 <p> GARANTIE : Constructeur<p>
                 <p> EN STOCK : Non</p>
               <img src="img/redb.png" class="redb">
                 </div>
                 </div>
               </div>



            </div>
          </div>

        <div class="col-lg-3">
          <div class="card card-voitures" >
            <div class="card-body">
              <h5 class="card-title">ALFA ROMEO Guilietta Serie 2 1.4 TB ...</h5>
              <p class="card-text tarif-voitures">23 650 €</p>
            </div>
              <img src="img/voiture/ligne-1/img-2" class="card-img-top" alt="ligne-1 / voiture-2">
          </div>
        </div>
          <div class="col-lg-3">
            <div class="card card-voitures" >
              <div class="card-body">
                <h5 class="card-title">Audi A1 Sportback 1.4 TDI 0 ultra S-Line</h5>
                <p class="card-text tarif-voitures">21 600 €</p>
              </div>
                <img src="img/voiture/ligne-1/img-3" class="card-img-top" alt="ligne-1 / voiture-3">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card card-voitures" >
              <div class="card-body">
                <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                <p class="card-text tarif-voitures">32 600 €</p>
              </div>
                <img src="img/voiture/ligne-1/img-4" class="card-img-top" alt="ligne-1 / img-4">
            </div>
          </div>
        </div>

        <!--Fin ligne 1-->


        <!--ligne 2-->
        <div class="row row-voitures">
          <div class="col-lg-3">
            <div class="card card-voitures" >
              <div class="card-body">
                <h5 class="card-title">Audi A6 AVANT V6 3.0 TDI 272 S Tronic ...</h5>
                <p class="card-text tarif-voitures">63 850 €</p>
              </div>
                <img src="img/voiture/ligne-2/img-1" class="card-img-top" alt="ligne-2 / voiture-1">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 ...</h5>
                  <p class="card-text tarif-voitures">31 900 €</p>
                </div>
                  <img src="img/voiture/ligne-2/img-2" class="card-img-top" alt="ligne-2 / voiture-2">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title ">Audi Q5 NOUVEAU 2.0 TDI 150</h5>
                  <p class="card-text tarif-voitures">38 100 €</p>
                </div>
                  <img src="img/voiture/ligne-2/img-3" class="card-img-top" alt="ligne-2 / voiture-3">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
                  <p class="card-text tarif-voitures">31 900 €</p>
                </div>
                  <img src="img/voiture/ligne-2/img-4" class="card-img-top" alt="ligne-2 / img-4">
              </div>
            </div>
          </div>
          <!--Fin ligne 2-->

          <!--ligne 3-->
          <div class="row row-voitures">
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">BMW Serie 3 Tourning F31 LCI2 Tourning ... </h5>
                  <p class="card-text tarif-voitures">36 650 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-1" class="card-img-top" alt="ligne-3 / voiture-1">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">BMW X1 F48 XDRIVE 20D 190CH BVA8 M ...</h5>
                  <p class="card-text tarif-voitures">43 250 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-2" class="card-img-top" alt="ligne-3 / voiture-2">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN C3 PureTech 82ch Shine</h5>
                  <p class="card-text tarif-voitures">15 000 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-3" class="card-img-top" alt="ligne-3 / voiture-3">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                  <p class="card-text tarif-voitures">32 600 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-4" class="card-img-top" alt="ligne-3 / img-4">
              </div>
            </div>
          </div>
          <!--Fin ligne 3-->

          <!--ligne 4-->
          <div class="row row-voitures">
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN GRAND C4 PICASSO BLUEHDI ...</h5>
                  <p class="card-text tarif-voitures">25 750 €</p>
                </div>
                  <img src="img/voiture/ligne-4/img-1" class="card-img-top" alt="ligne-4 / voiture-1">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN C4 PureTech 130 S&S EAT6 Shine</h5>
                  <p class="card-text tarif-voitures">20 100 €</p>
                </div>
                  <img src="img/voiture/ligne-4/img-2" class="card-img-top" alt="ligne-4 / voiture-2">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN Berlingo Multispace PureTech ...</h5>
                  <p class="card-text tarif-voitures">18 200 €</p>
                </div>
                  <img src="img/voiture/ligne-4/img-3" class="card-img-top" alt="ligne-4 / voiture-3">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title ">CITROËN C1 VTi 68 Feel</h5>
                  <p class="card-text tarif-voitures">11 300 €</p>
                </div>
                  <img src="img/voiture/ligne-4/img-4" class="card-img-top" alt="ligne-4 / img-4">
              </div>
            </div>
          </div>
          <!--Fin ligne 4-->

          <!--ligne 5-->
          <div class="row row-voitures">
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN C3 Aircross pureTech ...</h5>
                  <p class="card-text tarif-voitures">21 600 €</p>
                </div>
                  <img src="img/voiture/ligne-5/img-1" class="card-img-top" alt="ligne-5 / voiture-1">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN C4 Cactus BlueHDi 100 Shine</h5>
                  <p class="card-text tarif-voitures">18 000 €</p>
                </div>
                  <img src="img/voiture/ligne-5/img-2" class="card-img-top" alt="ligne-5 / voiture-2">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN Jumpy Fourgon TOLE M ...</h5>
                  <p class="card-text tarif-voitures">19 750 €</p>
                </div>
                  <img src="img/voiture/ligne-5/img-3" class="card-img-top" alt="ligne-5 / voiture-3">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">DS DS3 PureTech 110 S&S PureTech ...</h5>
                  <p class="card-text tarif-voitures">16 990 €</p>
                </div>
                  <img src="img/voiture/ligne-5/img-4" class="card-img-top" alt="ligne-5 / img-4">
              </div>
            </div>
          </div>
          <!--Fin ligne 5-->

          <!--ligne 6-->
          <div class="row row-voitures">
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">DS DS4 Crossback PureTech130 S&S ...</h5>
                  <p class="card-text tarif-voitures">22 650 €</p>
                </div>
                  <img src="img/voiture/ligne-6/img-1" class="card-img-top" alt="ligne-6 / voiture-1">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Fiat 500X MY17 1.6 MULTIJET 120 CH</h5>
                  <p class="card-text tarif-voitures">20 050 €</p>
                </div>
                  <img src="img/voiture/ligne-6/img-2" class="card-img-top" alt="ligne-6 / voiture-2">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Fiat Fullback Double Cabine 2.4 18 CH ...</h5>
                  <p class="card-text tarif-voitures">26 750 €</p>
                </div>
                  <img src="img/voiture/ligne-6/img-3" class="card-img-top" alt="ligne-6 / voiture-3">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-voitures" >
                <div class="card-body">
                  <h5 class="card-title">Ford KUGA 2.0 TDCi 180 S&S 4x4 ...</h5>
                  <p class="card-text tarif-voitures">33 900 €</p>
                </div>
                  <img src="img/voiture/ligne-6/img-4" class="card-img-top" alt="ligne-6 / img-4">
              </div>
            </div>
          </div>
          <!--Fin ligne 6-->

          <!--Bouton MORE et back-top-->

          <div class="row row-more-voitures">
          <button type="button" class="more bg-transparent col-lg-2 mb-5" onClick="afficher_cacher('span_more')">MORE</button>
           <a href="#top" class="top"><img src="img/retour-banner.png"  alt="bouton"></a>
          </div>

         <!-- Voiture masquer-->
          <span id="span_more" class="afficher">
            <!--ligne 1 -->
            <div class="row row-voitures">
              <div class="col-lg-3">
                <div class="card card-voitures" >
                  <div class="card-body">
                    <h5 class="card-title text-red">ALFA ROMEO Guilia 2.2JTD ch AT8 Super</h5>
                    <p class="card-text prix ">36 000 €</p>
                  </div>
                  <img src="img/voiture/ligne-1/img-1" class="card-img-top" alt="ligne-1 / voiture-1">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-voitures" >
                  <div class="card-body">
                    <h5 class="card-title">ALFA ROMEO Guilietta Serie 2 1.4 TB ...</h5>
                    <p class="card-text prix-voitures">23 650 €</p>
                  </div>
                    <img src="img/voiture/ligne-1/img-2" class="card-img-top" alt="ligne-1 / voiture-2">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-voitures" >
                  <div class="card-body">
                    <h5 class="card-title">Audi A1 Sportback 1.4 TDI 0 ultra S-Line</h5>
                    <p class="card-text tarif-voitures">21 600 €</p>
                  </div>
                    <img src="img/voiture/ligne-1/img-3" class="card-img-top" alt="ligne-1 / voiture-3">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-voitures" >
                  <div class="card-body">
                    <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                    <p class="card-text tarif-voitures">32 600 €</p>
                  </div>
                    <img src="img/voiture/ligne-1/img-4" class="card-img-top" alt="ligne-1 / img-4">
                </div>
              </div>
              </div>
              <!--Fin ligne 1-->
              <!--ligne 2-->
              <div class="row row-voitures">
                <div class="col-lg-3">
                  <div class="card card-voitures" >
                    <div class="card-body">
                      <h5 class="card-title">Audi A6 AVANT V6 3.0 TDI 272 S Tronic ...</h5>
                      <p class="card-text tarif-voitures">63 850 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-1" class="card-img-top" alt="ligne-2 / voiture-1">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-voitures" >
                    <div class="card-body">
                      <h5 class="card-title">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 ...</h5>
                      <p class="card-text tarif-voitures">31 900 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-2" class="card-img-top" alt="ligne-2 / voiture-2">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-voitures" >
                    <div class="card-body">
                      <h5 class="card-title ">Audi Q5 NOUVEAU 2.0 TDI 150</h5>
                      <p class="card-text tarif-voitures">38 100 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-3" class="card-img-top" alt="ligne-2 / voiture-3">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card card-voitures" >
                    <div class="card-body">
                      <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
                      <p class="card-text tarif-voitures">31 900 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-4" class="card-img-top" alt="ligne-2 / img-4">
                  </div>
                </div>
              </div>  <!--fin ligne 2-->
            </span> <!--Fin contenus cacher-->
          </div>
        </div>
      </div>

      <!--version mobile-->
      <section class="bg-mobile-voitures">
      </section>
      <section class="container-fluid carousel-voitures mt-4">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
            <p class="card-text tarif-voitures">31 900 €</p>
            <div class="hover-img">
            <img src="img/voiture/ligne-1/img-1" class="d-block w-100" alt="...">
            <div class="overlay">
              <div class="text">
              <p> CATEGORIE : Berline </p>
              <p> KILOMETRAGE : 10 </p>
              <p> CARBURANT : Diesel </p>
              <p> BOITE DE VITESSE : Automatique </p>
              <p>  P.F. : 9 </p>
              <p> GARANTIE : Constructeur<p>
              <p> EN STOCK : Non</p>
            <img src="img/redb.png" class="redb">
              </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
            <p class="card-text tarif-voitures">31 900 €</p>
            <img src="img/voiture/ligne-1/img-2" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
            <p class="card-text tarif-voitures">31 900 €</p>
            <img src="img/voiture/ligne-1/img-3" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="bg-mobile-voitures-2">
      <div class="row row-voitures">
        <div class="miniatures-voitures" >
        <img src="img/voiture/ligne-1/img-1" class="img-mobile-voiture" alt="ligne-1/img-1">
          <img src="img/voiture/ligne-1/img-2" class="img-mobile-voiture" alt="...">
            <img src="img/voiture/ligne-1/img-3" class="img-mobile-voiture" alt="...">
          </div>
      </div>
    </section>
</main>

  <script type="text/javascript">
  /*bouton critère*/
        function Show(id) {
        var span = document.getElementById(id);
        if(span.style.display == "none") {
        span.style.display = "inline";
        } else {
        span.style.display = "none";
        }
        }
  /*bouton more*/
        function afficher_cacher(id){
        var span = document.getElementById(id);
        if(span.style.display == "none") {
        span.style.display = "inline";
        } else {
        span.style.display = "none";
        }
        }

  </script>


<?php
include ('footer.php')
 ?>
