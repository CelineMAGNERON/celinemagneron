<body>
    <!---------------------------- 
        HEADER 
----------------------------->

    <?php
    //include './utils/database.php';
    //include './utils/queries.php';
    require_once 'layout/header.php';
    ?>

    <!-- Section Main -->
    <main class="container-fluid">
        <section class="row" id="maincard">
            <span class=" d-block col-12 sidebar">Site en cours de construction . . . ( Port du casque conseillé )<img class="cat" src="./assets/images/tenorcat.gif" alt="send" title="constructing"></span>
            <div class="row mainbox">
                <div class="col-12 img">
                    <img id="photo" src="./assets/images/profil.jpg" alt="photoProfil" />
                </div>
                <div class="col-12 cardcontent">
                    <h1>Développeuse web junior</h1>
                    <h4>J'ai pour projet de développer des applications en eco-conception et des interfaces accessibles à tout public</h4>
                    <div class="kreep">
                        <button class="click">
                            <a class="nav-link click-content" href="#comments" title="Contact">Me contacter</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Qui suis-je -->
        <section class="row" id="who">
            <div class="col-12 who-content">
                <h3>Qui suis-je ?</h3>
                <hr class="separator">
                <div class="row">
                    <span class="col-12 whotext">Enfant des années fin 90, depuis la campagne où j'ai grandi, j'étais insatiablement attirée par cette toile naissante qu'est le World Wide Web. Pourquoi s'occuper d'un Tamagochi alors qu'on peut s'investir à convaincre ses parents à équiper la maison d'un ordinateur (avec une connexion évidemment, merci AOL !) ?</span>
                    <span class="col-12 whotext">Plus tard, après 8 ans à évoluer dans le secteur professionnel du social, il est temps de revenir à ce centre d'intérêt de cette drôlesse (pour parler poitevin) 'millenniale'.</span>
                    <span class="col-12 whotext">Mon projet professionnel est de devenir développeuse full-stack JavaScript, tout en sensibilisant à l’accessibilité du web pour tout internaute, et me spécialiser dans l’éco-conception des projets afin de minimiser l’impact du web sur l’environnement.</span>
                    <span class="col-12 whotext">J'ai débuté par une formation intensive à l'ENI Ecole Informatique de niveau 5. Cependant afin d’optimiser la qualité de mon parcours auprès de professionnels, j’ai intègré le Bachelor Développeuse web en alternance à l’ICSSA de Niort et en partenariat avec 3iL Ingénieurs de Limoges, pour une durée d’un an, en septembre 2020 :
                        <a class="button" href="https://www.icssa-niort.com/organisation-pedagogique-formations-icssa/centre-de-formation/le-bachelor-web-developpeur/" title="ICSSA" target="_blank">Voir le descriptif de la formation.</a></span>
                    <span class="col-12 whotext">Je suis à la recherche d'une structure dynamique et tournée vers des technologies toujours actualisées dans laquelle investir mes compétences et ma créativité sur un poste de développeuse JavaScript, et restant ouverte aux postes J2EE :)</span>
                    <span class="col-12 whotext">Durant ces huit dernières années à évoluer dans le secteur du social, j’ai développé de solides capacités pour travailler en équipe, développer mon sens de l’adaptation et l’autodidaxie. Je suis sensible aux valeurs Humaines, du sens poétique au sens éthique, et par conséquent à l’ergonomie et à l’accessibilité du web.</span>
                </div>
                <div class="col-12 text-center profils">
                    <a class="profils-link" href="https://www.linkedin.com/in/c%C3%A9line-magneron-861253138/" rel="" target="_blank">
                        <img class="logo" src="./assets/images/linkedin.png" alt="Jetez un oeil à mon profil linkedIn" title="Jetez un oeil à mon profi linkedIn">
                    </a>
                    <a class="profils-link" href="https://open.spotify.com/user/ityc%C3%A9li?si=LI7kVpwgQGODDoairJCEWQ" rel="" target="_blank">
                        <img class="logo" src="./assets/images/spotify-sketch.png" alt="Jetez une oreille à mon profil Spotify" title="Jetez une oreille à mon profil Spotify">
                    </a>
                    <a class="profils-link" href="https://github.com/CelineMAGNERON" rel="" target="_blank">
                        <img class="logo" src="./assets/images/github.png" alt="Jetez un oeil à mon profil GitHub" title="Jetez une oreille à mon profil GitHub">
                    </a>
                </div>
            </div>
        </section>

        <!-- section Projets persos -->
        <section class="row" id="projets">
            <div class="col-12 projets-content">
                <h3 class="text-center">Projets perso</h3>
                <hr class="separatorwhite">
                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <iframe class="col-12" src="https://www.youtube.com/embed/86x7pGfgGL8?autoplay=1&loop=1&rel=0" frameborder="0" allow="autoplay; accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5 class="video">Al Mamounia</h5>
                        <p>Réalisation d’un site interactif autour de textes philosophiques.</p>
                        <p>Développé avec mySQL, PHP, HTML5/CSS3 et JavaScript.</p>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <iframe class="col-12" src="https://www.youtube.com/embed/_GQV8KbXIqQ?autoplay=1&loop=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5>Shiatsu Niort</h5>
                        <p>Reprise de site sur WordPress.</p>
                        <p>Injection de CSS, en attendant la version from scratch.</p>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <iframe class="col-12" src="https://www.youtube.com/embed/h2JkTlUWf3s?autoplay=1&loop=1&rel=0" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5>Générateur de citations</h5>
                        <p>Réalisation en JavaScript et une coquette dose de geekerie</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- section Expériences -->
        <section class="row" id="xp">
            <div class="col-12 xp-content">
                <h3 class="text-center">Parcours professionnel</h3>
                <hr class="separator">
                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <h5>R2C System</h5>
                        <p>Projet de stage chez R2C System</p>
                        <p>De mai à juillet 2020</p>
                        <p>Réalisation de pages d’accueil et de login pour une application de lecture numérique en streaming, modélisation de base de données ,Développés avec PHP sur Laravel 6.</p>
                        </p>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <h5>Les Dames’Oiselles</h5>
                        <p>Cocréatrice du projet et responsable communication</p>
                        <p>D’août 2016 à septembre 2019</p>
                        <p>Traiteur végétarien à base de produits bio ou raisonnés en circuit cours.</p>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-4 col-lg4">
                        <h5>Union Départementale des Associations Familiales 79</h5>
                        <p>Animatrice référente du GEM de Parthenay d’avril 2017 à juin 2019</p>
                        <p>Chargée de communication de février 2017 à juin 2019</p>
                        <p>Chargée de mission pour le site internet du PIAS 79 de 2015 à 2018</p>
                        <p>Assistante mandataire judicaire à la protection des majeurs de 2011 à 2017.</p>
                        <a class="" href="https://www.pias79.fr" rel="" target="_blank">
                            <img class="logo" src="./assets/images/pias79.png" alt="Ouvrir le PIAS79" title="Ouvrir le PIAS79">
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section Formations -->
        <section class="row" id="formations">
            <div class="col-12 formations-content">
                <h3 class="text-center">Mes formations</h3>
                <hr class="separatorwhite">
                <div class="row">
                    <article class="col-12">
                        <p>Licence 3 Bachelor Développeuse web en alternance (depuis sept. 2020)</p>
                        <p>Titre RNCP Niveau 5 de Développeuse web et web mobile</p>
                        <p>BTS SP3S</p>
                        <p>4ème année de praticienne shiatsu</p>
                        <p>Licence 2 en Sciences Humaines</p>
                        <p>Licence 2 en STAPS</p>
                        <p>Secourisme : PSC1 et SST</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- section Extra-pro -->
        <section class="row" id="extrapro">
            <div class="col-12 extrapro-content">
                <h3 class="text-center">Extra-professionnel</h3>
                <hr class="separator">
                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-3 col-lg3 text-center">
                        <h5>Association Trisomie 21 Deux Sèvres (depuis avril 2014)</h5>
                        <p>Vice présidente, référente communication</p>
                        <a class="col" href="https://www.facebook.com/trisomie21.79" rel="" target="_blank">
                            <img class="logo" src="./assets/images/t21DSlogo.jpg" alt="Facebook de Trisomie 21 Deux-Sèvres" title="Facebook de Trisomie 21 Deux-Sèvres">
                        </a>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-3 col-lg3 text-center">
                        <h5>Arche de Marie (depuis juillet 2020)</h5>
                        <p>Bénévole au centre de soin et de protection de la faune sauvage</p>
                        <a class="col" href="https://www.lanouvellerepublique.fr/deux-sevres/marie-une-vie-devouee-aux-animaux-sauvages" rel="" target="_blank">
                            <img class="logo marie" src="./assets/images/Marie2.jpg" alt="Article sur L'Arche de Marie" title="Article sur L'Arche de Marie">
                        </a>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-3 col-lg3 text-center">
                        <h5>Croix Rouge (2011, 2019)</h5>
                        <p>Bénévole à Poitiers, Toulouse puis Niort comme équipière au Samu social et au Centre Temporaire d'Hébergement d'Urgence</p>
                        <a class="col" href="https://www.croix-rouge.fr/Nos-actions/Action-sociale/Lutte-contre-l-exclusion/Samu-social" rel="" target="_blank">
                            <img class="logo" src="./assets/images/croix-rouge-française.jpg" alt="Site du Samu social" title="Site du Samu social">
                        </a>
                    </article>
                    <article class="col-xs-12 col-sm-12 col-md-3 col-lg3 text-center">
                        <h5>Montpellier Université Club (2009)</h5>
                        <p>Coach d’une équipe féminine de handball de 16 ans</p>
                        <a class="col" href="https://www.mucomnisports.fr/" rel="" target="_blank">
                            <img class="logo" src="./assets/images/logo-muc.png" alt="Jetez une oreille à mon profil GitHub" title="Jetez une oreille à mon profil GitHub">
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!-- section Commentaires -->
        <section class="row" id="comments">
            <div class="form">
                <div class="row comments-content">
                    <h3 class="col-12 text-center">M'envoyer un mail :)</h3>
                    <span class=" d-block col-12 sidebar">Mise en place d'envoi de mail en cours . . . (Pour l'instant merci de bien vouloir passer par mon profil LinkedIn - Lien dans la section Qui suis-je ?)</span>
                    <form class="col-12" action="./utils/traitement-form.php" method="POST">
                        <?php if (isset($_POST['error'])) {
                            echo $_POST['error'];
                        }
                        ?>
                        <div class="">
                            <input class="col-8 formcontent haxBox" id="author" type="text" name="nom" placeholder="Votre nom" required />
                        </div>
                        <div class="">
                            <input class="col-8 formconten haxBox" id="mail" type="text" name="email" placeholder="Votre email" required />
                        </div>
                        <div class="formcontent">
                            <textarea class="haxBox col-8" id="content" name="content" placeholder="Votre message" required></textarea>
                        </div>
                    </form>
                    <div class="col-12 align-items-center text-center">
                        <button class="btn" type="submit" name="formsend" id="formsend" value="Envoyer">Envoyer</button>
                    </div>
                    <div class="col-12 align-items-center text-center ninety"><img src="./assets/images/tenor.gif" alt="send" title="Send"></div>
                </div>
            </div>
        </section>

    </main>

    <!---------------------------- 
            FOOTER 
----------------------------->
    <?php require_once './layout/footer.php'; ?>

</body>

</html>