<!doctype html>
<html lang="es">
<head>

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/blue.css') }}">

</head>
<body>

<div id="wrapper">


<header id="header-container" class="fullwidth transparent">

    <!-- Header -->

<div class="clearfix"></div>
<!-- Header Container / End -->

@yield('content')


  
@include('layout.footer')

</div>



@include('layout.login')


<!-- Scripts
================================================== -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/mmenu.min.js') }}"></script>
<script src="{{ asset('js/tippy.all.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/snackbar.js') }}"></script>
<script src="{{ asset('js/clipboard.min.js') }}"></script>
<script src="{{ asset('js/counterup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>

$('#snackbar-user-status label').click(function() { 
    Snackbar.show({
        text: 'Tu estado ha sido cambiado!',
        pos: 'bottom-center',
        showAction: false,
        actionText: "Dismiss",
        duration: 3000,
        textColor: '#fff',
        backgroundColor: '#383838'
    }); 
}); 
</script>

<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
         var options = {
          types: ['(cities)'],
          // componentRestrictions: {country: "us"}
         };

         var input = document.getElementById('autocomplete-input');
         var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function(){ 
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>

</body>
</html>