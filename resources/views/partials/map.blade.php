<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:360px;width:700px;'>
    <div id='gmap_canvas' style='height:360px;width:700px;'></div>
    <div>
        <small><a href="http://embedgooglemaps.com">embed google maps</a></small>
    </div>
    <div>
        <small><a href="http://www.autohuren.world/locaties/ibiza/">auto huren ibiza</a></small>
    </div>
    <style>#gmap_canvas img {
            max-width: none !important;
            background: none !important
        }</style>
</div>
<script type='text/javascript'>function init_map() {
        var myOptions = {
            zoom: 16,
            center: new google.maps.LatLng(60.44993729999999, 22.268536700000027),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker(
                {
                    map: map,
                    position: new google.maps.LatLng(60.44993729999999, 22.268536700000027)
                });
        infowindow = new google.maps.InfoWindow(
                {content: '<strong>Korean Twist</strong><br>Linnankatu 11, 20100 Turku, Finland<br>'});
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);</script>