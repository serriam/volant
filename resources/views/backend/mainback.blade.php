@extends('backend.includes.head')
@extends('backend.includes.nav')

@yield('content')

<script src="/back/js/core/jquery.min.js"></script>
<script src="/back/js/core/popper.min.js"></script>
<script src="/back/js/core/bootstrap.min.js"></script>
<script src="/back/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
<!-- Chart JS -->
<script src="/back/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/back/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/back/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/js/parsley.min.js"></script>
<script src="/back/demo/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
 function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(-1.28333,36.81667),
    zoom:12,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var card = document.getElementById('pac-card');
  var input = document.getElementById('pac-input');
  var input2 = document.getElementById('pac-input2');

  var types = document.getElementById('type-selector');
  var strictBounds = document.getElementById('strict-bounds-selector');

  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

  var autocomplete = new google.maps.places.Autocomplete(input);
  var autocomplete2 = new google.maps.places.Autocomplete(input2);
                      // console.log(autocomplete2);

                      // Bind the map's bounds (viewport) property to the autocomplete object,
                      // so that the autocomplete requests use the current map bounds for the
                      // bounds option in the request.
                      autocomplete.bindTo('bounds', map);
                      autocomplete2.bindTo('bounds', map);

                      // Set the data fields to return when the user selects a place.
                      autocomplete.setFields(
                        ['address_components', 'geometry', 'icon', 'name']);
                      autocomplete2.setFields(
                        ['address_components', 'geometry', 'icon', 'name']);

                      var infowindow = new google.maps.InfoWindow();
                      var infowindowContent = document.getElementById('infowindow-content');
                      infowindow.setContent(infowindowContent);
                      var marker = new google.maps.Marker({
                        map: map,
                        anchorPoint: new google.maps.Point(0, -29)
                      });

                      var marker2 = new google.maps.Marker({
                        map: map,
                        anchorPoint: new google.maps.Point(0, -29)
                      });

                      autocomplete.addListener('place_changed', function() {
                        infowindow.close();
                        marker.setVisible(false);
                        var place = autocomplete.getPlace();
                        if (!place.geometry) {
                          // User entered the name of a Place that was not suggested and
                          // pressed the Enter key, or the Place Details request failed.
                          window.alert("No details available for input: '" + place.name + "'");
                          return;
                        }

                        // If the place has a geometry, then present it on a map.
                        if (place.geometry.viewport) {
                          map.fitBounds(place.geometry.viewport);
                        } else {
                          map.setCenter(place.geometry.location);
                          map.setZoom(17);  // Why 17? Because it looks good.
                        }
                        marker.setPosition(place.geometry.location);
                        marker.setVisible(true);

                        var address = '';
                        if (place.address_components) {
                          address = [
                          (place.address_components[0] && place.address_components[0].short_name || ''),
                          (place.address_components[1] && place.address_components[1].short_name || ''),
                          (place.address_components[2] && place.address_components[2].short_name || '')
                          ].join(' ');
                        }

                        $('#origin').val(address);

                        infowindowContent.children['place-icon'].src = place.icon;
                        infowindowContent.children['place-name'].textContent = place.name;
                        infowindowContent.children['place-address'].textContent = address;
                        infowindow.open(map, marker);
                      });

                      autocomplete2.addListener('place_changed', function() {
                        infowindow.close();
                        marker2.setVisible(false);
                        var place = autocomplete2.getPlace();
                        if (!place.geometry) {
                          // User entered the name of a Place that was not suggested and
                          // pressed the Enter key, or the Place Details request failed.
                          window.alert("No details available for input: '" + place.name + "'");
                          return;
                        }

                        // If the place has a geometry, then present it on a map.
                        if (place.geometry.viewport) {
                          map.fitBounds(place.geometry.viewport);
                        } else {
                          map.setCenter(place.geometry.location);
                          map.setZoom(17);  // Why 17? Because it looks good.
                        }
                        marker2.setPosition(place.geometry.location);
                        marker2.setVisible(true);

                        var address = '';
                        if (place.address_components) {
                          address = [
                          (place.address_components[0] && place.address_components[0].short_name || ''),
                          (place.address_components[1] && place.address_components[1].short_name || ''),
                          (place.address_components[2] && place.address_components[2].short_name || '')
                          ].join(' ');
                        }

                        $('#destination').val(address);

                        infowindowContent.children['place-icon'].src = place.icon;
                        infowindowContent.children['place-name'].textContent = place.name;
                        infowindowContent.children['place-address'].textContent = address;
                        infowindow.open(map, marker2);
                      });

                      // Sets a listener on a radio button to change the filter type on Places
                      // Autocomplete.
                      function setupClickListener(id, types) {
                        var radioButton = document.getElementById(id);
                        radioButton.addEventListener('click', function() {
                          autocomplete.setTypes(types);
                          autocomplete2.setTypes(types);
                        });
                      }

                      setupClickListener('changetype-all', []);
                      setupClickListener('changetype-address', ['address']);
                      setupClickListener('changetype-establishment', ['establishment']);
                      setupClickListener('changetype-geocode', ['geocode']);

                      document.getElementById('use-strict-bounds')
                      .addEventListener('click', function() {
                        console.log('Checkbox clicked! New state=' + this.checked);
                        autocomplete.setOptions({strictBounds: this.checked});
                        autocomplete2.setOptions({strictBounds: this.checked});
                      });

                    }


                    function calculateDistance(){
                      var origin = $('#origin').val();
                      console.log(origin);
                      var destination = $('#destination').val();
                      var service = new google.maps.DistanceMatrixService();
                      service.getDistanceMatrix(

                      {
                        origins: [origin],
                        destinations: [destination],
                        travelMode: google.maps.TravelMode.DRIVING,
                        unitSystem: google.maps.UnitSystem.metric,
                        avoidHighways: false,
                        avoidTolls: false
                      }, callback);
                    }

                    function callback(response, status){
                      if (status != google.maps.DistanceMatrixStatus.OK) {
                        $('#result').html(err);
                      }else{
                        var origin = response.originAddresses[0];
                        var destination = response.destinationAddresses[0];

                        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                          $('#result').html("Better get on a plane. There are no roads between "+origin+"and" +destination);

                        }else{
                          var distance = response.rows[0].elements[0].distance;
                          var duration = response.rows[0].elements[0].duration;
                          console.log(response.rows[0].elements[0].distance);
                          var distance_in_kilo = distance.value / 1000;
                          var distance_in_mile = distance.value / 1609.34;
                          var duration_text = duration.text;
                          var duration_value = duration.value
                          $('#in_mile').text(distance_in_mile.toFixed(2));
                          $('#in_kilo').text(distance_in_kilo.toFixed(2));
                          $('#duration_text').text(duration_text);
                          $('#duration_value').text(duration_value);
                          $('#from').text(origin);
                          $('#to').text(destination);

                        }
                      }
                    }

                    $('#distance_form').submit(function(e){
                      e.preventDefault();
                      calculateDistance();
                    });

                  </script>

                   <script>
                      $("#skater").click(function(){
                      var name = $("#skater-name").text();
                      var amount = $("#skater-amount").text();
                      var time = $("#skater-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#express").click(function(){
                      var name = $("#express-name").text();
                      var amount = $("#express-amount").text();
                      var time = $("#express-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#pickup").click(function(){
                      var name = $("#pickup-name").text();
                      var amount = $("#pickup-amount").text();
                      var time = $("#pickup-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#van").click(function(){
                      var name = $("#van-name").text();
                      var amount = $("#van-amount").text();
                      var time = $("#van-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#3-Tonne").click(function(){
                      var name = $("#3-Tonne-name").text();
                      var amount = $("#3-Tonne-amount").text();
                      var time = $("#3-Tonne-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#5-Tonne").click(function(){
                      var name = $("#5-Tonne-name").text();
                      var amount = $("#5-Tonne-amount").text();
                      var time = $("#5-Tonne-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#10-Tonne").click(function(){
                      var name = $("#10-Tonne-name").text();
                      var amount = $("#10-Tonne-amount").text();
                      var time = $("#10-Tonne-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                     
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#28-Tonne").click(function(){
                      var name = $("#28-Tonne-name").text();
                      var amount = $("#28-Tonne-amount").text();
                      var time = $("#28-Tonne-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      
                      

                      $("#medium-amount1").click(function(){
                        var amount = $("#medium-amount1").text();
                        var name = $("#medium-name").text();
                        var time = $("#medium-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#medium-amount2").click(function(){
                        var amount = $("#medium-amount2").text();

                        var name = $("#medium-name").text();
                        var time = $("#medium-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#medium-amount3").click(function(){
                        var amount = $("#medium-amount3").text();

                        var name = $("#medium-name").text();
                        var time = $("#medium-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#medium-amount4").click(function(){
                        var amount = $("#medium-amount4").text();

                        var name = $("#medium-name").text();
                        var time = $("#medium-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#medium-amount5").click(function(){
                        var amount = $("#medium-amount5").text();

                        var name = $("#medium-name").text();
                        var time = $("#medium-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#door-amount1").click(function(){
                        var amount = $("#door-amount1").text();
                        var name = $("#door-name").text();
                        var time = $("#door-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#door-amount2").click(function(){
                        var amount = $("#door-amount2").text();

                        var name = $("#door-name").text();
                        var time = $("#door-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#door-amount3").click(function(){
                        var amount = $("#door-amount3").text();

                        var name = $("#door-name").text();
                        var time = $("#door-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#door-amount4").click(function(){
                        var amount = $("#door-amount4").text();

                        var name = $("#door-name").text();
                        var time = $("#door-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#door-amount5").click(function(){
                        var amount = $("#door-amount5").text();

                        var name = $("#door-name").text();
                        var time = $("#door-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#drop-amount1").click(function(){
                        var amount = $("#drop-amount1").text();
                        var name = $("#drop-name").text();
                        var time = $("#drop-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#drop-amount2").click(function(){
                        var amount = $("#drop-amount2").text();

                        var name = $("#drop-name").text();
                        var time = $("#drop-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#drop-amount3").click(function(){
                        var amount = $("#drop-amount3").text();

                        var name = $("#drop-name").text();
                        var time = $("#drop-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#drop-amount4").click(function(){
                        var amount = $("#drop-amount4").text();

                        var name = $("#drop-name").text();
                        var time = $("#drop-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#drop-amount5").click(function(){
                        var amount = $("#drop-amount5").text();

                        var name = $("#drop-name").text();
                        var time = $("#drop-time").text();
                        var to = $("#to").text();
                        var from = $("#from").text();
                        var weight = $("#weight").text();

                        // console.log(amount+name+time);
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });
                      });

                      $("#movers").click(function(){
                      var name = $("#movers-name").text();
                      var amount = $("#movers-amount").text();
                      var time = $("#movers-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#dedicated").click(function(){
                      var name = $("#dedicated-name").text();
                      var amount = $("#dedicated-amount").text();
                      var time = $("#dedicated-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#good").click(function(){
                      var name = $("#good-name").text();
                      var amount = $("#good-amount").text();
                      var time = $("#good-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#delivery").click(function(){
                      var name = $("#delivery-name").text();
                      var amount = $("#delivery-amount").text();
                      var time = $("#delivery-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });

                      $("#pick").click(function(){
                      var name = $("#pick-name").text();
                      var amount = $("#pick-amount").text();
                      var time = $("#pick-time").text();
                      var to = $("#to").text();
                      var from = $("#from").text();
                      
                      jQuery.ajax({
                        url: '{{ route('orders.serve') }}',
                        method: "POST",
                        data: {name: name, amount: amount, time: time, to: to, from: from, _token: '{{csrf_token()}}'},
                        success:function(data){
                          window.location = "http://127.0.0.1:8000/service/"+data;
                        },
                        error: function(){
                          alert('something went wrong');
                        }
                      });

                      });
                    </script>

                  <script>
                    $(document).ready(function() {
                      $("#proceed").on('click', function() {
                        $("#reveal").fadeToggle(1000);
                      });

                    });
                  </script>
               </body>

               @yield('scripts')
       {{--  <div class="row collapse" id="collapse1">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Select Package
              </div>
              <div class="card-body">
                <div id="load" class="animate-bottom"></div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Volant Metro Package
                            </a>
                          </p>
                          <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <a class="btn btn-primary" id="title" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Volant Upcountry Package
                            </a>
                          </p>
                          <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Volant Special Package
                            </a>
                          </p>
                          <div class="collapse" id="collapseExample3">
                            <div class="card card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">Continue</a>
                  <div class="collapse" id="collapseExample4">
                            <div class="card card-body">
                              <div class="alert alert-default">Select one serve</div>
                      
                                              {{--   <div class="form-group">
                                                  
                                                  <select type="text" name="small" id="small" class="form-control" required>
                                                    <option >1. Standard Bike 250</option>
                                                    <option >2. express Bike 350</option>
                                                  </select>
                                                  <p style="color: red;" id="error"></p>
                                                </div> --}}


                                               {{--  <div class="form-group">
                                                
                                                  <select type="text" name="medium" id="medium" class="form-control" required>
                                                    <option >1. pickup</option>
                                                    <option >2. Van</option>
                                                  </select>
                                                  <p style="color: red;" id="errorf"></p>
                                                </div> --}}


                                                {{-- <div class="form-group">
                                                 
                                                  <input type="text" name="heavy" id="heavy" class="form-control" placeholder="Heavy" required>
                                                  <p style="color: red;" id="errorf"></p>
                                                </div> --}}