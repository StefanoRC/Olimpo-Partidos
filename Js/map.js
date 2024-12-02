// js/map.js
function initMap() {
    var map = L.map('map').setView([-34.678417493256575, -58.41282002046743], 17); // Coordenadas de Buenos Aires
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([-34.678417493256575, -58.41282002046743]).addTo(map);
}
