<?php include 'headeraccueil.php'?>
<link rel="stylesheet" href="pageaccueil.css">

<section id="bodyversiondesktop">
  <section >
      <div class="videoaccueil mt-0">
        <video autoplay muted loop class="w-100">
          <source type="video/mp4" src="video\car.mp4">
        </video>
      </div>
  </section>
<section id="filtrebanner">
    <form id="myFilterdnone" class="findcar">
        <div class="row">
          <div class="col-lg">
            <h1 class="text-uppercase trouvervehicule"><span class="text-underline">TROUVEZ VOTRE VEHICULE</span></h1>
          </div>
        </div>
        <div class="row  formgroup">
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Marque">
            </div>
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Modèle">
            </div>
        </div>
        <div class="row  formgroup">
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Catégorie">
            </div>
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Prix">
            </div>
        </div>
        <div class="row  formgroup">
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Carburant">
            </div>
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Boite de vitesses">
            </div>
        </div>
        <div class="row  formgroup">
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="Puissances fiscales">
            </div>
            <div class="col-lg-6">
            <input type="text" class="form-control form-controlbanner" placeholder="En stock">
            </div>
        </div>

        <div class="row  formgroup">
            <div class="col-lg">
                <button class="btn  text-uppercase formbutton formbuttonaccueil" type="submit">Rechercher</button>
            </div>
        </div>
    </form>
  </section>

  <section id="partieconcession">
      <div class="container containerwidth pr-0 pl-0 pt-0 pb-0 concession">
      <div class="row">
        <div class="col-lg">
          <h1 class="concessiontitle"> CONCESSION AUTOMOBILE EN ALSACE </h1>
        </div>
      </div>
        <div class="mask">
          <img src="imagesaccueil/Voiture.jpg" alt="des voitures" class="w-100">
        </div>
      </div>
      <div class="container containerwidth pr-0 pl-0 pt-0 pb-0 concession2" >
        <div class="mask2">
          <img src="imagesaccueil/Voiture.jpg" alt="des voitures" class="w-100">
        </div>
          <div class="row  concessionparagprahe">
            <div class="col-lg ">
              <a> <img src="iconesaccueil\iconequipe.png" alt="equipe" class="imgfloatleft"></a>
              <div class="row">
                <h3 class="conseils"> ACCUEIL & CONSEILS DE PROFESSIONNELS</h3>
                <p>Une équipe de professionnels vous accueille pour l’achat de votre véhicule neuf ou d’occasion et pour tous conseils d’après-vente (pose d’attelage, carrosserie, pièces détachées, pneumatiques…).</p>
              </div>
              <a> <img src="iconesaccueil\iconpig.png" alt="pig" class="imgfloatleft"></a>
              <div class="row">
                <h3 class="financement"> FINANCEMENT </h3>
                <p>Nous vous proposons des solutions de financement adaptées à votre besoin : en crédit classique location option d’achat, location longue durée, avec ou sans apport.</p>
              </div>
              <a> <img src="iconesaccueil\iconvalidate.png" alt="validate" class="imgfloatleft"></a>
              <div class="row ">
                <h3 class="assurance"> ASSURANCE</h3>
                <p>Pour profiter d’une sérénité totale, demandez des renseignements sur les produits assurance automobile, faîtes établir un devis gratuit !</p>
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
            <div id="carousel1" class="carousel slide nosdernieresmodelescarousel" data-interval="3000" data-ride="carousel" >
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

                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
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
          <h3 class="nosservicesh2 "> REPRISE DE VOTRE VEHICULE </h3>
          <a> <img src="iconesaccueil/money.png" alt="money" > </a>
        </div>
        <img src="iconesaccueil/flèche-droite.png" class="img-fluid flechegauchedroite">
        <div class="row nosservicestext service ">
          <h3 class="nosservicesh2">  SERVICE CARTE GRISE</h3>
          <a> <img src="iconesaccueil/filesandfolders.png" alt="filesandfolders"> </a>
        </div>
        <img src="iconesaccueil/flèche-droite.png" class="img-fluid flechegauchedroite1">
        <div class="row nosservicestext garantie">
          <h3 class="nosservicesh2"> GARANTIE SERENITE </h3>
          <a> <img src="iconesaccueil/key.png" alt="key"> </a>
        </div>
        <img src="iconesaccueil/flèche-gauche.png" class="img-fluid flechegauchedroite2">
      </div>
</section>
  <section id="partiereprise" class="reprisedevotrevoiture">
    <div class="container containerwidth pr-0 pl-0 pt-3 text-white reprisedevotrevoiturecontainer">
      <div class="row mr-0   reprisedevotrevoitureligne">
        <div class="col-4  d-block ">
              <div  class="d-flex justify-content-center mb-5 colmoney"> <img src="iconesaccueil/money.png" alt="money" > </div>
              <h3 class=" pb-5 colmoneytitre">REPRISE DE VOTRE VEHICULE</h3>
              <p class="offredereprise"> Comme en concession, nous sommes en mesure de vous faire une offre de reprise sur votre véhicule. Fini le casse-tête de la vente, lorsque vous prenez possession de votre nouveau véhicule nous vous reprenons l’ancien (en fonction de l’offre établie selon les modalités de reprise).</p>
          </div>
          <div class="col-1 d-block ">

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
        <div id="carousel2" class="carousel slide" data-interval="3000" data-ride="carousel" >
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
</section>

<section id="bodyversionmobile">
      <div class="container-fluid mr-0 ml-0 pr-0 pl-0 imagevoitureaccueil">
            <img src="imagesaccueil\voitureimage.png" class=" imagevoituresize" alt="voiture">
      </div>

      <section id="filtrebannermobile" class="container-fluid">
        <div class="container  pt-2">
          <form id="myFilterdnonemobile" class=" container findcarmobile">
            <div class="text-center text-light col-md">
              <h3>TROUVEZ VOTRE VEHICULE</h3>
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Marque" >
            </div>
            <div class="form-group text-secondary">
                    <input cd type="text text-light " class="form-control form-controlbannermobile" name="nom" placeholder="Modèle" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Catégorie" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Prix" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Carburant" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Boites de vitesses" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="Puissances fiscales" >
            </div>
            <div class="form-group text-secondary">
                  <input type="text text-secondary " class="form-control form-controlbannermobile" name="nom" placeholder="En stock" >
            </div>
            <div class="form-group">
                <div class="col-md ">
                    <button class="btn  text-uppercase formbutton formbuttonaccueilmobile" type="submit">Rechercher</button>
                </div>
            </div>
          </div>
          </form>
        </section>
      <section id="partieconcessionmobile">
        <div class="container-fluid mt-0 mr-0 ml-0 pr-0 pl-0">
          <div>
            <h3 class="text-center text-white pt-3 pb-3"> CONCESSION AUTOMOBILE EN ALSACE </h3>
              <img src="imagesaccueil/imageconcessionmobile.jpg" alt="des voitures" class="img-fluid w-100">
          </div>
              <div class="row text-white ">
                <div class="col-md  text-center pt-3">
                  <a> <img src="iconesaccueil\iconequipe.png" alt="equipe" class="img-fluid pt-4"></a>
                  <h4 class="mr-3 ml-3 pt-3 text-justify"> ACCUEIL & CONSEILS DE PROFESSIONNELS</h4>
                  <p class="mr-3 ml-3 pt-3 text-justify">Une équipe de professionnels vous accueille pour l’achat de votre véhicule neuf ou d’occasion et pour tous conseils d’après-vente (pose d’attelage, carrosserie, pièces détachées, pneumatiques…).</p>
              </div>
              </div>
              <div class="row text-white ">
                <div class="col-md  text-center ">
                  <a> <img src="iconesaccueil\iconpig.png" alt="pig" class="img-fluid pt-4"></a>
                  <h4 class="mr-3 ml-3 pt-3 text-justify"> FINANCEMENT</h4>
                  <p class="mr-3 ml-3 pt-3 text-justify">Nous vous proposons des solutions de financement adaptées à votre besoin : en crédit classique location option d’achat, location longue durée, avec ou sans apport.</p>
              </div>
              </div>
              <div class="row text-white ">
                <div class="col-md text-center ">
                  <a> <img src="iconesaccueil\iconvalidate.png" alt="validate" class="img-fluid pt-4"></a>
                  <h4 class="mr-3 ml-3 pt-3  text-justify"> ASSURANCE</h4>
                  <p class="mr-3 ml-3 pt-3 text-justify">Pour profiter d’une sérénité totale, demandez des renseignements sur les produits assurance automobile, faîtes établir un devis gratuit !</p>
              </div>
              </div>
            </div>
          </section>
        <section id="partiederniersmodelesmobile">
          <div class="container ">
              <div class=" text-left text-white">
                <h3 class="titrederniersmobile pt-4 pb-4 text-center">NOS DERNIERES MODELES</h3>
              </div>
              <div id="carouselmobile" class="carousel slide pt-4 pb-4 " data-interval="3000" data-ride="carousel" >
                  <div class="carousel-inner ">
                    <div class="carousel-item active carouselimgmobile ">
                      <p class="text-white text-center">ALFA ROMEO Guilietta Serie 2 1.4 TB MultiAir 170 ch S&S TCT Super </p>
                      <p class="text-danger text-center">23650€</p>
                      <img src="imagesaccueil/voiture-neuf-2.png" class="d-block img-fluid mx-auto"  alt="voitureneuve2">
                    </div>
                    <div class="carousel-item carouselimgmobile">
                      <p class="text-white text-center">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                      <p class="text-danger text-center">31900€</p>
                      <img src="imagesaccueil/voiture-neuve-3.png" class="d-block img-fluid mx-auto" alt="voitureneuve3">
                    </div>
                    <div class="carousel-item carouselimgmobile">
                      <p class="text-white text-center">Audi Q3 1.4 TFSI COD 150 ch S tronic 6 Ambiente</p>
                      <p class="text-danger text-center">32600€</p>
                      <img src="imagesaccueil/vehicule-neuf-1.png" class="d-block img-fluid mx-auto" alt="vehicule1">
                    </div>
                  </div>

                  <a class="carousel-control-prev" href="#carouselmobile" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselmobile" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="pr-2 pl-2 essaimobile">
                  <h4>Essayez la!</h4><p>Vous pouvez dès à présent réserver un essai sur notre site.</p>
                  <button class="btn  text-uppercase text-center formbutton formbuttonaccueilmobile" type="submit">Rechercher</button>
                </div>
            </div>
        </section>
        <section id="partienosservicesmobile">
          <div class="container-fluid mt-0 mr-0 ml-0 pr-0 pl-0">
              <div>
                <h4 class="text-center text-white pt-3 pb-3"> NOS SERVICES </h4>
              </div>
              <div class="row text-white ">
                  <div class="col-md  text-center pt-3">
                    <a> <img src="iconesaccueil/money.png" alt="money" > </a>
                    <h4 class="mr-3 ml-3 pt-3 text-justify"> REPRISE DE VOTRE VEHICULE</h4>
                    <p class="mr-3 ml-3 pt-3 text-justify">Une équipe de professionnels vous accueille pour l’achat de votre véhicule neuf ou d’occasion et pour tous conseils d’après-vente (pose d’attelage, carrosserie, pièces détachées, pneumatiques…).</p>
                  </div>
              </div>

              <div class="row text-white ">
                  <div class="col-md  text-center pt-3">
                    <a> <img src="iconesaccueil/filesandfolders.png" alt="filesandfolders"> </a>
                    <h4 class="mr-3 ml-3 pt-3 text-justify"> SERVICE CARTE GRISE </h4>
                    <p class="mr-3 ml-3 pt-3 text-justify"> Votre certificat d’immatriculation sans stress avec Sport Design Automobiles ! Agrée par le ministère de l’intérieur, Sport Design Automobiles peut intervenir pour toute demande ou modification de carte grise : un service pratique et rapide, ainsi les démarches administratives sont réalisées directement dans votre agence Sport Design Automobiles. Nous vous proposons également la fourniture et la mise en place des plaques d’immatriculation.</p>
                  </div>
              </div>

              <div class="row text-white ">
                  <div class="col-md text-center pt-3">
                  <a> <img src="iconesaccueil/key.png" alt="key"> </a>
                  <h4 class="mr-3 ml-3 pt-3 text-justify"> GARANTIE SERENITE</h4>
                  <p class="mr-3 ml-3 pt-3 text-justify"> Tous nos véhicules sont vendus avec une garantie. Pour les véhicules neufs la garantie constructeur s’applique au même titre que si vous achetiez le véhicule en concession, elle est de 24 mois, ou plus, selon les marques. Pour les véhicules d’occasion, nous souscrivons une garantie de 3 à 12 mois en fonction du modèle.</p>
                  </div>
              </div>
            </div >

            <div class="text-center mr-1 ml-1">
                <button class="btn  text-uppercase formbuttonnosservicesmobile" type="submit">En savoir plus sur nos services</button>
            </div>
          </div>
        </section>
          <section id="partienouscontactermobile" class="container-fluid pr-0 pl-0">
            <div class=" text-center pt-3 pb-4 mx-auto nouscontactertextmobile">
              <h3>NOUS CONTACTER</h3>
              <p> 16 rue andré kiener 68000 colmar</p>
              <p> 03 89 24 93 03</p>
              <p> 07 84 38 68 15</p>
              <button class="btn  text-uppercase formbuttonnosnouscontactermobile" type="submit">Afficher la carte</button>
            </div>
              <div class="row">
                <div class="col">
              <iframe class="cartemobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2664.1732220064496!2d7.369273915647971!3d48.106894079220986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791663cf30c28e5%3A0x8d74bc6d6253ba48!2s16%20Rue%20Andr%C3%A9%20Kiener%2C%2068000%20Colmar!5e0!3m2!1sfr!2sfr!4v1592818689678!5m2!1sfr!2sfr"height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              </div>
            </section>
        </section>
<?php include 'footer.php'?>
