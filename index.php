<body>
<!---------------------------- 
            HEADER 
----------------------------->

<?php 
    //include './utils/database.php';
    //include './utils/queries.php';
    require_once 'layout/header.php'; 
?>

<!---------------------------- 
            MAIN             
----------------------------->
<main class="main">
    <div class="sidebar">Je suis en cours de construction</div>

    <section id="maincard">
        <div class="img">
            <img id="photo" src="./assets/images/profil.jpg" alt="photoProfil"/>
        </div>
        <div class="cardcontent">
            <h1>Développeuse web junior</h1>
            <h3>J'ai pour projet de développer des applications en eco-conception et des interfaces accessibles à tout public</h3>
            <div id="navig">
                <a class="button" href="#who" title="Qui suis-je ?">Qui suis-je ?</a>
                <a class="button" href="#projets" title="Mes projets persos">Mes projets perso</a>
                <a class="button" href="#xp" title="Experiences">Mon parcours pro</a>
                <a class="button" href="#formations" title="Formations">Mes formations</a>
                <a class="button" href="#extrapro" title="Extra-pro">En extra-pro</a>
            </div>
        </div>
    </section>

    <!-- Section Qui suis-je -->
    <section id="who">
        <div>
            <h3>Qui suis-je ?</h3>
            <p>Enfant des années fin 90, depuis la campagne où j'ai grandi, j'étais insatiablement attirée par cette toile naissante qu'est le World Wide Web. Pourquoi s'occuper d'un Tamagochi alors qu'on peut s'investir à convaincre ses parents à équiper la maison d'un ordinateur (avec une connexion évidemment, merci AOL !) ? 
            <p>Plus tard, après 8 ans à évoluer dans le secteur professionnel du social, il est temps de revenir à ce centre d'intérêt de cette drôlesse (pour parler poitevin) 'millenniale'.</p>
            <p>Mon projet professionnel est de devenir développeuse full-stack JavaScript, tout en sensibilisant à l’accessibilité du web pour tout internaute, et me spécialiser dans l’éco-conception des projets afin de minimiser l’impact du web sur l’environnement.</p>
            <p>J'ai débuté par une formation intensive à l'ENI Ecole Informatique de niveau 5. Cependant afin d’optimiser la qualité de mon parcours auprès de professionnels, j’ai intègré le Bachelor Développeuse web en alternance à l’ICSSA de Niort et en partenariat avec 3iL Ingénieurs de Limoges, pour une durée d’un an, en septembre 2020 : 
            <a class="button" href="https://www.icssa-niort.com/organisation-pedagogique-formations-icssa/centre-de-formation/le-bachelor-web-developpeur/" title="ICSSA" target="_blank">Voir le descriptif de la formation</a>.</p>
            <p>Je suis à la recherche d'une structure dynamique et tournée vers des technologies toujours actualisées dans laquelle investir mes compétences et ma créativité sur un poste de développeuse JavaScript, et restant ouverte aux postes J2EE  :)</p>
            <p>Durant ces huit dernières années à évoluer dans le secteur du social, j’ai développé de solides capacités pour travailler en équipe, développer mon sens de l’adaptation et l’autodidaxie. Je suis sensible aux valeurs Humaines, du sens poétique au sens éthique, et par conséquent à l’ergonomie et à l’accessibilité du web.</p>
        </div>
        <div class="logo">
            <a href="https://www.linkedin.com/in/c%C3%A9line-magneron-861253138/" rel="" target="_blank">
                <img class="logo" src="./assets/images/linkedin.png" alt="Jetez un oeil à mon profi linkedIn" title="Jetez un oeil à mon profi linkedIn">
            </a>
            <a href="https://open.spotify.com/user/ityc%C3%A9li?si=LI7kVpwgQGODDoairJCEWQ" rel="" target="_blank">
                <img class="logo" src="./assets/images/spotify-sketch.png" alt="Jetez une oreille à mon profil Spotify" title="Jetez une oreille à mon profil Spotify">
            </a>
            <a href="https://github.com/CelineMAGNERON" rel="" target="_blank">
                <img class="logo" src="./assets/images/github.png" alt="Jetez une oreille à mon profil GitHub" title="Jetez une oreille à mon profil GitHub">
            </a>
        </div>
    </section>

    <div class="cardalter"> 
        <!-- section Projets persos -->
        <section class="section" id="projets">
            <div>
                <h3>Projets perso</h3>
                <p>Al Mamounia : Réalisation d’un site interactif autour de textes philosophiques, développé avec mySQL, PHP, HTML5/CSS3 et JavaScript.</p>
                <p>shiatsuniort.fr : reprise du site sur WordPress, injection de CSS</p>
            </div>
        </section>

        <!-- section Expériences -->
        <section class="section" id="xp">
            <div>
                <h3>Parcours professionnel</h3>
                    <h5>R2C System</h5>
                    <article>
                        <p>Projet de stage chez R2C System : De mai à juillet 2020. Ambrosis : Réalisation de pages d’accueil et de login pour une application de lecture numérique en streaming, modélisation de base de données ,Développés avec PHP sur Laravel 6.
                        </p>
                    </article>
                    <article>
                        <h5>Les Dames’Oiselles</h5>
                        <p>Cocréatrice du projet et responsable communication. Traiteur végétarien d’août 2016 à septembre 2019.</p>
                    </article>
                    <article>
                        <h5>Union Départementale des Associations Familiales 79</h5>
                        <p>Animatrice référente du GEM de Parthenay d’avril 2017 à juin 2019</p>
                        <p>Chargée de communication de février 2017 à juin 2019</p>
                        <p>Chargée de mission pour le site internet du PIAS 79 de 2015 à 2018</p>
                        <p>Assistante mandataire judicaire à la protection des majeurs de 2011 à 2017.</p>
                    </article>
            </div>
        </section>

        <!-- Section A propos -->
        <section class="section" id="formations">
            <div>
                <h3>Mes formations</h3>
                <article>
                    <p>Licence 3 Bachelor Développeuse web en alternance (depuis sept. 2020)</p>
                    <p>Titre RNCP Niveau 5 de Développeuse web et web mobile</p>
                    <p>BTS SP3S</p>
                    <p>4ème année de praticienne shiatsu</p>
                    <p>Licence 2 en Sciences Humaines</p>
                    <p>Licence 2 en STAPS</p>
                    <p>Secourisme : PSC1 et SST</p>
                </article>
            </div>
        </section>

        <!-- section Extra-pro -->
        <section class="section" id="extrapro">
            <div>
                <h3>Extra-professionnel</h3>
                <p>Association Trisomie 21 Deux Sèvres (depuis avril 2014)
                    <span>Vice présidente, référente communication</span>
                </p>
                <p>Arche de Marie (depuis juillet 2020)
                    <span>Bénévole au centre de soin et de proctection de la faune sauvage</span>
                </p>
                <p>Centre socioculturel Toit du Monde à Poitiers (2011)
                    <span>Aide à l’organisation et l’animation de débats aux thèmes variés</span>
                </p>
                <p>Montpellier Université Club (2009)
                    <span>Coach d’une équipe féminine de handball de 16 ans</span>
                </p>
            </div>
        </section>
    </div>

    <!-- section Commentaires 
    Demander un feedback au visiteur   ;)-->
    <div>
        <section id="comments">
            <h2>Dites bonjour   :)</h2>
            <form class="form" action="./utils/traitement-form.php" method="POST">
                <?php if (isset($_POST['error'])) {
                    echo $_POST['error'];
                }
                ?>
                <div class="formcontent">
                    <input id="author" type="text" name="nom" placeholder="Votre nom" required/>
                </div>
                <div class="formcontent">
                    <input id="mail" type="text" name="email" placeholder="Votre email" required/>
                </div>
                <div class="formcontent">
                    <input id="title" type="text" name="title" placeholder="L'objet de votre message" required/>
                </div>
                <div class="formcontent">
                    <textarea id="content" name="content" placeholder="Votre message" required></textarea>
                </div>
                <button type="submit" name="formsend" id="formsend" value="Envoyer">Envoyer</button>
            </form>
        </section>
    </div>


</main>

<!---------------------------- 
            FOOTER 
----------------------------->
<?php require_once './layout/footer.php'; ?>

</body>

</html>