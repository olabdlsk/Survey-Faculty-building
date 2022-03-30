<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Co lubię/czego nie lubię w Geocentrum (L-1)?</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="pietro0.js"></script>
    <script type="text/javascript" src="pietro1.js"></script>
    <script type="text/javascript" src="pietro2.js"></script>
    <script type="text/javascript" src="pietro3.js"></script>
</head>
<body>

    <h1>#CoLubięWGeocentrum?</h1>
    <h2>W ramach działalności Koła Naukowo-Badawczego GIS, chcemy stworzyć mapę prezentującą, co w budynku Geocentrum (L-1) podoba się jej studentom oraz pracownikom, a co niekoniecznie. W tym celu niezbędna jest dla nas Wasza pomoc. Zatem bardzo prosimy, abyście wskazali na mapie znacznikiem miejsce, które uważacie za NAJBARDZIEJ ATRAKCYJNE i uzasadnili swój wybór oraz podali informacje, które pozwolą nam Was sklasyfikować. Ankietę możecie wypełniać wielokrotnie, do czego zresztą gorąco zachęcamy. Z góry dziękujemy za pomoc. Have fun :)</h2>
    <h3><form name="formularz" action="../../../../xampp/htdocs/contact.php" method="post" enctype="text/plain"><div>

        <p><label>Podaj swoją płeć:</label>
        <input name="frmPlec" type="radio" value="kobieta">kobieta
        <input name="frmPlec" type="radio" value="mężczyzna">mężczyzna</p>
        <p>Status</p>

        <input type="radio" name="status" value="student">student<br>
        <input type="radio" name="status" value="pracownik">pracownik<br>
        <input type="radio" name="status" value="gość">gość<br>

        <p>Stopień studiów</p>
        <input type="radio" name="stopien_studiow" value="I">I<br>
        <input type="radio" name="stopien_studiow" value="II">II<br>
        <input type="radio" name="stopien_studiow" value="III">III<br>
        <input type="radio" name="stopien_studiow" value="nie dotyczy">nie dotyczy<br>

        <!-- Wybor wydzialu z listy rozwijalnej -->
        <p>Wydział</p>
        <select name="Wydzial">
	        <option selected hidden value="">Wybierz...</option>
            <option value="W-1">Wydział Architektury (W-1)</option>
	        <option value="W-2">Wydział Budownictwa Lądowego i Wodnego (W-2)</option>
	        <option value="W-3">Wydział Chemiczny (W-3)</option>
	        <option value="W-4">Wydział Elektryczny (W-4)</option>
	        <option value="W-6">Wydział Geoinżynierii, Górnictwa i Geologii (W-6)</option>
            <option value="W-7">Wydział Inżynierii Środowiska (W-7)</option>
            <option value="W-8">Wydział Informatyki i Zarządzania (W-8)</option>
            <option value="W-9">Wydział Mechaniczno-Energetyczny (W-9)</option>
            <option value="W-10">Wydział Mechaniczny (W-10)</option>
            <option value="W-11">Wydział Podstawowych Problemów Techniki (W-11)</option>
            <option value="W-12">Wydział Elektroniki Mikrosystemów i Fotoniki (W-12)</option>
            <option value="W-13">Wydział Matematyki (W-13)</option></br></select></div><br>
        <!-- Komentarz -->

        <p>Zaznacz miejsce, które lubisz/ którego nie lubisz w Geocentrum</p>
        <div id = "map" style = "width:1000px; height:800px;"></div>

        <script>
            var mapOptions = {center: [51.104279, 17.054851], zoom: 18};
            var map = new L.map('map', mapOptions);
            var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
            map.addLayer(layer);
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		        maxZoom: 14,
		        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		        id: 'mapbox/streets-v11',
		        tileSize: 512,
		        zoomOffset: -1
	        }).addTo(map);
            var pietro_0 =  L.geoJSON(pietro0, {color:'darkgreen', fill:true}, {
                onEachFeature: function(feature, layer){
                    console.log(feature.properties);
                    content = feature.properties.Nr_pom;
                    layer.bindPopup(content);
                }
            });
            pietro_0.addTo(map);

            var pietro_1 =  L.geoJSON(pietro1, {color:'darkgreen', fill:true}, {
                onEachFeature: function(feature, layer){
                    console.log(feature.properties);
                    content = "Numer pomieszczenia: " + feature.properties.Nr_pom;
                    layer.bindPopup(content);
                }
            });
            pietro_1.addTo(map);
            var pietro_2 =  L.geoJSON(pietro2, {color:'darkgreen', fill:true}, {
                onEachFeature: function(feature, layer){
                    console.log(feature.properties);
                    content = "Numer pomieszczenia: " + feature.properties.Nr_pom;
                    layer.bindPopup(content);
                }
            });
            pietro_2.addTo(map);
            var pietro_3 =  L.geoJSON(pietro3, {color:'darkgreen', fill:true}, {
                onEachFeature: function(feature, layer){
                    console.log(feature.properties);
                    content = "Numer pomieszczenia: " + feature.properties.Nr_pom;
                    layer.bindPopup(content);
                }
            });
            pietro_3.addTo(map);

            var overlayMaps = {
            "Parter": pietro_0,
            "Piętro 1": pietro_1,
            "Piętro 2": pietro_2,
            "Piętro 3": pietro_3}

            L.control.layers(overlayMaps).addTo(map);
        </script><div>

        <p>Dlaczego wybrałeś to miejsce?</p>
        <textarea name="frmText" cols="50" rows="10">*pole opcjonalne</textarea>
        <br><br><br>
        <!-- Wysłanie -->
        <input type="submit" value="Wyślij formularz">
        <!-- Czyszczenie danych -->
        <input type="reset" value="Wyczyść dane">
        </div></form>
    </h3>
</body>
</html>