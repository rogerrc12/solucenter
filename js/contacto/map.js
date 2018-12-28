
mapboxgl.accessToken = 'pk.eyJ1Ijoicm9nZXJyYzEyIiwiYSI6ImNqcGxwMWQ2azA4cmI0MnBlcG05YWg1M3AifQ.5hYQprIXyXblBgG3QbZkuQ';
var geojson = {
    type: 'FeatureCollection',
    features: [{
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [-77.085728, -11.982626]
      },
      properties: {
        title: 'Solucenter SAC',
        description: 'Av. Alisos Mz.G-1 lt. 6, 31 San Martin De Porres<br>Lima - Perú'
      }
    }]
}

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10',
    center: [-77.085728, -11.982586], 
    zoom: 17.5,
    pitch: 15,
    bearing: -10.6
});
map.scrollZoom.disable();
map.doubleClickZoom.disable();

geojson.features.forEach(marker => {
    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker';
    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
    .addTo(map);
});