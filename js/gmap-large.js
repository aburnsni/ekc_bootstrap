var myLatlng = new google.maps.LatLng(54.55663, -5.964576),
    directionsDisplay,
    directionsService = new google.maps.DirectionsService();


function initialize() {
    "use strict";
    var saveWidget,

        mapOptions = {
            zoom: 15,
            center: myLatlng,
            streetViewControl: 0,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DEFAULT,
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE]
            },
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.TOP_LEFT
            }
        },

        map = new google.maps.Map(document.getElementById('map-canvas-large'), mapOptions),

        saveWidgetOptions = {
            place: {
                // ChIJJfVFI6oIYUgRdw0d7GHwHOs is the place Id for FFS. Found using 
                // https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder
                placeId: 'ChIJJfVFI6oIYUgRdw0d7GHwHOs',
                location: myLatlng
            },
            attribution: {
                source: 'Fleming Fulton School',
                webUrl: 'http://www.ekc_bootstrapfulton.org.uk'
            }
        },

        contentString = '<div id="save-widget">' +
        '<h4>Fleming Fulton School</h4>' +
        '<div>' +
        'Upper Malone Road<br />Belfast<br />BT9 6TY' +
        '</div>' +
        '</div>',

        infowindow = new google.maps.InfoWindow({
            content: contentString
        }),

        marker = new google.maps.Marker({
            icon: '/sites/all/themes/ekc_bootstrap/logo.png',
            position: saveWidgetOptions.place.location,
            map: map,
            title: 'Fleming Fulton School',
            animation: google.maps.Animation.DROP
        });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
        var widgetDiv = document.getElementById('save-widget');
        saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions);
    });

    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directionsPanel"));
}

function calcRoute() {
    "use strict";
    var start = document.getElementById("routeStart").value;
    var end = myLatlng;
    var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == 'ZERO_RESULTS') {
            alert('No route could be found between the origin and destination.');
        } else if (status == 'UNKNOWN_ERROR') {
            alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
        } else if (status == 'REQUEST_DENIED') {
            alert('This webpage is not allowed to use the directions service.');
        } else if (status == 'OVER_QUERY_LIMIT') {
            alert('The webpage has gone over the requests limit in too short a period of time.');
        } else if (status == 'NOT_FOUND') {
            alert('At least one of the origin, destination, or waypoints could not be geocoded.');
        } else if (status == 'INVALID_REQUEST') {
            alert('The DirectionsRequest provided was invalid.');
        } else if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        } else {
            if (status == 'ZERO_RESULTS') {
                alert("Could not calculate a route to or from one of your destinations.");
            } else {
                alert("There was an unknown error in your request. Requeststatus: " + status);
            }
        }
    });
}
google.maps.event.addDomListener(window, 'load', initialize);