<div id="contact" class="z-0">
    <div x-data="{
        map: null,
        markers: [
          { title: 'Bordeaux', lat: 44.837789, lng: -0.57918 },
        ]
      }">
        <div id="google-map" class="h-screen" x-ref="googleMap"></div>

        <script>
          function initMap() {
            const googleMap = document.getElementById('google-map');
            const map = new google.maps.Map(googleMap, {
              center: { lat: 44.837789, lng: -0.57918 },
              zoom: 14
            });

            alpine.store('map', map);

            alpine.effect(() => {
              const markers = alpine.store('markers');
              markers.forEach((marker) => {
                new google.maps.Marker({
                  position: { lat: marker.lat, lng: marker.lng },
                  map: map,
                  title: marker.title
                });
              });
            });
          }
        </script>

        <script x-init="initMap"></script>
      </div>
</div>
