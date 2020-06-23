<?php
include ('header.php')
 ?>

 <header class ="banner">



    <!--sur banner-->
    <section class="section-criteres">
      <form class="critere">
        <div class="row">
          <div class="col-2">
            <input type="text" class="critere" placeholder="Marque">
          </div>
          <div class="col-2">
            <input type="text" class="critere" placeholder="Catégorie">
          </div>
          <div class="col-2">
            <input type="text" class="critere" placeholder="Carburant">
          </div>
          <div class="col-2">
            <input type="text" class="critere" placeholder="Puissances fiscales">
          </div>
          <div class="col">
            <button class="btn-red  formbutton " type="submit">RECHERCHER</button>
          </div>
          <div class="col">
            <button class="btn-black formbutton" type="submit">RESET</button>
          </div>
          <div  class="col">
            <button type="button" class="bg-transparent" onClick="Show('span_contenus')"><img src="img/header/bouton+.png" /></button>
          </div>
        </div>
        <span id="span_contenus" class="masquer">
            <div class="row contenu-cacher ">
              <div class="col-2 text-cacher">
                  <input type="text" class="critere" placeholder="Modèle">
              </div>
              <div class="col-2 text-cacher">
                    <input type="text" class="critere" placeholder="Prix">
              </div>
              <div class="col-2 text-cacher">
                    <input type="text" class="critere" placeholder="Boite de vitesses">
              </div>
              <div class="col-2 text-cacher">
                    <input type="text" class="critere" placeholder="En stock">
              </div>
            </div>
        </span>
      </form>
    </section>
    </header>
<main>
    <div class="container-fluid fond">
      <!--ligne 1-->
      <div class="container card pt-3">
        <div class="row">


          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title text-red">ALFA ROMEO Guilia 2.2JTD ch AT8 Super</h5>
                <p class="card-text prix ">36 000 €</p>
              </div>
              <div class="hover-img">
                <img src="img/voiture/ligne-1/img-1" class="card-img-top" alt="ligne-1 / voiture-1">
              <div class="overlay">
                <div class="text">
                <h6>CATEGORIE :</h6>
                  <p> Berline </p>
                <h6> KILOMETRAGE :</h6>
                  <p> 10 </p>
                <h6> CARBURANT : </h6>
                  <p> Diesel </p>
                <h6> BOITE DE VITESSE :<h6>
                  <p> Automatique </p>
                <h6> P.F. : </h6>
                  <p> 9 </p>
                <h6> GARANTIE : </h6>
                  <p> Constructeur<p>
                <h6> EN STOCK </h6>
                  <p>Non</p>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">ALFA ROMEO Guilietta Serie 2 1.4 TB ...</h5>
                <p class="card-text prix">23 650 €</p>
              </div>
                <img src="img/voiture/ligne-1/img-2" class="card-img-top" alt="ligne-1 / voiture-2">
            </div>
          </div>


          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Audi A1 Sportback 1.4 TDI 0 ultra S-Line</h5>
                <p class="card-text prix">21 600 €</p>
              </div>
                <img src="img/voiture/ligne-1/img-3" class="card-img-top" alt="ligne-1 / voiture-3">
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                <p class="card-text prix">32 600 €</p>
              </div>
                <img src="img/voiture/ligne-1/img-4" class="card-img-top" alt="ligne-1 / img-4">
            </div>
          </div>



          </div>



        <!--ligne 2-->

        <div class="row">
          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Audi A6 AVANT V6 3.0 TDI 272 S Tronic ...</h5>
                <p class="card-text prix">63 850 €</p>
              </div>
                <img src="img/voiture/ligne-2/img-1" class="card-img-top" alt="ligne-2 / voiture-1">
            </div>
          </div>


          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 ...</h5>
                <p class="card-text prix">31 900 €</p>
              </div>
                <img src="img/voiture/ligne-2/img-2" class="card-img-top" alt="ligne-2 / voiture-2">
            </div>
          </div>


          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title ">Audi Q5 NOUVEAU 2.0 TDI 150</h5>
                <p class="card-text prix pb-4">38 100 €</p>
              </div>
                <img src="img/voiture/ligne-2/img-3" class="card-img-top" alt="ligne-2 / voiture-3">
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
                <p class="card-text prix">31 900 €</p>
              </div>
                <img src="img/voiture/ligne-2/img-4" class="card-img-top" alt="ligne-2 / img-4">
            </div>
          </div>



          </div>


        <!--ligne 3-->
          <div class="row">


            <div class="col-lg-3">
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title">BMW Serie 3 Tourning F31 LCI2 Tourning ... </h5>
                  <p class="card-text prix">36 650 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-1" class="card-img-top" alt="ligne-3 / voiture-1">
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title">BMW X1 F48 XDRIVE 20D 190CH BVA8 M ...</h5>
                  <p class="card-text prix">43 250 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-2" class="card-img-top" alt="ligne-3 / voiture-2">
              </div>
            </div>


            <div class="col-lg-3">
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title">CITROËN C3 PureTech 82ch Shine</h5>
                  <p class="card-text prix pb-4">15 000 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-3" class="card-img-top" alt="ligne-3 / voiture-3">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                  <p class="card-text prix">32 600 €</p>
                </div>
                  <img src="img/voiture/ligne-3/img-4" class="card-img-top" alt="ligne-3 / img-4">
              </div>
            </div>



            </div>



          <!--ligne 4-->

            <div class="row">


              <div class="col-lg-3">
                <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">CITROËN GRAND C4 PICASSO BLUEHDI ...</h5>
                    <p class="card-text prix">25 750 €</p>
                  </div>
                    <img src="img/voiture/ligne-4/img-1" class="card-img-top" alt="ligne-4 / voiture-1">
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">CITROËN C4 PureTech 130 S&S EAT6 Shine</h5>
                    <p class="card-text prix">20 100 €</p>
                  </div>
                    <img src="img/voiture/ligne-4/img-2" class="card-img-top" alt="ligne-4 / voiture-2">
                </div>
              </div>


              <div class="col-lg-3">
                <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">CITROËN Berlingo Multispace PureTech ...</h5>
                    <p class="card-text prix">18 200 €</p>
                  </div>
                    <img src="img/voiture/ligne-4/img-3" class="card-img-top" alt="ligne-4 / voiture-3">
                </div>
              </div>

              <div class="col-lg-3">
                <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title pb-4">CITROËN C1 VTi 68 Feel</h5>
                    <p class="card-text prix pb-2">11 300 €</p>
                  </div>
                    <img src="img/voiture/ligne-4/img-4" class="card-img-top" alt="ligne-4 / img-4">
                </div>
              </div>



              </div>






            <!--ligne 5-->

              <div class="row">


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">CITROËN C3 Aircross pureTech ...</h5>
                      <p class="card-text prix pb-4">21 600 €</p>
                    </div>
                      <img src="img/voiture/ligne-5/img-1" class="card-img-top" alt="ligne-5 / voiture-1">
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">CITROËN C4 Cactus BlueHDi 100 Shine</h5>
                      <p class="card-text prix">18 000 €</p>
                    </div>
                      <img src="img/voiture/ligne-5/img-2" class="card-img-top" alt="ligne-5 / voiture-2">
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">CITROËN Jumpy Fourgon TOLE M ...</h5>
                      <p class="card-text prix">19 750 €</p>
                    </div>
                      <img src="img/voiture/ligne-5/img-3" class="card-img-top" alt="ligne-5 / voiture-3">
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">DS DS3 PureTech 110 S&S PureTech ...</h5>
                      <p class="card-text prix pb-4">16 990 €</p>
                    </div>
                      <img src="img/voiture/ligne-5/img-4" class="card-img-top" alt="ligne-5 / img-4">
                  </div>
                </div>



                </div>




              <!--ligne 6-->

                <div class="row">


                  <div class="col-lg-3">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">DS DS4 Crossback PureTech130 S&S ...</h5>
                        <p class="card-text prix">22 650 €</p>
                      </div>
                        <img src="img/voiture/ligne-6/img-1" class="card-img-top" alt="ligne-6 / voiture-1">
                    </div>
                  </div>


                  <div class="col-lg-3">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Fiat 500X MY17 1.6 MULTIJET 120 CH</h5>
                        <p class="card-text prix">20 050 €</p>
                      </div>
                        <img src="img/voiture/ligne-6/img-2" class="card-img-top" alt="ligne-6 / voiture-2">
                    </div>
                  </div>


                  <div class="col-lg-3">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Fiat Fullback Double Cabine 2.4 18 CH ...</h5>
                        <p class="card-text prix">26 750 €</p>
                      </div>
                        <img src="img/voiture/ligne-6/img-3" class="card-img-top" alt="ligne-6 / voiture-3">
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Ford KUGA 2.0 TDCi 180 S&S 4x4 ...</h5>
                        <p class="card-text prix pb-4">33 900 €</p>
                      </div>
                        <img src="img/voiture/ligne-6/img-4" class="card-img-top" alt="ligne-6 / img-4">
                    </div>
                  </div>
              </div>

              <div class="more">
              <button type="button" class="more bg-transparent col-lg-2 mb-5" onClick="afficher_cacher('span_more')">MORE</button>
               <a href="#top" ><img src="img/retour-banner.png"  class="top" alt="bouton"></a>

            </div>


              <span id="span_more" class="afficher">

              <div class="row">
                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title text-red">ALFA ROMEO Guilia 2.2JTD ch AT8 Super</h5>
                      <p class="card-text prix ">36 000 €</p>
                    </div>
                    <div class="hover-img">
                      <img src="img/voiture/ligne-1/img-1" class="card-img-top" alt="ligne-1 / voiture-1">
                    <div class="overlay">
                      <div class="text">
                      <h6>CATEGORIE :</h6>
                        <p> Berline </p>
                      <h6> KILOMETRAGE :</h6>
                        <p> 10 </p>
                      <h6> CARBURANT : </h6>
                        <p> Diesel </p>
                      <h6> BOITE DE VITESSE :<h6>
                        <p> Automatique </p>
                      <h6> P.F. : </h6>
                        <p> 9 </p>
                      <h6> GARANTIE : </h6>
                        <p> Constructeur<p>
                      <h6> EN STOCK </h6>
                        <p>Non</p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">ALFA ROMEO Guilietta Serie 2 1.4 TB ...</h5>
                      <p class="card-text prix">23 650 €</p>
                    </div>
                      <img src="img/voiture/ligne-1/img-2" class="card-img-top" alt="ligne-1 / voiture-2">
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Audi A1 Sportback 1.4 TDI 0 ultra S-Line</h5>
                      <p class="card-text prix">21 600 €</p>
                    </div>
                      <img src="img/voiture/ligne-1/img-3" class="card-img-top" alt="ligne-1 / voiture-3">
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Audi A3 SPORTBACK 1.5 TFSI CoD ...</h5>
                      <p class="card-text prix">32 600 €</p>
                    </div>
                      <img src="img/voiture/ligne-1/img-4" class="card-img-top" alt="ligne-1 / img-4">
                  </div>
                </div>
                </div>

            <!--ligne 2-->

              <div class="row">
                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Audi A6 AVANT V6 3.0 TDI 272 S Tronic ...</h5>
                      <p class="card-text prix">63 850 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-1" class="card-img-top" alt="ligne-2 / voiture-1">
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 ...</h5>
                      <p class="card-text prix">31 900 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-2" class="card-img-top" alt="ligne-2 / voiture-2">
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title ">Audi Q5 NOUVEAU 2.0 TDI 150</h5>
                      <p class="card-text prix pb-4">38 100 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-3" class="card-img-top" alt="ligne-2 / voiture-3">
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">Audi Q2 1.4 TFSI COD 150 ch S tronic 7 Sport</h5>
                      <p class="card-text prix">31 900 €</p>
                    </div>
                      <img src="img/voiture/ligne-2/img-4" class="card-img-top" alt="ligne-2 / img-4">
                  </div>
                </div>



                </div>
              </span>
        </div>
        </div>

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
