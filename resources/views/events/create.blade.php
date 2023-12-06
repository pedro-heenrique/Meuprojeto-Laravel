<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style-called.css">
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha384-GLhlTQ8iFZ6Mz9l8r+YirQFI5RQx2/cPz5LXS+8NEeazrWA+6pB8JQFhTjI/pq5f" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-e8l69VhXvKuxG+pV7Sbz9IbA7bG0Nn8KuR3gL9L3w1PM1s4E2Hu9A7ZKaLmRb4b" crossorigin="anonymous"></script>
    <title>Mapa no Laravel</title>
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Teste Mapa</h1>
    <div id="map"></div>

    <script>
        function initMap() {
            var myLatLng = { lat: -15.866824976775177, lng: -47.88781038692489 };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Meu Marcador'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
</body>
</html>
