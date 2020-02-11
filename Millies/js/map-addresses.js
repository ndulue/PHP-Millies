$('#googleMap').gMap({
		zoom: 10,
		maptype: 'TERRAIN',
		markers: [
		//Place 01
		{
			latitude: 40.6700,
			longitude:-73.9400,
			html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
			icon: {
				image: "images/icons/place-1.png",
				iconsize: [76, 110],
				iconanchor: [76, 110]
			
			}
		},
		
        //Place 02
		{
			latitude: 40.5700,
			longitude:-74.09400,
			html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
			icon: {
				image: "images/icons/place-2.png",
				iconsize: [76, 110],
				iconanchor: [76, 110]
			}
		},

        //Place 03
		{
			latitude: 40.4700,
			longitude:-74.3000,
			html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
			icon: {
				image: "images/icons/place-3.png",
				iconsize: [76, 110],
				iconanchor: [76, 110]
			}
		},
			
        //Place 04
		{
			latitude: 40.6000,
			longitude:-74.5000,
			html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
			icon: {
				image: "images/icons/place-4.png",
				iconsize: [76, 110],
				iconanchor: [76, 110]
			}
		},
			
        //Place 05
		{
			latitude: 40.7000,
			longitude:-74.3000,
			html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
			icon: {
				image: "images/icons/place-5.png",
				iconsize: [76, 110],
				iconanchor: [76, 110]
			}
		},

        //Place 06
        {
            latitude: 40.8000,
            longitude:-72.9000,
            html:"<div class='lucation-info-box'><div class='inner-box'><div class='image-box'><figure><img src='images/resource/lucation-image.jpg' alt=''></figure></div><div class='info-box'><span class='status'>Rent</span><ul class='othre-options'><li><a href='#'><i class='la la-heart'></i></a></li><li><a href='#'><i class='la la-share-alt'></i></a></li><li><a href='#'><i class='la la-refresh'></i></a></li></ul><span class='country'>ARKANSAS, US.</span><h4 class='title'>Merideian Villa</h4><span class='address'>Orland Park, IL 35785, Chicago, <br> United tate</span><div class='price'><span>$ 750</span>Per Month</div></div></div></div>",
            icon: {
                image: "images/icons/place-6.png",
                iconsize: [76, 110],
                iconanchor: [76, 110]
            }
        },
	],
});






//obtain a reference to the actual google.maps.Map instance
var myGmap = $('#googleMap').data('gMap.reference');
//create our styles
var styles =[
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f5f5f5"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#a2a29d"
            },
            {
                "visibility": "on"
            }
        ]
    }
];
var styledMap = new google.maps.StyledMapType(
    styles,
    {name: "Styled Map"}
);

myGmap.mapTypes.set('map_style', styledMap);
myGmap.setMapTypeId('map_style');

