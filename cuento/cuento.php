<?php
$storyText = [
    "es" => "
    <p>Ay! ¡Qué disparate!</p>
             <p>¡Se mató un tomate!</p>
             <p>¿Quieren que les cuente?</p>
             <p>Se arrojó en la fuente</p>
             <p>sobre la ensalada</p>
             <p>recién preparada.</p>
             <p>Su vestido rojo,</p>
             <p>todo descosido,</p>
             <p>cayó haciendo arrugas</p>
             <p>al mar de lechugas.</p>
             <p>Su amigo el zapallo</p>
             <p>corrió como un rayo</p>
             <p>pidiendo de urgencia</p>
             <p>por una asistencia</p>
             <p>Vino el doctor Ajo</p>
             <p>y remedios trajo.</p>
             <p>Llamó a la carrera</p>
             <p>a Sal, la enfermera.</p>
             <p>Después de sacarlo</p>
             <p>quisieron salvarlo,</p>
             <p>pero no hubo caso:</p>
             <p>¡estaba en pedazos!...</p>",
    "en" => "<p>Oh! What a nonsense!</p>
             <p>A tomato was killed!</p>
             <p>Do you want me to tell you?</p>
             <p>It jumped into the fountain</p>
             <p>onto the salad</p>
             <p>freshly prepared.</p>
             <p>Its red dress,</p>
             <p>all undone,</p>
             <p>fell wrinkled</p>
             <p>into the sea of lettuce.</p>
             <p>Its friend, the pumpkin,</p>
             <p>ran like a lightning</p>
             <p>asking urgently</p>
             <p>for some assistance.</p>
             <p>Doctor Garlic came</p>
             <p>and brought remedies.</p>
             <p>He called urgently</p>
             <p>for Sal, the nurse.</p>
             <p>After drying it</p>
             <p>they tried to save it,</p>
             <p>but there was no hope:</p>
             <p>it was in pieces!...</p>",
    "fr" => "<p>Aïe ! Quelle absurdité !</p>
             <p>Une tomate s'est tuée !</p>
             <p>Voulez-vous que je vous raconte ?</p>
             <p>Elle a sauté dans la fontaine</p>
             <p>sur la salade</p>
             <p>tout juste préparée.</p>
             <p>Sa robe rouge,</p>
             <p>toute décousue,</p>
             <p>est tombée en formant des plis</p>
             <p>dans la mer de laitues.</p>
             <p>Son ami, la citrouille,</p>
             <p>a couru comme un éclair</p>
             <p>demandant de l'aide d'urgence.</p>
             <p>Le docteur Ail est venu</p>
             <p>et a apporté des remèdes.</p>
             <p>Il a appelé en urgence</p>
             <p>Sel, l'infirmière.</p>
             <p>Après l'avoir séchée</p>
             <p>ils ont essayé de la sauver,</p>
             <p>mais il n'y avait aucun espoir :</p>
             <p>elle était en morceaux..!</p>"
];


$selectedLanguage = isset($_POST["language"]) ? $_POST["language"] : "es";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega mi hoja de estilos personalizada -->
    <link rel="stylesheet" href="estilo.css">
    <!-- Título de la página -->
    <title>Cuentos y Poemas</title>
    <!-- Agrega los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"> </a><img src="tomate.png" width="150" height="60">
        <div class="dropdown ml-auto">
            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Language
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <form method="post">
                    <input type="hidden" name="language" value="es">
                    <button type="submit" class="dropdown-item" <?php if ($selectedLanguage === 'es') {
                                                                    echo 'disabled';
                                                                } ?>>Español</button>
                </form>
                <form method="post">
                    <input type="hidden" name="language" value="en">
                    <button type="submit" class="dropdown-item" <?php if ($selectedLanguage === 'en') {
                                                                    echo 'disabled';
                                                                } ?>>Inglés</button>
                </form>
                <form method="post">
                    <input type="hidden" name="language" value="fr">
                    <button type="submit" class="dropdown-item" <?php if ($selectedLanguage === 'fr') {
                                                                    echo 'disabled';
                                                                } ?>>Francés</button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1 class="story-title"><?= ($selectedLanguage === 'es') ? "Se mato un tomate!" : (($selectedLanguage === 'en') ? "A tomato was killed!" : "Une tomate s'est tuée !") ?></h1>
            <p><?= $storyText[$selectedLanguage] ?></p>
            <p>[Elsa Bornemann]</p>
        </div>
    </div>

    <div class="image">
        <img src="ensalada.png" alt="tomate">
    </div>

    <div class="imagen">
        <img src="zapallo.png" alt="tomate">
    </div>

    <div class="zanahoria">
        <img src="zanahoria.png" alt="tomate">
    </div>

    <!-- Nombre del creador y nombre de la empresa de fantasia -->
    <footer class="footer">
        <p>Ariela Ulloa Herrera</p>
        <p>© 2023. Todos los derechos reservados.</p>
    </footer>


</body>


</html>