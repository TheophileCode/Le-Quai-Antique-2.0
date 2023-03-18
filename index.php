<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Quai Antique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>   
<?php

include 'html/header.html';
?>
    <div class="banniere" id="banniere">
        <div class="contenu">
            <h2>Les petits plats dans les grands.</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae sunt quo suscipit adipisci dicta asperiores deserunt iusto minima accusantium voluptates ad possimus exercitationem, reprehenderit distinctio aperiam libero? Dolorum, debitis quam.</p>
            <a href="carte.php" class="btn1">Notre carte</a>
            <a href="index.php" class="btn2">Reservation</a>    
        </div>
    </div>
    <section class="aPropos" id="aPropos">
        <div class="row">
            <div class="col50">
               <h2 class="titre-texte">Notre histoire</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nam dolorum totam ipsa doloribus ut veniam? Praesentium est tempore quisquam exercitationem quo, voluptates culpa omnis nihil unde. Incidunt, quia! Voluptatum!</p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="image/apprentiCuisinier.png" alt="image">
                </div>
            </div>
        </div>
    </section>
    <section class="carte" id="carte">
        <div class="row">
            <div class="col50">
               <div class="img">
                   <img src="image/platFromage.jpg" alt="image">
                </div>
            </div>
            <div class="col50">
                <h2 class="titre-texte">Notre carte</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore quaerat vitae dolores soluta dolorem tempore debitis ipsum autem velit? Repellendus totam beatae sed similique, veniam laudantium dolorum molestias dolores tempora.</p>            
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non cum consequuntur ab officia doloribus eaque, aspernatur quo fugiat reprehenderit porro nemo qui, quod perspiciatis fuga. Ipsa quos accusamus sequi adipisci!</p>
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non cum consequuntur ab officia doloribus eaque, aspernatur quo fugiat reprehenderit porro nemo qui, quod perspiciatis fuga. Ipsa quos accusamus sequi adipisci!</p>
                <a href="carte.php" class="btn-carte">Notre carte en details</a>
            </div>
        </div>
    </section>
    <div class="menu" id="menu">
        <div class="titre-menu">
            <h2 class="titre-texte">Nos menu</h2>
        </div>
          <div class="cardcard">
            <div class="card1">
                <div>
                    <img title="Menu degustation" src="image/MenuDegustation1.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">Menu degustation</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : </li>
                        <li class="list-group-item">Plat : </li>
                        <li class="list-group-item">Dessert : </li>
                    </ul>
                </div>
            </div>
          </div>
            <div class="card2">
                <div>
                    <img title="Menu du chef" src="image/MenuDuChef.png" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">Menu degustation</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : </li>
                        <li class="list-group-item">Plat : </li>
                        <li class="list-group-item">Dessert : </li>
                    </ul></div>
                </div>
            </div>
            <div class="card3">
                <div>
                    <img title="Menu enfant" src="image/MenuEnfant.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">Menu degustation</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : </li>
                        <li class="list-group-item">Plat : </li>
                        <li class="list-group-item">Dessert : </li>
                    </ul></div>
                </div>
            </div>
        </div>
    </div>
    <section class="equipe" id="equipe">
        <div class="titre">
            <h2 class="titre-texte">Notre equipe</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab provident et, quia aspernatur cumque dolores error dolorum praesentium! Tempora dolore iure assumenda labore nihil nam. Omnis quidem architecto deserunt exercitationem?</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="image/cuisinier3.jpg" alt="image">
                </div>
                <div class="texte">
                    <h3>Arnaud Michant</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/cuisinier2.jpeg" alt="image">
                </div>
                <div class="texte">
                    <h3>Theophile Carl</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="image/cuisinier1.jpg" alt="image">
                </div>
                <div class="texte">
                    <h3>Thomas Ujanas</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="information" id="information">    
            <div class="horaires">
                <div class="contenu">
                    <h2 class="titre-texte">Nos horaires</h2>       
                </div>
                <div class="cardhoraires">
                    <h3>Horaires d'ouverture</h3>
                    <ul>
                        <li><strong>Lundi :</strong> 12h - 14h / 19h - 22h</li>
                        <li><strong>Mardi :</strong> 12h - 14h / 19h - 22h</li>
                        <li><strong>Mercredi :</strong> Fermé</li>
                        <li><strong>Jeudi :</strong> 12h - 14h / 19h - 22h</li>
                        <li><strong>Vendredi :</strong> 12h - 14h / 19h - 22h</li>
                        <li><strong>Samedi :</strong> 12h - 15h / 19h - 22h</li>
                        <li><strong>Dimanche :</strong> 12h - 15h</li>
                    </ul>
                    <hr>
                    <p>Adresse : 86 Rue Saint-Real, 73000 Chambéry</p>
                </div>
            </div>
            <div class="adresse">
                <div class="contenu">
                    <h2 class="titre-texte">Notre localisation</h2>       
                </div>
                <div class="cardhoraires">
                    <iframe title="localisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d698.3086930284747!2d5.921512629255428!3d45.56571723758891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba8f94a9f5623%3A0x724b32fee8e37e2d!2s86%20Rue%20Saint-R%C3%A9al%2C%2073000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1678894480544!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>        
    </section>
<?php

include 'html/footer.html';
?>

    <script src="script.js"></script> 
</body>
</html>