@extends('layouts.master')

@section('h')
    <style>
    .bg {
      background-position: center center;
      background-image: -moz-radial-gradient(center center, circle, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
      background-image: -o-radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
      background-image: -webkit-radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
      background-image: radial-gradient(center center, 1000px 1000px, rgba(255,255,255,.62) 0%, rgba(41,41,40,.62) 100%); /* gradient overlay */
    }
    </style>
    <style>
      .line {
        fill: none;
        stroke: #666;
        stroke-width: 1.5px;
      }

      .area {
        fill: #e7e7e7;
      }

      text {
        text-anchor: end;
        font-size: 10px;
      }
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.ui.sidebar')
          .sidebar({
            context: $('#sidebar')
          })
          .sidebar('attach events', '.menu #side_bar');
        $('.ui.dropdown.item')
          .dropdown({
            maxSelections: 3
          });
        $('.cookie.nag')
          .nag({
            key      : 'accepts-cookies',
            value    : true
          });
        $('.ui.sticky')
          .sticky({
            pushing: true,
            context      : '#context'
          });
        $('#card .image').dimmer({
            on: 'hover'
          });
        $('#btn').click(function(){
            $('.shape').shape('flip back');
          });
        $('#btn2').click(function(){
            $('.shape').shape('flip back');
          });
        });
        
    </script>
    <script>
    var margin = {top: 8, right: 10, bottom: 2, left: 10},
    width = 268 - margin.left - margin.right,
    height = 29 - margin.top - margin.bottom;

    var parseDate = d3.timeParse("%b %Y");

    var x = d3.scaleTime()
        .range([0, width]);

    var y = d3.local();

    var area = d3.local();

    var line = d3.local();

    d3.tsv("stocks.tsv", type, function(error, data) {
      if (error) throw error;

      var symbols = d3.nest()
          .key(function(d) { return d.symbol; })
          .entries(data);

      x.domain([
        d3.min(symbols, function(symbol) { return symbol.values[0].date; }),
        d3.max(symbols, function(symbol) { return symbol.values[symbol.values.length - 1].date; })
      ]);

      var svg = d3.select("#chart").selectAll("svg")
          .data(symbols)
        .enter().append("svg")
          .attr("width", width + margin.left + margin.right)
          .attr("height", height + margin.top + margin.bottom)
        .append("g")
          .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
          .each(function(d) {
            var ty = y.set(this, d3.scaleLinear()
                .domain([0, d3.max(d.values, function(d) { return d.price; })])
                .range([height, 0]));

            area.set(this, d3.area()
                .x(function(d) { return x(d.date); })
                .y0(height)
                .y1(function(d) { return ty(d.price); }));

            line.set(this, d3.line()
                .x(function(d) { return x(d.date); })
                .y(function(d) { return ty(d.price); }));
          });

      svg.append("path")
          .attr("class", "area")
          .attr("d", function(d) { return area.get(this)(d.values); });

      svg.append("path")
          .attr("class", "line")
          .attr("d", function(d) { return line.get(this)(d.values); });

      svg.append("text")
          .attr("x", width - 6)
          .attr("y", height - 6)
          .text(function(d) { return d.key; });
    });

    function type(d) {
      d.price = +d.price;
      d.date = parseDate(d.date);
      return d;
    }
    </script>

@endsection
@section('bc', 'bg')

@section('c')

  <div class="ui top attached inverted menu">
    <a class="active teal item" id="side_bar">
      <i class="sidebar icon context example"></i>
      Menu
    </a>
    <div class="right menu">
      <a class="item">
        <i class="settings icon"></i>Settings
      </a>
      <div class="ui dropdown item">
        <i class="user icon"></i> User's Profile <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item"><i class="user icon"></i>My Profile</a>
          <a class="item"><i class="sign out icon"></i>Sign Out</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <div class="ui attached segment pushable" id="sidebar">

    <div class="ui inverted labeled icon left inline vertical sidebar menu">
      <a class="item">
        <i class="home icon"></i>
        Dashboard
      </a>
      <a class="item">
        <i class="money layout icon"></i>
        Billing
      </a>
      <a class="item">
        <i class="line chart outline icon"></i>
        Reports
      </a>
      <a class="item">
        <i class="cube icon"></i>
        Products
      </a>
      <a class="item">
        <i class="user icon"></i>
        Customers
      </a>
    </div>

    <!-- Content on webpage !-->
    <div class="pusher">
      <div class="ui basic segment">
        <h3 class="ui header centered">Cards Content</h3>
        <div class="ui container">
          
          <div class="ui link centered special cards">
            <!-- Single Card -->
            <div class="red card">
              <div class="image">
                <img src="http://semantic-ui.com/images/avatar2/large/matthew.png">
              </div>
              <div class="content">
                <div class="header">Matt Giampietro</div>
                <div class="meta">
                  <a>Friends</a>
                </div>
                <div class="description">
                  Matthew is an interior designer living in New York.
                </div>
              </div>
              <div class="extra content">
                <span class="right floated">
                  Joined in 2013
                </span>
                <span>
                  <i class="user icon"></i>
                  75 Friends
                </span>
              </div>
            </div>

            <div class="green card" id="card">
              <div class="blurring dimmable image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <div class="ui inverted button">Add Friend</div>
                    </div>
                  </div>
                </div>
                <img src="http://semantic-ui.com/images/avatar/large/elliot.jpg">
              </div>
              <div class="content">
                <a class="header">Team Fu</a>
                <div class="meta">
                  <span class="date">Created in Sep 2014</span>
                </div>
              </div>
              <div class="extra content">
                <a>
                  <i class="users icon"></i>
                  2 Members
                </a>
              </div>
            </div>

            <div class="ui blue card">
              <div class="content">
                <div class="right floated meta">14h</div>
                <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/large/elliot.jpg"> Elliot
              </div>
              <div class="image">
                <img src="http://semantic-ui.com/images/wireframe/image.png">
              </div>
              <div class="content">
                <span class="right floated">
                  <i class="heart outline like icon"></i>
                  17 likes
                </span>
                <i class="comment icon"></i>
                3 comments
              </div>
              <div class="extra content">
                <div class="ui large transparent left icon input">
                  <i class="heart outline icon"></i>
                  <input type="text" placeholder="Add Comment...">
                </div>
              </div>
            </div>

          </div>
          <div class="ui centered cards">
            <div class="ui orange card">
              <div class="content">
                <div class="header">D3js</div>
                <div class="description" >
                  <p id="chart"></p>
                </div>
              </div>
            </div>
            <div class="ui people shape">
              <div class="sides">
                <div class="side active">
                  <div class="ui red card">
                    <div class="image" href="#" id="btn">
                      <img src="http://semantic-ui.com/images/avatar/large/steve.jpg">
                    </div>
                    <div class="content">
                      <a class="header" href="#">Steve Jobs</a>
                      <div class="meta">
                        <a>Last Seen 2 days ago</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="side">
                  <div class="ui green card">
                    <div class="image" href="#" id="btn2">
                      <img src="http://semantic-ui.com/images/avatar/large/stevie.jpg">
                    </div>
                    <div class="content">
                      <a class="header" href="#">Stevie Jobs</a>
                      <div class="meta">
                        <a>Last Seen 2 seconds ago</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>
      </div>
                  <div class="ui center aligned container">
            <p style="margin-top:20px; margin-bottom:20px; color:grey;"> &copy; ShopTree 2016</p>
        </div>
    </div>
  </div>
@stop