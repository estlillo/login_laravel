<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Est">
        
        <title>Est</title>
        
        <script src="{{ URL::to('js/jquery.bxslider.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.js') }}"></script>
        <script src="{{ URL::to('js/jquery-ui.js') }}"></script>
        <script src="{{ URL::to('js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/dark-hive/jquery-ui.css">
        <link rel="stylesheet" href="{{ URL::to('css/jquery.bxslider.css') }}"> 
        <link rel="stylesheet" href="{{ URL::to('css/estilo.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/menufix.css') }}">  
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">     
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body style="min-width: 1000px;">
        @if(Session::has('global'))
        <div class="container">
            <div class="bs-example bs-example-bg-classes">

                <div class="bg-success" style="width: auto; padding: 10px; color: #3c763d; margin-bottom: 10px">{{ Session::get('global') }}</div>
    
            </div>        
        </div>
            
        @endif
        @if(Auth::check())
        @include('layout.navigation')
        <div class="side-left" style="width: 20%; float: left; padding-left: 10px;">
             @include('layout.sideleft')
        </div>
       
        <div class="container" style=" width: 80%; float: left; ">
         @yield('content-tab')
        </div>
        
        <script>
            
  $(function() {
    $( "#tabs" ).tabs();
    
    $( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
        
    
  });

  </script>
  @endif
        @yield('content')
        <div id="footer">
      <div class="container">
          <p class="text-muted" style="float: right; margin-right: 10%">Desarrollado por Esteban 2014.</p>
      </div>
    </div>
    </body>        
</html>