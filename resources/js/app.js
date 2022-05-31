require("./bootstrap");

$(".partnership-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 3,
        },
    },
});

mybutton = document.getElementById("scroll-btn");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

mapboxgl.accessToken =
    "pk.eyJ1IjoiamNlbnJpcXVlLXoiLCJhIjoiY2wzNG5raGxwMDBpYzNlcDlyMHAybG1mMiJ9.vNLDj2mCAqS5YYLPY9SeAQ";

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true,
});

function successLocation(position) {
    setupMap([position.coords.longitude, position.coords.latitude]);
}

function errorLocation() {
    setupMap([-122.25948, 37.8722]);
}

function setupMap(center) {
    const map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: center,
        zoom: 10,
    });

    const nav = new mapboxgl.NavigationControl();
    map.addControl(nav, "bottom-right");
    map.addControl(new mapboxgl.FullscreenControl());
    const marker = new mapboxgl.Marker() // initialize a new marker
        .setLngLat([121.044404, 14.659987]) // Marker [lng, lat] coordinates
        .addTo(map); // Add the marker to the map
}
