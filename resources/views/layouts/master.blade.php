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
        <link rel="stylesheet" href="{{ elixir('css/leaflet.css') }}">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/components/icon.min.css'>
        <!-- jQuery to be loaded before everything else !-->
        <script src="{{ elixir('js/jquery.js') }}"></script>
        <!-- Semantic UI Javascript files !-->
        <script src="{{ elixir('js/app.js') }}"></script>
        <script src="{{ elixir('js/sidebar.js') }}"></script>
        <!-- LeafletJS integration for Maps !-->
        <script src="{{ elixir('js/leaflet.js') }}"></script>
        <!-- D3Js for Charts !-->
        <script src="https://d3js.org/d3.v4.js"></script>
        <!-- Load any more custom CSS / JS in the header !-->
        @section('h')
        @show

    </head>
    <body class="@yield('bc')">
    <!-- Body Content -->
    <div class="ui sidebar vertical left scrolling inverted menu overlay visible" style="-webkit-transition-duration: 0.5s; overflow: visible !important; background-color:#343536;">
      <div class="item center logo openbtn">
          <i class="icon content" style="font-size:24px; padding: 5px; color: #d2d2d2;"></i>
      </div>

        <a class="item">
            <i class="home icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <span class="sidebar-item-name sidebar-item-name-expanded">Dashboard</span>
        </a>


        <div class="ui inverted grey left pointing dropdown item">

            <i class="bar chart icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <i class="dropdown icon sidebar-item-icon-dropdown"></i>
            <span class="sidebar-item-name sidebar-item-name-expanded">Reports</span>

            <div class="menu" style="background-color: #eee;">
              <a href="#" class="item">Billing History</a>
              <a href="#" class="item">KOT Void History</a>
              <a href="#" class="item">Register Closures</a>
              <a href="#" class="item">Pending Settlements</a>
              <div class="ui divider"></div>
              <a href="#" class="item">Report By Sales</a>
              <a href="#" class="item">Report By Products</a>
              <a href="#" class="item">Report By Payments</a>
              <a href="#" class="item">Report By StockFlow</a>
              <a href="#" class="item">Report By Taxes</a>
            </div>
        </div>

        <div id="expected" class="ui left pointing dropdown item">

            <i class="tag icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <i class="dropdown icon sidebar-item-icon-dropdown"></i>
            <span class="sidebar-item-name sidebar-item-name-expanded">Products</span>

            <div class="menu" style="background-color: #f2f2f2;">
              <a href="#" class="item">Products</a>
              <a href="#" class="item">Product Modifiers</a>
              <a href="#" class="item">StockControl</a>
              <a href="#" class="item">PriceBooks</a>
              <div class="ui divider"></div>
              <a href="#" class="item">Sections</a>
              <a href="#" class="item">Brands</a>
              <a href="#" class="item">Suppliers</a>
            </div>
        </div>

        <div class="ui left pointing dropdown item">

            <i class="users icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <i class="dropdown icon sidebar-item-icon-dropdown"></i>
            <span class="sidebar-item-name sidebar-item-name-expanded">Customers</span>

            <div class="menu" style="background-color: #f2f2f2;">
              <a href="#" class="item">Customers</a>
              <a href="#" class="item">Customer Groups</a>
            </div>
        </div>

        <div class="ui left pointing dropdown item">

            <i class="setting icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <i class="dropdown icon sidebar-item-icon-dropdown"></i>
            <span class="sidebar-item-name sidebar-item-name-expanded">Settings</span>

            <div class="menu" style="background-color: #f2f2f2;">
              <a href="#" class="item">Stores &amp; Registers</a>
              <a href="#" class="item">Payments &amp; Taxes</a>
              <a href="#" class="item">Employees &amp; Permissions</a>
              <a href="#" class="item">Register Automation</a>
              <a href="#" class="item">Receipt Templates</a>
              <div class="ui divider"></div>
              <a href="#" class="item">Account</a>
            </div>
        </div>

        <div class="ui dropdown item bottom_sticky">

            <i class="user icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
            <i class="dropdown icon sidebar-item-icon-dropdown"></i>
            <span class="sidebar-item-name sidebar-item-name-expanded">User</span>

            <div class="menu" style="background-color: #f2f2f2;">
              <a href="#" class="item">My Profile</a>
              <a href="#" class="item">Logout</a>
            </div>
        </div>

    </div>

    @yield('content')
    <!-- End Body !-->
    </body>
</html>