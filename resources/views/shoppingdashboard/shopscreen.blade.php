<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dark Admin by Bootstrapious.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Choices.js-->
        <link rel="stylesheet" href="{{asset("vendor/choices.js/public/assets/styles/choices.min.css")}}">
        <!-- Google fonts - Muli-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{asset("css/style.default.css")}}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{asset("css/custom.css")}}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            @livewireStyles
      </head>
<body>

    
    {{-- Admin Dashboard --}}
    @livewire("publicdashboard.component.shopbase")

    @livewireScripts
        <!-- JavaScript files-->
        <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("vendor/just-validate/js/just-validate.min.js")}}"></script>
        <script src="{{asset("vendor/chart.js/Chart.min.js")}}"></script>
        <script src="{{asset("vendor/choices.js/public/assets/scripts/choices.min.js")}}"></script>
        <script src="{{asset("js/charts-home.js")}}"></script>
        <!-- Main File-->
        <script src="{{asset("js/front.js")}}"></script>
        <script>
          // ------------------------------------------------------- //
          //   Inject SVG Sprite - 
          //   see more here 
          //   https://css-tricks.com/ajaxing-svg-sprite/
          // ------------------------------------------------------ //
          function injectSvgSprite(path) {
          
              var ajax = new XMLHttpRequest();
              ajax.open("GET", path, true);
              ajax.send();
              ajax.onload = function(e) {
              var div = document.createElement("div");
              div.className = 'd-none';
              div.innerHTML = ajax.responseText;
              document.body.insertBefore(div, document.body.childNodes[0]);
              }
          }
          // this is set to BootstrapTemple website as you cannot 
          // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
          // while using file:// protocol
          // pls don't forget to change to your domain :)
          injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
          
          
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      
</body>
</html>