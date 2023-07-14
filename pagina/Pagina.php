<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$interesado = isset($_POST['interesado']) ? $_POST['interesado'] : 'no';


$parrafos = [
    "<p>Japón</p>Es un país fascinante con ciudades como Tokio, Kioto y Osaka que deben ser exploradas.Tokio es una metrópolis vibrante con rascacielos futuristas y una cultura pop emocionante.",
    "<p>Suiza</p>Suiza ofrece paisajes alpinos impresionantes, una reputación mundial en precisión relojera y una tradición en la producción de chocolate de alta calidad. Es un destino ideal para disfrutar de la naturaleza, sumergirse en la cultura suiza y deleitarse con exquisiteces gastronómicas únicas.",
    "<p>Inglaterra</p>Inglaterra es un país con una rica historia y patrimonio cultural, desde los majestuosos castillos y catedrales hasta las antiguas universidades de renombre mundial. Londres, la capital, es un centro cosmopolita lleno de iconos como el Big Ben y el Palacio de Buckingham. Además, Inglaterra es famosa por su fascinante escena musical, sus hermosos paisajes rurales y su pasión por el fútbol.",
    "<p>México </p>México es un país de una belleza impresionante, con una rica historia y una cultura vibrante. Sus playas paradisíacas en destinos como Cancún y Los Cabos atraen a turistas de todo el mundo. Ciudad de México, la capital, es una metrópolis bulliciosa con impresionantes monumentos como el Zócalo y la Catedral Metropolitana. La gastronomía mexicana es reconocida a nivel global por su variedad y deliciosos sabores, como los tacos, tamales y mole. Además, México es hogar de antiguas ruinas arqueológicas mayas y aztecas, como Chichén Itzá y Teotihuacán, que ofrecen una visión fascinante de la historia precolombina del país. Sin olvidar la calidez y amabilidad de su gente, México es un destino que cautiva y deja una huella duradera en quienes lo visitan.",
    "<p>Tailandia</p>Tailandia es un país asiático conocido por su exótica belleza natural, templos deslumbrantes y rica cultura. Bangkok, la bulliciosa capital, alberga impresionantes templos como el Wat Arun y el Wat Phra Kaew. Las playas paradisíacas de Phuket y Krabi atraen a amantes del sol y el mar de todo el mundo. Chiang Mai, en el norte, es famosa por sus templos históricos y su animado mercado nocturno. Tailandia es también conocida por su deliciosa cocina, con platos como el pad thai y el curry tailandés que deleitan los paladares. Además, el país cuenta con una gran variedad de experiencias, desde el senderismo en las montañas hasta el buceo en las cristalinas aguas del Mar de Andamán. Tailandia es un destino que cautiva con su encanto único y su hospitalidad."
];

$parrafos_menor = [
    "<p>Disney World<p>Disney World es un famoso parque temático ubicado en Orlando, Florida. Es el parque más grande de Disney y cuenta con cuatro parques temáticos: Magic Kingdom, Epcot, Disney's Hollywood Studios y Disney's Animal Kingdom. Ofrece experiencias mágicas y entretenimiento para toda la familia.",
    "<p>Super Nintendo World<p>Super Nintendo World es un parque temático ubicado en Universal Studios Japan, en la ciudad de Osaka. Fue inaugurado en marzo de 2021 y ofrece a los visitantes la oportunidad de sumergirse en el mundo de Nintendo.",
    "<p>El Parque Ghibli</p>El Parque Ghibli, es un parque temático ubicado en la ciudad de Aichi, Japón. Inspirado en las populares películas de animación del Studio Ghibli, como Mi Vecino Totoro, El Viaje de Chihiro y El Castillo Ambulante, el parque ofrece a los visitantes la oportunidad de explorar y sumergirse en los mundos mágicos creados por el Studio Ghibli.",
    "<p>Nickelodeon </p>Nickelodeon Hotels & Parque Acuático se encuentra ubicado en la hermosa Riviera Maya, en México. Este destino turístico está diseñado exclusivamente para ofrecer una experiencia de vacaciones inolvidable para familias. Los visitantes tienen la oportunidad de acompañar a los personajes de Nickelodeon™, como Bob Esponja, Leonardo, Raphael, Donatello y Miguelangel. El complejo cuenta con entretenimiento exclusivo, emocionte.",
    "<p>Xcaret Parque</p>Xcaret Parque, es un parque temático ubicado en la Riviera Maya, en México. Ofrece una variedad de actividades y atracciones relacionadas con la cultura y la naturaleza de la región. Los visitantes pueden disfrutar de espectáculos en vivo, explorar ríos subterráneos, visitar un acuario de arrecifes de coral, interactuar con animales, descubrir sitios arqueológicos mayas y disfrutar de playas de aguas cristalinas. Xcaret Parque combina la diversión, la educación y la conservación del medio ambiente en una experiencia única para toda la familia."
];

$imagenes =  [
    "japon.png",
    "suiza.png",
    "inglaterra.png",
    "mexico.png",
    "tailandia.png"
];


$imagenes_menor = [
    "disney.png",
    "nintendo.png",
    "estudio.png",
    "nick.png",
    "xcaret.png",

];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Viajes y Parques</title>
    <link rel="stylesheet" href="estilo.css">
    <!-- Agrega los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Agrega los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: lightblue;">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="300" height="150" class="d-inline-block align-top" alt="Logo">
        </a>
    </nav>

    <?php
    if ($edad == "no") {
        // Mostrar información e imágenes diferentes si el usuario es menor de 18
        for ($i = 0; $i < count($parrafos_menor); $i++) {
            echo "<h" . ($i + 1) . ">" . $parrafos_menor[$i] . "</h" . ($i + 1) . ">";
            echo "<img src='" . $imagenes_menor[$i] . "' />";
        }
    } else {
        // Mostrar información e imágenes diferentes si el usuario es mayor de 18
        for ($i = 0; $i < count($parrafos); $i++) {
            echo "<h" . ($i + 1) . ">" . $parrafos[$i] . "</h" . ($i + 1) . ">";
            echo "<img src='" . $imagenes[$i] . "' />";
        }
    }
    ?>
   
<?php
    if ($interesado == "si") {
        // Mostrar el carrusel si el usuario está interesado en mayor información
        echo '
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagen1.png" class="d-block w-100" alt="Alan por el mundo">
                </div>
                <div class="carousel-item">
                    <img src="imagen2.png" class="d-block w-100" alt="Un viaje mágico">
                </div>
                <div class="carousel-item">
                    <img src="imagen3.png" class="d-block w-100" alt="Luisito comunica">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span> 
            </button>
        </div>
        ';
    }
    ?>

    <footer class="footer">
        <p>Empresa: Viajes y Parques</p>
        <p>Ariela Ulloa Herrera</p>
        <p>© 2023. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
