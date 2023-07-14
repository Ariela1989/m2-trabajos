<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega mi hoja de estilos personalizada -->
    <link rel="stylesheet" href="estilo.css">
    <!-- Título de la página -->
    <title>La Serie Fibonacci</title>
    <!-- Agrega los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <!-- Contenedor de Bootstrap para colocar el título, mezcle php con html -->
    <div class="container">
        <div class="jumbotron">
            <h1><?php echo "La Serie Fibonacci"; ?></h1>
            <?php echo "La Serie Fibonacci es una secuencia matemática que se define de la siguiente manera: cada número en la serie es la suma de los dos números anteriores. La secuencia de Fibonacci forma parte de numerosos sistemas, incluso de la naturaleza, por ejemplo, se encuentra en la disposición de las ramas de los árboles, los pétalos de las flores y las hojas de un tallo, siendo el girasol el ejemplo más preciso."; ?>

        </div>
    </div>

    <!-- formulario con Bootstrap  -->

    <div class="caja">
        <form class="d-flex justify-content-center" method="post">
            <div class="input-group mb-3 col-md-6 col-lg-4">
                <div class="mt-3 d-flex">
                    <label for="num" class="mr-2"></label>
                    <input type="number" id="num" name="num" min="1" class="form-control" placeholder="Ingrese un número">
                    <input type="submit" value="Generar" class="btn btn-primary ml-2">
                </div>
            </div>
        </form>
        <!-- Secuencia logica con php para la secuencia  -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            function fibonacci($num)
            {
                $num_1 = 0;
                $num_2 = 1;
                $i = 0;
                echo '<div class="text-center"><p class="mt-3">Secuencia de Fibonacci:</p>';
                while ($i < $num) {
                    echo "" . $num_1 . ",";
                    $num_3 = $num_2 + $num_1;
                    $num_1 = $num_2;
                    $num_2 = $num_3;
                    $i++;
                }
                echo "</div>";
            }
            fibonacci($num);
        }
        ?>
    </div>
</body>


</html>