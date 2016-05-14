var json = {
        "shoplocations": [
            {
                "title": "Natwest Bank",
                "web": "www.google.com",
                "lat": 53.645792,
                "lng": -1.785035},
            {
                "title": "Halifax Bank",
                "web": "www.google.com",
                "lat": 53.646108,
                "lng": -1.783537},
                
        {
                
                "title": "RBS Bank",
                "website": "www.google.com",
                "lat": 53.646321,
                "lng": -1.782039},
            {
                
                "title": "TSB Bank",
                "website": "www.google.com",
                "lat": 53.645847,
                "lng": -1.783705}
        ]
    };
    
var infowindow = new google.maps.InfoWindow();
var map;
var infoWindow;
var pos;
var marker;




function initMap()
{
	
	function itWorks(position)
	{
     	console.log('latitude: '+position.coords.latitude);
     	console.log('longitude: '+position.coords.longitude);
 	}
	
 	function itDoesntWork(error)
	
	{
      	console.log('There is an error '+error);
 	}
	navigator.geolocation.getCurrentPosition(itWorks, itDoesntWork);
    
		
        map = new google.maps.Map(document.getElementById('map'), 
        {
          center: pos,
          mapTypeId: google.maps.MapTypeId.SATELLITE,
          zoom: 15,
        });
		
		
		var infoWindow = new google.maps.InfoWindow({map: map});
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
            };
	    
	    var trafficLayer = new google.maps.TrafficLayer();
		trafficLayer.setMap(map);

            
            var marker = new google.maps.Marker({
            position:pos,
            animation: google.maps.Animation.DROP,
            map: map,
    
          });
            
            marker.addListener('click', toggleBounce);
            

            function toggleBounce()
            {
                if (marker.getAnimation() !== null) {
                  marker.setAnimation(null);
                }
                else
                {
                  marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            
            }
	    
            

             var contentString = '<h2 id="firstHeading" class="firstHeading">Your Are Here</h2>';
             
             
		

            
            
            infoWindow = new google.maps.InfoWindow({
            content: contentString
		});
            marker.addListener('click', function() {
            infoWindow.open(map, marker);
		});

            infoWindow.setPosition(pos);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        }
        else
        {
              handleLocationError(false, infoWindow, map.getCenter());
        }
        
        
        
        
    $.each(json.shoplocations, function (key, data)
    {

        var latLng = new google.maps.LatLng(data.lat, data.lng);

        var goldStar = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var marker = new google.maps.Marker({
        position: latLng,
        animation: google.maps.Animation.DROP,
        icon: goldStar,
        map: map
        });

        var Natwest = '<h4>ATM Machine</h4>';

        bindInfoWindow(marker, map, infowindow, Natwest);

        //    });

    });
    
    
    
    
    function bindInfoWindow(marker, map, infowindow, strDescription)
    {
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });

    }
    

}


window.addEventListener("load",initMap,false);






