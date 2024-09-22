<div>
    key=AIzaSyC1A8CDvGNthtzM_QR5omzI8pJ98gseGrQ

    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1A8CDvGNthtzM_QR5omzI8pJ98gseGrQ=places&callback=initMap"
    defer></script>


    <style>
            #map {
                height: 400px;
                width: 100%;
            }
    </style>
    <body>
        {{-- <div id="map"></div>
        <form id="locationForm">
            <input type="text" id="businessName" placeholder="Nombre del negocio" required>
            <button type="submit">Añadir Localización</button>
        </form> --}}

        <div class="grid-template-column-3-4">
            <div>
              <div id="map"></div>
            </div>
            <div class="bg-gray d-flex justify-content-center mt-1">
              <input type="text" id="place-input" class="input" />
            </div>
          </div>

        <script>
            const placeInput= document.getElementById("place-input")
            let map;
            let autocomplete;
            window.initMap = function(){
                var coords={lat:-31.7454922, lng:-60.5257728,15};
                map= new google.maps.Map(document.getElementById("map"),{
                    zoom:6,
                    center:coords,
                })
                const marker= new google.maps.Marker({
                    position:coords,
                    map,
                })
                searchMaps();
            };

            function searchMaps() {
                const autocomplete = new google.maps.places.Autocomplete(placeInput);
                autocomplete.addEventListener('place_changed', ()=>{
                    const place = autocomplete.getPlace();
                    map.setCenter(place.geometry.location);
                    map.setZoom(15);
                });
            }

        </script>

        {{-- <script>
            let map;
            let markers = [];
            let newMarker = null;

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 40.416775, lng: -3.703790},
                    zoom: 6
                });

                map.addListener('click', function(e) {
                    placeMarker(e.latLng);
                });

                fetchLocations();
            }

            function placeMarker(latLng) {
                if (newMarker) {
                    newMarker.setMap(null);
                }
                newMarker = new google.maps.Marker({
                    position: latLng,
                    map: map
                });
            }

            function fetchLocations() {
                fetch('/locations')
                    .then(response => response.json())
                    .then(locations => {
                        locations.forEach(location => {
                            addMarker(location);
                        });
                    });
            }

            function addMarker(location) {
                const marker = new google.maps.Marker({
                    position: {lat: parseFloat(location.latitude), lng: parseFloat(location.longitude)},
                    map: map,
                    title: location.name
                });
                markers.push(marker);
            }

            document.getElementById('locationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                if (newMarker) {
                    const name = document.getElementById('businessName').value;
                    const position = newMarker.getPosition();

                    fetch('/locations', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            name: name,
                            latitude: position.lat(),
                            longitude: position.lng()
                        })
                    })
                    .then(response => response.json())
                    .then(location => {
                        addMarker(location);
                        newMarker.setMap(null);
                        newMarker = null;
                        document.getElementById('businessName').value = '';
                    });
                }
            });

            initMap();
        </script> --}}
    </body>
    </html>
</div>
