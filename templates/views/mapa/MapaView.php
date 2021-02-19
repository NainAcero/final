<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
    <title>Maps JavaScript API</title>

	<style> 
  	  #map {
        height: 100%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
      }
      .one {
        grid-column: 1;
        grid-row: 1 / 8;
      }
      .two {
        grid-column: 2 / 10;
        grid-row: 1 / 8;
      }
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin:20px;
        text-align: center;
        }

        .title {
        color: grey;
        font-size: 18px;
        }

        button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        }

        a {
        text-decoration: none;
        font-size: 22px;
        color: black;
        }

        button:hover, a:hover {
        opacity: 0.7;
        }

        /* Add some padding inside the card container */
        .container {
        padding: 2px 16px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            
        }

        .boton_personalizado{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            text-align: center;
            font-size: 20px;
            color: #000;
            background-color: #ccc;
            border-radius: 6px;
            margin-top: 10px !important;
        }
	</style> 
</head>  
	<body>
    <div class="wrapper">
        <div class="one">
            <div class="card" >
                <br>
                <h1 id="tem">TEMPERATURA :   -70°</h1>
                <p class="title">FECHA VUELO:  2021-02-19</p>
                <p class="title">SALIDA:    4:00:00 PM</p>
                <p class="title">LLEGADA ESTIMADA:     7:00:00 PM</p>
                <p class="title">AEROLÍNEA :   SUPARNA AIRLINES</p>
                <p class="title">VUELO :   7417</p>
                <p class="title">VACUNAS :   35 000</p>
                <p class="title">DESTINO :   TACNA - PERÚ</p>
                <p style="font-weight: bold;" id="estado">ESTADO :   VOLANDO</p>
            <br>
            </div>
            <!-- <div class="card">
               <div class="container">
                    <h3><b class="center">INFORMACIÓN</b></h3>
                    <p >FECHA VUELO:  2021-02-19</p>
                    <p>SALIDA:    4:00:00 PM</p>
                    <p>LLEGADA ESTIMADA:     7:00:00 PM</p>
                    <p>AEROLÍNEA :   SUPARNA AIRLINES</p>
                    <p>VUELO :   7417</p>
                    <p>VACUNAS :   35 000</p>
                    <p>DESTINO :   TACNA - PERÚ</p>
                </div>
            </div> -->

            <div class="card" >
                <br>
                 <h1>John Doe</h1>
                <p class="title">85674325</p>
                <p>ALMACENERO</p>
                <p><button>Contact</button></p>
            </div>

            <!-- <div class="card">
                <div class="container">
                    <h3><b class="center">RESPONSABLE</b></h3>
                    <p>NOMBRE:  ***** ***** ****** ********</p>
                    <p>DNI:    ********</p>
                    <p>CARGO:    ********</p>
                </div>
            </div> -->

            <a href="<?php echo URL.'home/home' ?>" class="boton_personalizado center">Volver</a>
        </div>
        <div class="two">
            <div id ="map"> </div>
        </div>
    </div>
		
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK7XD3i3cgtPV9SKcDff2IJc0O-WpNoNY&callback=initMap" async defer></script>
	<script>
		
        let map;
        let markers = [];
        var tem = document.getElementById("tem");
        var estado = document.getElementById("estado");

        function initMap() {

            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const haightAshbury = {lat: -18.01465, lng: -70.25362};
            const imagen = {lat: -12.038117851660077, lng:-76.75154182760396};
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6.5,
                center: {lat: -15.0453, lng:  -70.0311},
                mapTypeId: "terrain",
            });
            // This event listener will call addMarker() when the map is clicked.
            map.addListener("click", (event) => {
                addMarker(event.latLng);
            });
            // Adds a marker at the center of the map.
            addMarker(haightAshbury, null);
            addMarker(imagen,image);

            var flightPlanCoordinates = [
                {lat: -18.01465, lng: -70.25362},
                {lat:-17.566929654363395,lng: -70.30806027823344},
                {lat:-17.252438875596404,lng: -70.61567747282687},
                {lat:-16.85331409930354,lng: -70.9232946674203},
                {lat:-16.4322712589412,lng: -71.26387084714874},
            ];
            var flightPath = new google.maps.Polyline({
                path: flightPlanCoordinates,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });
            
            // Creando la ruta en el mapa
            flightPath.setMap(map);
            
     
            setTimeout(mensaje1,1000);
            setTimeout(mensaje2,2000);
            setTimeout(mensaje3,3000);
            setTimeout(mensaje4,4000);

            setTimeout(mensaje5,5000);
            setTimeout(mensaje6,6000);
            setTimeout(mensaje7,7000);
            setTimeout(mensaje8,8000);

            setTimeout(mensaje10,9000);
            setTimeout(mensaje11,10000);
            setTimeout(mensaje12,11000);

            setTimeout(mensaje15,12000);
            setTimeout(mensaje16,13000);
            setTimeout(mensaje17,14000);
            setTimeout(mensaje18,15000);
           
        }

        function mensaje1(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -12.167023549110924, lng: -76.41096564787553};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -69°";
        }

        function mensaje2(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -12.55336316786896, lng:  -75.83967657220202};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -72°";
        }

        
        function mensaje3(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -13.131781406719414, lng: -75.48811406409526};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -71°";
        }

               
        function mensaje4(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -14.12472917071852, lng:  -74.94978397355675};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -68°";
        }

        function mensaje5(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat:-14.103419822428206, lng:-74.76301639112502};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -70°";
        }

        function mensaje6(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat:-14.901133377477572, lng:  -74.40046755463992};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -69°";
        }

        function mensaje7(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -15.240603295346155, lng:  -73.89509644923643};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -71°";
        }

        function mensaje8(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat:-15.685325548404066, lng: -73.1370397911312};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -72°";
        }

        function mensaje10(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -16.118526421785763, lng:  -72.13728390870256};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -70°";
        }

        function mensaje11(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -16.413829552300175, lng: -71.63191280329907};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -69°";
        }

        function mensaje12(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -16.74024982468482, lng: -71.3133092803273};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -72°";
        }

        function mensaje15(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            }; 
            const imagen = {lat: -16.80599306159123, lng: -71.08259641139422};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -70°";
        }

        function mensaje16(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            }; 
            const imagen = {lat: -17.089741008119066, lng: -70.86286984382748};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -71°";
        }

        function mensaje17(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -17.394026667799416, lng: -70.73103390328744};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -70°";
        }

        function mensaje18(){
            clearMarkers();
            const image = {
                url:
                "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32),
            };
            const imagen = {lat: -18.01465, lng: -70.25362};
            addMarker(imagen,image);
            tem.innerText = "TEMPERATURA :   -71°";
            estado.innerText = "ESTADO :   ATERRISO";
        }

        // Adds a marker to the map and push to the array.
        function addMarker(location, image = null) {
            if(image == null){
                const marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });
                markers.push(marker);
            }else{
                const marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    icon: image,
                });
                markers.push(marker);
            }
        }

        // Sets the map on all markers in the array.
        function setMapOnAll(map) {
            for (let i = 1; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        // Removes the markers from the map, but keeps them in the array.
        function clearMarkers() {
            setMapOnAll(null);
        }

        // Shows any markers currently in the array.
        function showMarkers() {
            setMapOnAll(map);
        }

        // Deletes all markers in the array by removing references to them.
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
        
	</script>
 
	</body> 
</html>