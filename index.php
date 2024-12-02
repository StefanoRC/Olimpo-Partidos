<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimpo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style_Mapa.css" rel="stylesheet" />
    <link href="css/style_Body.css" rel="stylesheet" />
    <link href="css/style_links.css" rel="stylesheet" />

    <link href="css/style_Custom.css" rel="stylesheet" /> <!-- Nuevo archivo CSS -->
</head>

<body onload="initMap()" class="bg-dark-green">

    <!-- Menú de navegación -->
    <div>
        <?php include_once "menu.php"; ?>
    </div>

    <div class="p-2">
        <div class="d-flex">
            <!-- Contenedor del mapa -->
            <div class="map-container">
                <h3>Country club Valentin Alsina</h3>
                <a href="https://www.google.com.ar/maps/place/Country+Club+Valent%C3%ADn+Alsina/@-34.6733,-58.4121977,16z/data=!4m6!3m5!1s0x95bccc8920f8b231:0xb0c488ab27be030!8m2!3d-34.6786898!4d-58.4129065!16s%2Fg%2F1tdr4hvh?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D" target="_blank">Jose Ignacio Rucci y Formosa, Valentin Alsina</a>
                <div id="map"></div>
            </div>

            <!-- Contenedor de las imágenes -->
            <div class="images-container">
                <div class="p-2">
                    <img src="images/Leo.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 1">
                </div>
                <div class="p-2">
                    <img src="images/Nahuel.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 2">
                </div>
                <div class="p-2">
                    <img src="images/David.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 3">
                </div>
                <div class="p-2">
                    <img src="images/German.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 4">
                </div>
                <div class="p-2">
                    <img src="images/sebas.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 5">
                </div>
                <div class="p-2">
                    <img src="images/Stefano.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 6">
                </div>
                <div class="p-2">
                    <img src="images/ivan.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 7">
                </div>
                <div class="p-2">
                    <img src="images/alexis.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 8">
                </div>
                <div class="p-2">
                    <img src="images/Tobias.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 9">
                </div>
                <div class="p-2">
                    <img src="images/papo.jpg" class="img-fluid custom-img custom-img-margin" alt="Imagen 10">
                </div>
                <div class="p-2">
                    <img src="images/franco_banega.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 11">
                </div>
                <div class="p-2">
                    <img src="images/matias.png" class="img-fluid custom-img custom-img-margin" alt="Imagen 12">
                </div>
            </div>
        </div>
    </div>

    <div>
    <a href="https://beelup.com/ar/" target="_blank" class="logo-container">
        <img src="images/beelup.png" alt="Beelup_logo" class="logo-img">
        <h3>BEELUP</h3>
    </a>
</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script> <!-- Asegúrate de que Leaflet JS se carga antes de tu script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="Js/map.js"></script> <!-- Asegúrate de que la ruta es correcta -->

</body>

</html>