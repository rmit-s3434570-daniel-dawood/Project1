<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> @yield('title') </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../public/css/main.css" type="text/css">
<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" type="text/css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>






<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>













    <!-- Map Scripts for locations page-->
    <script>

        function downloadUrl(url,callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        downloadUrl('xml-dump', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                });
            });
        });

    </script>
        
        <script>
            function initMap() {

                var melbourne = {lat: -37.8136, lng: 144.9631};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: melbourne
                });
                var marker = new google.maps.Marker({
                    position: melbourne,
                    map: map
                });

                var melbournecentral = {lat: -37.810821, lng: 144.963123};
                var marker = new google.maps.Marker({
                    position: melbournecentral,
                    map: map
                });

                var unimelb = {lat: -37.796371, lng: 144.961186};
                var marker = new google.maps.Marker({
                    position: unimelb,
                    map: map
                });

                var bourkestreetmall = {lat: -37.813536, lng: 144.964377};
                var marker = new google.maps.Marker({
                    position: bourkestreetmall,
                    map: map
                });

                var townhall = {lat: -37.814948, lng: 144.966905};
                var marker = new google.maps.Marker({
                    position: townhall,
                    map: map
                });
            }
        </script>
