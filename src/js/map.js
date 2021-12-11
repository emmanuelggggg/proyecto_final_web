document.addEventListener("DOMContentLoaded",() =>{

    mapboxgl.accessToken = 'pk.eyJ1IjoiamVzdXNlbW1hbnVlbCIsImEiOiJja3d4ajZkOHIwZGc2Mm51cmJndGxzYWsxIn0.cbB0XHm0KFYOBVAq2LXY6A';
    const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-110.31231886522382,24.14132113775314],
    zoom: 14,
    });

    const marker = new mapboxgl.Marker({
        draggable: true,
    })
    .setLngLat([-110.31231886522382,24.14132113775314])
    .addTo(map);
    
    const $markerPosition = new mapboxgl.Marker({
        draggable: true,
    })

    marker.on("dragend",(event)=>{
        const pos =marker.getLngLat();
        document.getElementById("latitud").value=marker.getLngLat().lat;
        document.getElementById("longitud").value=marker.getLngLat().lng;
    })
});
