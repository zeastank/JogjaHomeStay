<?php
include ('session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="stylead.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add House</title>
<!DOCTYPE html>
<!--
 Copyright 2008 Google Inc.
 Licensed under the Apache License, Version 2.0:
 http://www.apache.org/licenses/LICENSE-2.0
 -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Saving User-Added Form Data Example</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    var marker;
    var infowindow;

    function initialize() {
      var latlng = new google.maps.LatLng(-7.765244, 110.373047);
      var options = {
        zoom: 13,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
      var html = "<table>" +
                 "<tr><td>Name:</td> <td><input type='text' id='name'/> </td> </tr>" +
                 "<tr><td>Address:</td> <td><input type='text' id='address'/></td> </tr>" +
                 "<tr><td></td><td><input type='button' value='Save & Close' onclick='saveData()'/></td></tr>";
    infowindow = new google.maps.InfoWindow({
     content: html
    });

    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
    });
    }

    function saveData() {
      var name = escape(document.getElementById("name").value);
      var address = escape(document.getElementById("address").value);
      var latlng = marker.getPosition();

      var url = "insert_location.php?name=" + name + "&address=" + address + "&lat=" + latlng.lat() + "&lng=" + latlng.lng();
      downloadUrl(url, function(data, responseCode) {
        if (responseCode == 200 && data.length <= 1) {
          infowindow.close();
          document.getElementById("message").innerHTML = "Location added.";
        }
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
    </script>
  </head>
    
<body style="margin:0px; padding:0px;" onload="initialize()">
<div id="header">
</div>

<nav>
<ul>
	<li ><a href="halamanprofil_host.php">Profil</a></li>
    <li class="active"><a href="add.php" class="hvr-underline-from-center"> Add Homestay Location</a></li>
    <li><a href="logout.php" class="hvr-underline-from-center"> Logout</a></li>
    </ul>
    </nav>
    <div class="center" id="map_canvas" style="width: 800px; height: 400px;"></div>
    <div id="message"></div>
</body>
</html>
