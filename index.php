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
            <p>Le restaurant d'Arnaud Michant met en avant une cuisine sans artifice, basée sur la qualité et la simplicité des ingrédients locaux. La carte propose une expérience gastronomique authentique en utilisant des produits de Savoie de qualité supérieure pour offrir des plats délicieux et savoureux.</p>
            <a href="carte.php" class="btn1">Notre carte</a>
            <a href="index.php" class="btn2">Reservation</a>    
        </div>
    </div>
    <section class="aPropos" id="aPropos">
        <div class="row">
            <div class="col50">
               <h2 class="titre-texte">Notre histoire</h2>
               <p>Arnaud Michant a ouvert un restaurant à Chambéry offrant une expérience gastronomique authentique, avec une cuisine sans artifice. Le restaurant propose une expérience culinaire de haut niveau pour le déjeuner et le dîner. Les plats sont préparés avec des ingrédients frais et de qualité supérieure, et les saveurs sont mises en valeur sans artifice. L'accent est mis sur la qualité et la simplicité de la cuisine, permettant aux saveurs de briller de leur propre éclat. Le restaurant est rapidement devenu populaire auprès des habitants de Chambéry et des visiteurs de passage, grâce à la passion et au savoir-faire d'Arnaud Michant en matière de cuisine.</p>
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
                <p>Le restaurant d'Arnaud Michant à Chambéry propose une carte mettant en avant des produits locaux de qualité, sélectionnés avec soin pour offrir une expérience culinaire authentique. </p>            
                <br>
                <p>Les plats proposés à la fois pour le déjeuner et le dîner sont simples, mais délicieux et mettent en valeur les ingrédients locaux. Parmi les entrées, on peut trouver des salades de saison avec des légumes frais et croquants, ainsi que des terrines de gibier faites maison. Les plats principaux comprennent des plats de viande, comme des côtelettes d'agneau locales et des plats de poisson frais, accompagnés de légumes locaux de saison. </p>
                <br>
                <p>Les desserts sont également préparés avec des ingrédients locaux, avec des fruits frais et des produits laitiers locaux pour créer des desserts simples mais délicieux. En somme, la carte du restaurant d'Arnaud Michant met en avant les produits locaux de qualité pour offrir une expérience culinaire authentique et savoureuse à ses clients.</p>
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
                    <h5 class="card-title">Menu degustation : 42 euro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : Soupe au camenbert </li>
                        <li class="list-group-item">Plat : Fondue moitié-moitié</li>
                        <li class="list-group-item">Dessert : Mont blanc</li>
                    </ul>
                </div>
            </div>
          </div>
            <div class="card2">
                <div>
                    <img title="Menu du chef" src="image/MenuDuChef.png" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">Menu du chef : 53 euro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : Raviolo Foie gras </li>
                        <li class="list-group-item">Plat : Steak de boeuf et son homard</li>
                        <li class="list-group-item">Dessert : Profiterol revisité</li>
                    </ul></div>
                </div>
            </div>
            <div class="card3">
                <div>
                    <img title="Menu enfant" src="image/MenuEnfant.jpg" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title">Menu enfant : 20 euro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrée : Salade</li>
                        <li class="list-group-item">Plat : Hamburger Montagnard</li>
                        <li class="list-group-item">Dessert : Glace</li>
                    </ul></div>
                </div>
            </div>
        </div>
    </div>
    <section class="equipe" id="equipe">
        <div class="titre">
            <h2 class="titre-texte">Notre equipe</h2>
            <p>Arnaud Michant est le fondateur du restaurant et le chef exécutif. Il apporte une passion pour la cuisine française authentique et les ingrédients locaux de qualité supérieure. Avec une expérience de plus de 20 ans dans l'industrie de la restauration, il a une connaissance approfondie de la cuisine et de la gestion de restaurant.

Théophile Carl, quant à lui, est le chef de cuisine principal. Il possède une vaste expérience en cuisine française et européenne, et apporte une approche innovante à la cuisine en utilisant des techniques modernes et des ingrédients locaux de saison pour créer des plats délicieux et créatifs.

Thomas Ujanas, est le sous-chef de l'équipe, il apporte une expérience diversifiée, ayant travaillé dans des restaurants étoilés Michelin en France et en Europe. Avec une passion pour les ingrédients locaux et une expertise en cuisine française traditionnelle, il travaille aux côtés du chef exécutif pour créer des plats innovants et savoureux.</p>
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