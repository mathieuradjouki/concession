<?php include 'header.php'?>
<link rel="stylesheet" href="pageaccueil.css">

  <section >
    <div class="videoaccueil mt-0">
        <video autoplay muted loop class="w-100">
          <source type="video/mp4" src="video\car.mp4">
        </video>
    </div>

  </section>

<section id="filtrebanner">
          <form id="myFilterdnone" class="findcar">
              <h2 class="text-uppercase trouvervehicule"><span class="text-underline">TROUVEZ VOTRE VEHICULE</span></h2>
              <div class="row  formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Marque">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Modèle">
                  </div>
              </div>
              <div class="row  formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Catégorie">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Prix">
                  </div>
              </div>
              <div class="row  formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Carburant">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Boite de vitesses">
                  </div>
              </div>
              <div class="row  formgroup">
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="Puissances fiscales">
                  </div>
                  <div class="col-6">
                  <input type="text" class="form-control form-controlbanner" placeholder="En stock">
                  </div>
              </div>

              <div class="row  formgroup">
                  <div class="col">
                      <button class="btn  text-uppercase formbutton formbuttonaccueil" type="submit">Rechercher</button>
                  </div>
              </div>
          </form>
        </section>

      <section id="partieconcession">
              <div class="container containerwidth pr-0 pl-0 pt-0 pb-0 concession">
                <h1 class="concessiontitle"> CONCESSION AUTOMOBILE EN ALSACE </h1>
                <div class="mask">
                  <img src="imagesaccueil/Voiture.jpg" alt="des voitures" class="w-100">
                </div>
              </div>

              <div class="container containerwidth pr-0 pl-0 pt-0 pb-0 concession2" >
                <div class="mask2">
                  <img src="imagesaccueil/Voiture.jpg" alt="des voitures" class="w-100">
                </div>
                  <div class="row concessionparagprahe">
                    <div class="col ">
                      <a> <img src="iconesaccueil\iconequipe.png" alt="equipe" class="imgfloatleft"></a>
                      <div class="row">
                        <h3 class=""> ACCUEIL & CONSEILS DE PROFESSIONNELS</h3>
                        <p>Une équipe de professionnels vous accueille pour l’achat de votre véhicule neuf ou d’occasion et pour tous conseils d’après-vente (pose d’attelage, carrosserie, pièces détachées, pneumatiques…).</p>
                      </div>
                          <a> <img src="iconesaccueil\iconpig.png" alt="pig" class="imgfloatleft"></a>
                      <div class="row">
                        <h3 class=""> FINANCEMENT </h3>
                        <p>Nous vous proposons des solutions de financement adaptées à votre besoin : en crédit classique location option d’achat, location longue durée, avec ou sans apport.</p>
                        <a> </a>
                      </div>
                      <a> <img src="iconesaccueil\iconvalidate.png" alt="validate" class="imgfloatleft"></a>
                      <div class="row ">
                        <h3 class=""> ASSURANCE</h3>
                        <p>Pour profiter d’une sérénité totale, demandez des renseignements sur les produits assurance automobile, faîtes établir un devis gratuit !</p>
                        <a> </a>
                      </div>
                    </div>
                  </div>
              </div>

      </section>

      <section id="partiederniersmodeles">
            <div class="container containerwidth height bg-color ">
                <div class=" text-left text-white">
                  <h1 class="titrederniers">NOS DERNIERES MODELES</h1>
                </div>
                <div id="carousel" class="carousel slide nosdernieresmodelescarousel" data-interval="3000" data-ride="carousel" >
                    <div class="carousel-inner ">
                      <div class="carousel-item active carouselimg ">
                        <p class="text-white">ALFA ROMEO Guilietta Serie 2 1.4 TB MultiAir 170 ch S&S TCT Super </p>
                        <p class="text-danger">23650€</p>
                        <img src="imagesaccueil/voiture-neuf-2.png" class="d-block img-fluid mx-auto"  alt="voitureneuve2">
                      </div>
                      <div class="carousel-item carouselimg">
                        <p class="text-white ">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                        <p class="text-danger">31900€</p>
                        <img src="imagesaccueil/voiture-neuve-3.png" class="d-block img-fluid mx-auto" alt="voitureneuve3">
                      </div>
                      <div class="carousel-item carouselimg">
                        <p class="text-white ">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                        <p class="text-danger">32600€</p>
                        <img src="imagesaccueil/vehicule-neuf-1.png" class="d-block img-fluid mx-auto" alt="vehicule1">
                      </div>
                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <div class="essai">
                    <h4>Essayez la!</h4> <p>Vous pouvez dès à présent réserver un essai sur notre site. </p>
                      <button class="btn  text-uppercase formbutton formbuttonaccueil" type="submit">Rechercher</button>
                  </div>
              </div>
      </section>

      <section id="partienosservices" class="nosservices ">
      <div class="container containerwidth bg-dark pr-0 pl-0 nosservicescontainer">
            <div class="container containerwidth pr-0 pl-0 " >
              <img src="imagesaccueil/masque4.png" class="img-fluid">
              <h1 class="nosservicestitre text-white"> NOS SERVICES </h1>

            </div>
            <div class="row nosservicestext reprise">
              <h3 class="nosservicesh2 "> REPRISE DE VOTRE VEHICULE </h2>
              <a> <img src="iconesaccueil/money.png" alt="money" > </a>
            </div>
            <img src="iconesaccueil/flèche-droite.png" class="img-fluid flechegauchedroite">
            <div class="row nosservicestext service ">
              <h3 class="nosservicesh2">  SERVICE CARTE GRISE</h2>
              <a> <img src="iconesaccueil/filesandfolders.png" alt="filesandfolders"> </a>
            </div>
            <img src="iconesaccueil/flèche-droite.png" class="img-fluid flechegauchedroite1">
            <div class="row nosservicestext garantie">
              <h4 class="nosservicesh2"> GARANTIE SERENITE </h2>
              <a> <img src="iconesaccueil/key.png" alt="key"> </a>
            </div>
            <img src="iconesaccueil/flèche-gauche.png" class="img-fluid flechegauchedroite2">
        </div>
        </section>

          <section id="partiereprise" class="reprisedevotrevoiture">
            <div class="container containerwidth pr-0 pl-0 pt-3 text-white reprisedevotrevoiturecontainer">
              <div class="row mr-0   reprisedevotrevoitureligne">
                <div class="col-4 d-block colmoney">
                      <div  class="d-flex justify-content-center mb-5"> <img src="iconesaccueil/money.png" alt="money" > </div>
                      <h4 class=" pb-5 ">REPRISE DE VOTRE VEHICULE</h4>
                      <p> Comme en concession, nous sommes en mesure de vous faire une offre de reprise sur votre véhicule. Fini le casse-tête de la vente, lorsque vous prenez possession de votre nouveau véhicule nous vous reprenons l’ancien (en fonction de l’offre établie selon les modalités de reprise).</p>
                  </div>
                  <div class="col-1 d-block colmoney">

                    </div>
                    <div class="col-7">
                      <a> <img src="imagesaccueil/reprise.jpg" class="img-fluid heightimgfluid " alt="remisedeclés"> </a>
                    </div>
              </div >
              <button class="btn  text-uppercase formbuttonnosservices" type="submit">En savoir plus sur nos services</button>
              </div>
          </section>

      <section id="toutesnosmarques">
            <div class="container containerwidth toutesnosmarquescontainer">
                <div class="page-header text-left text-white">
                  <h1 class="titretoutesnosmarque">TOUTES NOS MARQUES</h1>
                </div>
                <div id="carousel2" class="carousel slide lesmarquescarousel" data-interval="3000" data-ride="carousel" >
                    <div class="carousel-inner ">
                      <div class="carousel-item active carouselimg ">
                        <img src="imagesaccueil/logo/kia.png" class="d-block img-fluid mx-auto"  alt="logokia">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="imagesaccueil/logo/jeep1.png" class="d-block img-fluid mx-auto"  alt="logojeep">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="imagesaccueil/logo/suzuki.png" class="d-block img-fluid mx-auto"  alt="logosuzuki">
                      </div>
                      <div class="carousel-item carouselimg">
                        <img src="imagesaccueil/logo/nissan.png" class="d-block img-fluid mx-auto"  alt="logonissan">
                      </div >
                      <div class="carousel-item carouselimg">
                        <img src="imagesaccueil/logo/hyundai.png" class="d-block img-fluid mx-auto"  alt="logohyundai">
                      </div >
                    </div>

                    <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
      </section>

          <section id="partienouscontacter" class="nouscontacter">
            <div class=" container containerwidth  pr-0 pl-0 nouscontactercartetext">
            <iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2664.1732220064496!2d7.369273915647971!3d48.106894079220986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791663cf30c28e5%3A0x8d74bc6d6253ba48!2s16%20Rue%20Andr%C3%A9%20Kiener%2C%2068000%20Colmar!5e0!3m2!1sfr!2sfr!4v1592818689678!5m2!1sfr!2sfr"height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class=" nouscontactertext">
              <h1>NOUS CONTACTER</h1>
              <p> 16 rue andré kiener 68000 colmar</p>
              <p> 03 89 24 93 03</p>
              <p> 07 84 38 68 15</p>
              <button class="btn  text-uppercase formbuttonnosnouscontacter" type="submit">Afficher la carte</button>
            </div>
          </div>
          </section>



<?php include 'footer.php'?>
