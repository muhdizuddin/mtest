@include('layouts.header')
<html>
   <head>
      <title>ISS Tracking</title>
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript" src = "https://www.google.com/jsapi">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['map']});     
      </script>
   </head>
   
   <body>
       <!--// Mini Header \\-->
       <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>MAPS</h1> 
                        </div>  
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->
        

      <div id = "container" style = "width: 1800px; height: 1000px; margin: 0 auto">
      </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Lat', 'Long', 'Name'],
               [{{ $latitude }} ,{{ $longitude }},'1 hour before:{{ $zone }}'],
               [{{ $latitude2 }}, {{ $longitude2 }}, 'Now:{{ $zone2 }}'],
               [{{ $latitude1 }}, {{ $longitude1 }}, '1 hour after:{{ $zone1 }}']
            ]);
              
            // Set chart options
            var options = {showTip: true};				

            // Instantiate and draw the chart.
            var chart = new google.visualization.Map(document.getElementById
            ('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>

      <!--// Mini Header \\-->
      <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Google News</h1> 
                        </div>  
                    </div>
                </div>
            </div>    
        </div>

        <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>More <span>Information</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>1 hour After :{{ $zone1 }}</h2>
                                                <a href="https://news.google.com/search?q={{ $zone1 }}" class="wm-banner-btn">News</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Now :{{ $zone2 }}</h2>
                                                <a href="https://news.google.com/search?q={{ $zone2 }}" class="wm-banner-btn">News</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>1 hour Before :{{ $zone }}</h2>
                                                <a href="https://news.google.com/search?q={{ $zone }}" class="wm-banner-btn">News</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--// Mini Header \\-->
        <button type="button" onclick="alert('Retry?')"><a href="/home">Home</a></button>
   </body>
</html>
@include('layouts.footer')