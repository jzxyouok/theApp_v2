<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/sidebar.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/nag.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/menu.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/shape.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/dropdown.css') }}"> 
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/components/icon.min.css'>

        <script src="{{ elixir('js/jquery.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
        <script src="{{ elixir('js/main.js') }}"></script>
        <script src="{{ elixir('js/sidebar.js') }}"></script>
        <script src="{{ elixir('js/nag.js') }}"></script>
        <script src="{{ elixir('js/shape.js') }}"></script>
        <script src="{{ elixir('js/dropdown.js') }}"></script>
        <script src="https://d3js.org/d3.v4.js"></script>
        

        @section('h')
        @show
    
    </head>
    <body class="@yield('bc')">

@section('c')
@show

        <div class="ui inline sticky cookie nag">
          <span class="title" id="context">
            We use cookies to ensure you get the best experience on our website
          </span>
          <i class="close icon"></i>
        </div>
    </body>
</html>