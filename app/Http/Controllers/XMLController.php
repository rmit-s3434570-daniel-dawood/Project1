<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class XMLController extends Controller
//{
//    function downloadUrl(url,callback) {
//    var request = window.ActiveXObject ?
//        new ActiveXObject('Microsoft.XMLHTTP') :
//        new XMLHttpRequest;
//
//    request.onreadystatechange = function() {
//        if (request.readyState == 4) {
//            request.onreadystatechange = doNothing;
//            callback(request, request.status);
//        }
//    };
//
//    request.open('GET', url, true);
//    request.send(null);
//}
//
//    public function index() {
//
//        return view('xml-dump');
//
//    }
//}
//
//    downloadUrl('/xml-dump', function(data) {
//        var xml = data.responseXML;
//        var markers = xml.documentElement.getElementsByTagName('marker');
//        Array.prototype.forEach.call(markers, function(markerElem) {
//            var id = markerElem.getAttribute('id');
//            var name = markerElem.getAttribute('name');
//            var address = markerElem.getAttribute('address');
//            var type = markerElem.getAttribute('type');
//            var point = new google.maps.LatLng(
//        parseFloat(markerElem.getAttribute('lat')),
//        parseFloat(markerElem.getAttribute('lng')));
//
//            var infowincontent = document.createElement('div');
//            var strong = document.createElement('strong');
//            strong.textContent = name
//        infowincontent.appendChild(strong);
//        infowincontent.appendChild(document.createElement('br'));
//
//        var text = document.createElement('text');
//        text.textContent = address
//        infowincontent.appendChild(text);
//        var icon = customLabel[type] || {};
//        var marker = new google.maps.Marker({
//        map: map,
//        position: point,
//        label: icon.label
//        });
//
//?>
<!--}-->
