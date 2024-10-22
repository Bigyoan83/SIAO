<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
        <div class="top">
                <img class="imglogo" src="../images/SIAO.webp">
                <nav class="nav" id="topNav">
                        
                    <ul>
                        <div>
                            <a href="../home.php" class="active">Accueil</a>
                            <a href="le_SIAO.php">Qui sommes nous ?</a>
                            <a href="#contact">Contact</a>
                            <a href="../actualites.php">Actualité</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Vérifiez si l'utilisateur est connecté -->
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                                <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="../connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>
                    </div>
                    </ul>  
                </nav>
            </div>

            <h2>
                Le gestionnaire du SIAO / 115 du Var
            </h2>
            <div class="gestionnaire">
                <p>
                    L'association itinova rassemble des établissements et des services qui permettent d’accueillir et de prendre soin des personnes les plus vulnérables,<br> situations de handicap, de précarité, d’exclusion ou de dépendance, à tous les âges de la vie. <br>
                    Notre priorité : l’attention portée à la Personne. <br>
                    Depuis bientôt 100 ans, c’est la valeur clé de notre projet associatif, celle qui fédère l’ensemble de nos équipes. Ainsi, quels que soient son âge, <br> son parcours, sa situation, ses attentes ou ses besoins, toute personne accueillie dans l’un de nos établissements <br> est considérée avec respect et traitée avec bienveillance. <br>
                    Aujourd’hui, avec 70 établissements, 2 600 salariés et un siège historique à Lyon, nous sommes en mesure de répondre aux attentes de l’état, <br> des collectivités locales, des familles et des particuliers au-delà de la Région Auvergne-Rhône-Alpes. <br> Afin d’accueillir et d’accompagner au mieux nos publics, nous proposons une offre de service qui s’appuie, <br> d’une part sur la nature et les capacités d’accueil complémentaires de nos établissements, d’autre part sur le professionnalisme et l’engagement de personnels qualifiés.
                </p>
            </div>
            <div class="nous_connaitre">
                <div class="box_histoire">
                    <div class="bouton_histoire">
                        <button class="histoire" id="histoire">Notre histoire</button>
                    </div>
                    <div class="dropdown_histoire" id="down_histoire">
                        <p>
                            Dès 1923, en créant le Comité Commun pour l’hygiène et l’enfance (devenu Comité Commun Activités Sanitaires et Sociales en 1978), <br> un groupe d’industriels lyonnais se montrait soucieux de protéger les plus jeunes sur les plans sanitaires et sociaux. <br> Puis en 1982, avec la création de Santé & Bien-Être, la Compagnie des Filles de la Charité <br> se préoccupait de l’accueil de personnes âgées dans des maisons de retraite dont la pérennité devait être assurée. <br>
                            Aujourd’hui, plus que jamais, la vieillesse, le handicap et la précarité continuent de fragiliser les personnes. <br> Grâce au rapprochement des deux associations en 2005, nous continuons avec L’UNION de répondre à un double défi lié au contexte démographique, <br> économique et social de notre pays : <br>
                            <li>
                                Nous devons d’abord proposer des solutions d’accueil plus nombreuses et plus variées pour les différents besoins des personnes vulnérables ; <br> et ce face à une demande en progression constante due, pour l’essentiel, au vieillissement de la population.                 
                            </li>
                            <li>
                                Nous devons aussi assurer une prestation de qualité régulière, nous adapter aux changements de normes et innover, <br> le tout en réduisant les dépenses ; et ce pour tenir compte des contraintes financières, toujours plus prégnantes, des personnes accueillies, des familles et de l’état. <br>
                                Puis en 2020, L'UNION écrit une nouvelle page de son histoire en changeant de nom pour itinova.
                            </li>
                        </p>
                    </div>
                </div>
                            
                <div class="box_mision">
                    <div class="bouton_mission">
                        <button class="mission" id="mission">Nos missions</button>
                    </div>
                        <div class="dropdown_mission" id="down_mission">
                            <p>
                                Notre rôle consiste à créer, animer et gérer des établissements ou des services à caractère sanitaire, social et médico-social. <br> Avec l’ambition de toujours mieux prendre soin des publics les plus fragiles et la préoccupation constante de placer la Personne au cœur de toutes nos actions. <br> Dans cette perspective, nos principales missions consistent à :
                                <li>
                                    Accueillir les personnes dans un lieu de vie adapté à leur état ou à leur situation ; <br> puis les accompagner et prendre soin d’elles en veillant à leur épanouissement et au respect de leurs droits fondamentaux.
                                </li>
                                <li>
                                    Organiser, professionnaliser et fédérer nos établissements avec l’appropriation d’une culture commune, <br> l’harmonisation de nos pratiques professionnelles, la mutualisation puis le développement de nos ressources.                    </li>
                                <li>
                                    Travailler en partenariat avec l’Etat, les collectivités locales et les autres intervenants (publics ou privés) <br> du secteur pour répondre aux besoins existants, proposer des solutions innovantes pour ceux qui émergent et anticiper ceux à venir. Ce mode de collaboration contribuant de façon active aux dynamiques locales et au développement des territoires.
                                </li>
                            </p>
                        </div>
                </div>
                            
                <div class="box_valeur">
                    <div class="bouton_valeur">
                        <button class="valeur" id="valeur">Nos valeurs</button>
                    </div>
                    <div class="dropdown_valeur" id="down_valeur">
                        <p>
                            En tant que professionnels d'itinova, salariés ou bénévoles, et quel que soit l’établissement où nous exerçons notre métier, <br> nous partageons des valeurs communes qui nous animent et nous guident au quotidien :
                            <li>
                                La primauté de la personne est la valeur clé. Elle montre toute l’attention que nous accordons en priorité aux personnes que nous accueillons, <br> mais aussi à nos partenaires, nos collaborateurs et nos collègues. <br> Elle implique le respect et la bienveillance.                    </li>
                            <li>
                                La solidarité et l’équité garantissent que nous exerçons notre mission d’intérêt général, quels soient les aléas du contexte, <br> au service des personnes les plus vulnérables et les plus démunies.
                            </li>
                            <li>
                                L’engagement et la responsabilité, face aux enjeux sociétaux ou humains, montrent que toutes les énergies mobilisées, <br> individuelles et collectives, au siège comme dans les établissements sur le terrain, soutiennent notre exigence de résultats.
                            </li>
                            <li>
                                L’efficacité, toujours recherchée, s’appuie autant sur la qualité et l’exemplarité de nos pratiques professionnelles que sur la rigueur de notre gestion.
                            </li>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
                     
        <script src="Service.js"></script>
    </body>
</html>