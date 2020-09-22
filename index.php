<!---------------------------- 
            HEADER 
----------------------------->

<?php 
    require "vendor/autoload.php";
    //include './utils/database.php';
    //include './utils/queries.php';
    require_once 'layout/header.php'; 

    use Dotenv\Dotenv;

  //  if (file_exists(__DIR__ . '/.env')) {
    //    echo "I'm in !";
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    //}
?>

<!---------------------------- 
            MAIN             
----------------------------->
<main>
    <section id="maincard">
    <div>
        <img id="photo" src="./assets/images/profil.jpg" alt="photoProfil"/>
    </div>
        <div class="cardcontent">
            <h1>Développeuse web JavaScript Front end</h1>
            <h3>Je développe des applications en co-conception et des interfaces accessibles à tout public</h3>
            <div id="navig">
                <a class="button" href="#a_propos" title="A propos">Mon parcours</a>
                <a class="button" href="#quisuije" title="Qui suis-je">Qui suis-je ?</a>
                <a class="button" href="#projets" title="Mes projets persos">Mes projets perso</a>
                <a class="button" href="#experience" title="Experiences">Mes expériences</a>
            </div>
        </div>
    </section>

    <!-- Section Qui suis-je -->
    <section id="who">
        <h3>Qui suis-je ?</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem porro quam mollitia architecto fugit, animi cum, adipisci nobis id autem modi voluptas quibusdam magni, sapiente nulla. Quia minima enim exercitationem.</p>
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
        <section class="section ">
            <div>
                <h3>Projets perso</h3>
                <p>Al Mamounia : Réalisation d’un site interactif autour de textes philosophiques, développé avec mySQL, PHP, HTML5/CSS3 et JavaScript.</p>
                <p>shiatsuniort.fr : reprise du site sur WordPress, injection de CSS</p>
            </div>
        </section>

        <!-- section Expériences -->
        <section class="section">
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
        <section class="section">
            <div>
                <h3>A propos</h3>
                <article>
                    <h5>Formations</h5>
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
        <section class="section">
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