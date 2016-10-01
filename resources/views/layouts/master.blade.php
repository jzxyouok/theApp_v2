<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <!-- Fonts -->
        <script src="//use.typekit.net/zts0ijd.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!-- Semantic UI stylesheets !-->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/sidebar.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/nag.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/menu.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/shape.css') }}"> 
        <link rel="stylesheet" href="{{ elixir('css/dropdown.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/leaflet.css') }}">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/components/icon.min.css'>
        <!-- jQuery to be loaded before everything else !-->
        <script src="{{ elixir('js/jquery.js') }}"></script>
        <!-- Semantic UI Javascript files !-->
        <script src="{{ elixir('js/app.js') }}"></script>
        <script src="{{ elixir('js/main.js') }}"></script>
        <script src="{{ elixir('js/sidebar.js') }}"></script>
        <script src="{{ elixir('js/nag.js') }}"></script>
        <script src="{{ elixir('js/shape.js') }}"></script>
        <script src="{{ elixir('js/dropdown.js') }}"></script>
        <!-- LeafletJS integration for Maps !-->
        <script src="{{ elixir('js/leaflet.js') }}"></script>
        <!-- D3Js for Charts !-->
        <script src="https://d3js.org/d3.v4.js"></script>
        <!-- Load any more custom CSS / JS in the header !-->
        @section('h')
        @show

    </head>
    <body class="@yield('bc')">
    <!-- The body !-->
    @section('c')
    @show
    <!-- End Body !-->
    </body>
</html>