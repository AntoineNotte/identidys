<?php
session_start()

// //calcule réponse sphere A
// $a=0;
// for ($i=1;$i <= 12;$i++){
// foreach ($_POST['reponse'.$i] as $value)
// {
//    $a+=$value;
// }}

// if($a<11.25){
//    echo 'Tout est ok';
// }
// else if($a>11.25 && $a<21){
//    echo 'a surveiller';
// }
// else {
//    echo 'a risque';
// }
?>
<!-- CREE COMPONENT POUR RENDRE PLUS PETIT LE CODE -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identidys</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    <sphere-1></sphere-1>

    <div class="container-fluid">
        <header>
            <span id='logo'><img class="logoheader" src='assets/logo1.png' height="400"></span>
        </header>


        <form action="calcul.php" method="post">
        <div class="row">
            <div id='infosection' class="infosection offset-lg-3 col-lg-6">
                <p class="sphere1">Sphère A <span class="minimargin">Attention/Hyperactivité/Impulsivité</span>
                <span class="othermargin"> 1/5 </span> </p>
            </div>
        </div>

        <section id='section1' class='firstsection offset-lg-3 col-lg-6'>
            <p class="mt-4">Votre enfant a du mal à soutenir son attention ( rester concentré longtemps également sur
                une activité de
                loisir)
                ET/OU Il a tendance a se désinvestir de tâches nécésssitant un effort mental soutenu ( y compris en
                dehors du scolaire, ex.jeux de société)
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe1[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe1[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe1[]" value="0">
                    <span class="reponse">Non</span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant est facilement distrait par ce qui peut se passer autour de lui</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe2[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe2[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe2[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant oublie fréquemment certaines choses de la vie quotidienne
                (consignes,cahiers,clefs...) ET/OU Il perd régulièrement des objets ou des affaires nécéssaires a son
                travail ou à ses activités ( sac, trousse, portable...)
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio"  name="groupe3[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe3[]" value="0.5">
                    <span class="reponse">Rarement</span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe3[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Les difficultés attentionnelles sont observées dans la sphère scolaire (école et devoirs).
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe4[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe4[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe4[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Les difficultés attentionnelles sont observées dans la sphère privée (loisirs, activités
                quotidiennes).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe5[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe5[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe5[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Les difficultés attentionnelles sont présentes depuis plus de 6 mois.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe6[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe6[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe6[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés à attendre son tour (tour de parole, self-service, cantine,
                jeux de société...).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe7[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe7[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe7[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant se lève souvent dans des situations où il est censé rester calme et assis (en
                classe, cinéma, jeux de société) ET/OU Il
                est constamment en mouvement (bouge beaucoup) à l’école et/ou dans les activités de loisir.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe8[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe8[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe8[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a tendance à agir plus vite qu’il ne réfléchit, il répond aux questions avant
                qu’elles soient complètement
                posées.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe9[]" value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe9[]" value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe9[]" value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a du mal à aller se coucher ou s’endormir à cause de son agitation / excitation
                ET/OU Il ne semble jamais
                être fatigué et manifeste régulièrement le besoin d’être en activité (y compris lors des repas).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe10[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe10[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe10[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Son agitation / son impulsivité est présente sur la sphère scolaire (école et devoirs)
                depuis plus de 6 mois.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe11[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe11[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe11[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Son agitation / son impulsivité est présente sur la sphère privée (loisirs, activités
                quotidiennes) depuis plus de 6 mois.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe12[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe12[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input radio" name="groupe12[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary"
                placeholder="Commentaire (facultatif)"></textarea>
            <button class="btnnav" id="btn1next">Suivant</button>
        </section>
























        <!--Section 2-->





























        <div class="row">
            <div id='infosection2' class="infosection2 offset-lg-3 col-lg-6">
                <p class="sphere2">Sphère B <span class="minimargin">Langage oral</span>
                <span class="othermargin2"> 2/5 </span></p>
            </div>
        </div>

        <section id='section2' class='secondsection offset-lg-3 col-lg-6'>
            <p class="mt-4">Votre enfant a des difficultés pour comprendre le sens des conversations. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe13[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe13[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe13[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés pour trouver les mots justes (manque du mot).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe14[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe14[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe14[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés pour résumer ou raconter une histoire de manière cohérente.
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe15[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe15[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe15[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés pour s’exprimer (on ne le comprend pas toujours). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe16[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe16[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe16[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant parvient davantage à réaliser ses exercices lorsque qu’on lui reformule les
                consignes.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe17[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe17[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe17[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés pour structurer correctement ses phrases.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe18[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe18[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe18[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Le langage a mis du temps à se mettre en place (Votre enfant ne faisait pas de phrase à
                l’entrée en Maternelle ET/OU on ne le
                comprenait pas).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe19[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe19[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe19[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant n’a pas un vocabulaire étendu.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe20[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe20[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe20[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés pour conjuguer les verbes.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe21[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe21[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe21[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés dans ses relations avec les autres enfants de son âge. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe22[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe22[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe22[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant était colérique ou pleurait souvent dans la petite enfance.</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe23[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe23[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe23[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a tendance à procéder par mimétisme en classe (à se calquer sur ce que font les
                autres).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe24[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe24[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input2 radio" name="groupe24[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary2"
                placeholder="Commentaire (facultatif)"></textarea>
            <div class="btnsphere">
                <button class="btnnav2 prec" id='btn2after'>Précedent</button> 
                <button class="btnnav2" id="btn2next">Suivant</button>
            </div>
        </section>





        <!-- Section 3-->





        <div class="row">
            <div id='infosection3' class="infosection3 offset-lg-3 col-lg-6">
                <p class="sphere3">Sphère C <span class="minimargin">Langage écrit</span>
                <span class="othermargin2"> 3/5 </span>
            </div>
        </div>

        <section id='section3' class='threesection offset-lg-3 col-lg-6'>
            <p class="mt-4">Votre enfant montre des difficultés pour comprendre ce qu’il lit. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe25[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe25[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe25[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Il est régulièrement nécessaire de lui reformuler ou de lui lire les consignes. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe26[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe26[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe26[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant parvient davantage à réaliser ses exercices lorsque qu’on lui reformule les
                consignes. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe27[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe27[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe27[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre d’importantes difficultés pour apprendre ses tables de multiplication.
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe28[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe28[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe28[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Il faut régulièrement insister sur cet apprentissage mais dès le lendemain il oublie ce
                qu’il a appris la veille. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe29[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe29[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe29[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant se montre lent dans l’activité de copie (au tableau) ou lors de la prise de
                notes. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe30[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe30[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe30[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant fait de nombreuses fautes d’orthographe, et peut écrire un même mot de
                différentes manières. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe31[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe31[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe31[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés en écriture (mauvaise qualité) mais parvient à écrire
                correctement lorsqu’on lui laisse le temps. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe32[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe32[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe32[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant n’aime pas lire ET/OU Il ne lit pas.
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe33[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe33[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe33[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant ne parvient pas bien à se repérer dans le temps (gestion du temps qui passe,
                confond les jours, les mois). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe34[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe34[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe34[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant ne parvient pas à prendre ses cours en entier. .</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe35[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe35[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe35[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant ne parvient pas à relire ses cours car la qualité graphique est très mauvaise.
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe36[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe36[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input3 radio" name="groupe36[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary3"
                placeholder="Commentaire (facultatif)"></textarea>
            <div class="btnsphere">
                <button class="btnnav3 prec" id='btn3after'>Précedent</button> 
                        <button class="btnnav3" id="btn3next">Suivant </button>
            </div>
        </section>
















        <!--  SPHERE 4  -->


















        <div class="row">
            <div id='infosection4' class="infosection4 offset-lg-3 col-lg-6">
                <p class="sphere4">Sphére D <span class="minimargin">Motricité/Repérage spatial</span>
                <span class="othermargin"> 4/5 </span>
            </div>
        </div>

        <section id='section4' class='forsection offset-lg-3 col-lg-6'>
            <p class="mt-4">Votre enfant a des difficultés en géométrie (repérage dans l’espace ou manque de précision).
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe25[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe25[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe25[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés en Mathématiques (pose d’opérations, lecture d’un tableau à
                double entrées). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe26[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe26[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe26[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés dans les activités sportives (demandant de l’équilibre et une
                bonne coordination). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe27[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe27[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe27[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’utilisation de certains outils scolaires (compas,
                règles...). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe28[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe28[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe28[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’utilisation de certains outils au quotidien
                (couteau, fourchettes, bouteille...). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe29[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe29[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe29[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant est maladroit lorsqu’il aide à la maison (se cogne, renverse les objets). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe30[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe30[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe30[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés en écriture (mauvaise qualité) et ne parvient pas à écrire
                correctement y compris lorsqu’on lui
                laisse le temps. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe31[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe31[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe31[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés en motricité fine (faire ses lacets, boutonner,
                colorier, découper...).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe32[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe32[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe32[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés en motricité globale (courir, sauter, activités
                sportives...).
                O</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe33[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe33[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe33[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant n’aime pas dessiner… (Quelles en sont les raisons selon lui ?).
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe34[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe34[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe34[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant ne parvient pas bien à se repérer dans l’espace (perte de repère dans un lieu
                connu). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe35[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe35[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe35[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’habillage (orientation des vêtements,
                aisance...). . </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe36[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe36[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input4 radio" name="groupe36[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary4"
                placeholder="Commentaire (facultatif)"></textarea>
            <div class="btnsphere">
                <button class="btnnav4 prec" id='btn4after'>Précedent</button> 
                <button class="btnnav4" id="btn4next">Suivant</button>
            </div>
        </section>




















        <!--  SPHERE   5    -->

        <div class="row">
            <div id='infosection5' class="infosection5 offset-lg-3 col-lg-6">
                <p class="sphere5">Sphére D <span class="minimargin">Motricité/Repérage spatial</span>
                <span class="othermargin"> 5/5 </span>
            </div>
        </div>

        <section id='section5' class='fivesection offset-lg-3 col-lg-6'>
            <p class="mt-4">Votre enfant a des difficultés en géométrie (repérage dans l’espace ou manque de précision).
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe25[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe25[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe25[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés en Mathématiques (pose d’opérations, lecture d’un tableau à
                double entrées). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe26[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe26[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe26[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés dans les activités sportives (demandant de l’équilibre et une
                bonne coordination). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe27[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe27[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe27[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’utilisation de certains outils scolaires (compas,
                règles...). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe28[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe28[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe28[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’utilisation de certains outils au quotidien
                (couteau, fourchettes, bouteille...). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe29[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe29[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe29[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant est maladroit lorsqu’il aide à la maison (se cogne, renverse les objets). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe30[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe30[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe30[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant a des difficultés en écriture (mauvaise qualité) et ne parvient pas à écrire
                correctement y compris lorsqu’on lui
                laisse le temps. </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe31[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe31[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe31[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés en motricité fine (faire ses lacets, boutonner,
                colorier, découper...).</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe32[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe32[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe32[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés en motricité globale (courir, sauter, activités
                sportives...).
                O</p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe33[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe33[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe33[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant n’aime pas dessiner… (Quelles en sont les raisons selon lui ?).
            </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe34[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe34[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe34[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant ne parvient pas bien à se repérer dans l’espace (perte de repère dans un lieu
                connu). </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe35[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe35[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe35[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <p class="mt-4">Votre enfant montre des difficultés dans l’habillage (orientation des vêtements,
                aisance...). . </p>
            <div class="row">
                <label class="offset-lg-2 col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe36[] " value="2">
                    <span class="reponse">Oui </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe36[] " value="0.5">
                    <span class="reponse">Rarement </span>
                    <span class="checkmark"></span>
                </label>
                <label class="col-lg-3">
                    <input type="radio" class="option-input5 radio" name="groupe36[] " value="0">
                    <span class="reponse">Non </span>
                    <span class="checkmark"></span>
                </label>
            </div>
            <textarea id="story" name="story" class="col-lg-12 textcommentary5"
                placeholder="Commentaire (facultatif)"></textarea>
            <div class="btnsphere">
                <button class="btnnav5 prec" id='btn5after'> Précedent </button> 
                <button class="btnnav5" id="btn5submit">Soumettre</button>
            </div>
        </section>
        </form>
    <script src="script.js"></script>