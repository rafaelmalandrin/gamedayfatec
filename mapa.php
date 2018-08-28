<div id="conteudo" class="mx-auto text-center container no-padding-on-mobile" style="padding-bottom: 2%; ">
    
            <div id="noticia" class="rounded mx-auto d-block">
                <p class="h1" style="text-align: center; padding: 2% 0 0 0; color: #666666;">
                    <span style="font-family: arial,helvetica,sans-serif; font-size: 20pt; font-weight: bold;">
                        O Game Day está chegando, confira o mapa do evento!
                    </span>
                </p>
            </div>   
            <img src='imagens/mapa.jpg'> 
            
            <img src='imagens/map.png' style="width:40%; margin:0 0 2% 0;">
            
            <div id="map" class="mx-auto" style="width: 300px; height: 300px; border: 5px solid #0066CC;">
                <script>
                    function initMap() {
                        var uluru = {lat: -22.430998, lng: -46.834217};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                        map: map
                        });
                    }
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1Q8oedzx0BVu-jKFRHzYcm74nhPnehmM&callback=initMap">
                </script>
            </div>
        </div>
	
	