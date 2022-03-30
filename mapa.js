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
            var pietro_0 =  L.geoJSON(pietro0, {color: 'darkgreen', fill: 'green'});
            pietro_0.addTo(map);
            var pietro_1 =  L.geoJSON(pietro1, {color: 'darkgreen', fill: 'green'});
            pietro_0.addTo(map);
            var pietro_2 =  L.geoJSON(pietro2, {color: 'darkgreen', fill: 'green'});
            pietro_0.addTo(map);
            var pietro_3 =  L.geoJSON(pietro3, {color: 'darkgreen', fill: 'green'});
            pietro_0.addTo(map);

            var overlayMaps = {
            "Parter": pietro_0,
            "Piętro 1": pietro_1,
            "Piętro 2": pietro_2,
            "Piętro 3": pietro_3}

            L.control.layers(overlayMaps).addTo(map);

        </script><div>