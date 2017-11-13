<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('titulo')</title>

    <!-- Bootstrap -->
 
   <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
   <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
 @include('partials.login_menu')
<br><br>
    <div class="container">
    @yield('content')
   

    </div>
<!-- add todos os plugins e arquivos JS, bootstrap, jquery.. todos com elixir gulp -->
    <script src="{!! asset('js/app.js') !!}"></script>


    <footer class="footer">
<p class="text-center">© Sys Controle - Todos os Direitos Reservados</p>
</footer>
  </body>
</html>