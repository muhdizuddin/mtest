@include('layouts.header')

<body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
       
        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Dashboard</h1> 
                        </div>  
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->
       
               
            
		</div>
        
	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->
    <!--// Main Content \\-->
		<div class="wm-main-content">
<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="wm-search-course">
                    <h3 class="wm-short-title wm-color">Find the locations</h3>
                    <p>Fill in the form below to find locations:</p>
                    <form method="post" action="/test">
                      @csrf
                        <ul>
                            <li> <input type="text" id="date" name="date"  onblur="if(this.value == '') { this.value ='Y/M/D Hour:Min:Sec'; }" onfocus="if(this.value =='Y/M/D Hour:Min:Sec') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                            <li>
                                <div class="wm-apply-select">
                                    <select>
                                        <option>2021/11/03 12:13:00</option>
                                        <option>2021/01/03 11:13:00</option>
                                        <option>2021/02/03 11:13:00</option>
                                        <option>2021/03/03 11:13:00</option>
                                    </select>
                                </div>
                            </li>
                            <li> <input type="submit"> </li>
                        </ul>
                    </form>
                </div>
            </div>
            @if(!empty($location))
         @foreach($location as $data)
          <div class="col-md-8">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Name: {{ $data['name'] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-science"></i>
                                <h6><a>ID: {{ $data['id'] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-school"></i>
                                <h6><a>Latitude: {{ $data["latitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Longitude: {{ $data["longitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-computer"></i>
                                <h6><a>Altitude: {{ $data["altitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-technology3"></i>
                                <h6><a>Visibility: {{ $data["visibility"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                    
                    </ul>
                </div>
            </div>
          @endforeach
          <div class="col-md-4">
              {{ $stamp }}
         </div>
          @foreach($location1 as $data1)
          <div class="col-md-8">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Name: {{ $data1["name"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-science"></i>
                                <h6><a>ID: {{ $data1["id"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-school"></i>
                                <h6><a>Latitude: {{ $data1["latitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Longitude: {{ $data1["longitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-computer"></i>
                                <h6><a>Altitude: {{ $data1["altitude"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-technology3"></i>
                                <h6><a>Visibility: {{ $data1["visibility"] }}</a></h6>
                            </div>
                        </li>
                        </li>
                    
                    </ul>
                </div>
            </div>
          @endforeach
          @else
            <div class="col-md-8">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-suitcase"></i>
                                <h6><a>Name</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-money"></i>
                                <h6><a>ID</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-school"></i>
                                <h6><a>Longitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-science"></i>
                                <h6><a>Latitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-computer"></i>
                                <h6><a>Country Code</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-technology3"></i>
                                <h6><a>Altitude</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-web3"></i>
                                <h6><a>Development</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap wm-bgcolor">
                                <i class="wmicon-shape"></i>
                                <h6><a>Velocity</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
        @if(!empty($location))
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
                                                <h2>Maps</h2>
                                                <a href="{{ $place["map_url"] }}" class="wm-banner-btn">Map</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Timezone Id</h2>
                                                <a class="wm-banner-btn">{{ $place["timezone_id"] }}</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Country Code</h2>
                                                <a class="wm-banner-btn">{{ $place["country_code"] }}</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @else
                <div class="wm-main-section wm-learn-listing-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>More <span>Informaion</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Maps</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Country Code</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Altitude</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="https://placeimg.com/640/480/tech" alt=""></a>
                                            <figcaption>
                                                <h2>Timezone ID</h2>
                                                <a class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
              </form> 
    </div>
</div>

@include('layouts.footer')