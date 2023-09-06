ymaps.ready(init);
var myMap,
    myPlacemark;
function init(){
    myMap=new ymaps.Map("ya-map", {
        center: [53.9443346,27.6099203],
        zoom: 17
    });
    myMap.controls.add(
        new ymaps.control.ZoomControl()
    );
    var myPlacemark=new ymaps.Placemark([53.9443346,27.6099203], {
        hintContent: 'Тралс',
        balloonContent: 'Минск, Логойский тракт, 15 корпус 4'
    }, {
        iconImageHref: 'images/i/baloon_map.png',
        iconImageSize: [23,30],
        iconImageOffset: [-12, -30]
    });
    myMap.geoObjects.add(myPlacemark);
}