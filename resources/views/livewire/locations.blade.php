<div>
    <div id="map" style="height: 400px;"></div>

    <script>
        // Asegúrate de que Leaflet se cargue después de jQuery o otras bibliotecas
        document.addEventListener('DOMContentLoaded', () => {
            // Inicializa el mapa cuando el DOM esté completamente cargado
            var map = L.map('map').setView([-34.6037, -58.3876], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>contributors'
            }).addTo(map);
        });
    </script>
</div>
