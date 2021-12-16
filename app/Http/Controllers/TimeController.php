<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Carbon\Carbon;

class TimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('test');
    }

    public function test(request $request){

        $minutes_to_add = 10;

        $trounds= 5;
   
        $search = $request->input('date');

        $time = strtotime(date($search));
        
        //dd($stamp);
        $date2 = Http::get( env('Time') . $search)->json();

        //dd($date);
        foreach($date2 as $date2){
        $location2 = Http::get( env('Api_ISS') . $date2)->json();}

        
        //dd($location1);
        $latitude2 = $location2[0]['latitude'];
        $longitude2 = $location2[0]['longitude'];
        
        //dd($longitude);
        $place2 = Http::get( env('Location') . $latitude2 .','.$longitude2)->json();

        $zone2 = $place2['timezone_id'];

        echo"<br></br>";
        echo"<h1><center>1 Hour before ".$search."</h1></center>";

        for($j = 1; $j<= $trounds ; $j++){
            $time -= 10*60;
            echo"<br></br>";
            echo"<br></br>";
            echo '<center><h3>Date:'.$date = date('Y-m-d H:i:s',$time).'</h3>';

            $location = Http::get( env('Api_ISS') . $time)->json(); 

            echo'Latitude:'.$latitude = $location[0]['latitude'];
            echo'<br></br>';
            echo'Longitude:'.$longitude = $location[0]['longitude'];
            echo'<br></br>';
            $place = Http::get( env('Location') . $latitude .','.$longitude)->json();

            echo'Timezoned:'.$zone = $place['timezone_id'];
            echo"<br></br>";
            echo'country code:'.$country = $place['country_code'];
            echo"<br></br>";
            echo'<button><a href="'.$map = $place['map_url'].'">Maps</a></button></center>';  
                
        }

        echo"<br></br>";
        echo"<h1><center>1 Hour After ".$search."</h1></center>";
        for($j = 1; $j<= $trounds ; $j++){

            $time += 10*60;
            echo"<br></br>";
            echo"<br></br>";
            echo'<center><h3>Date:'.$date1 = date('Y-m-d H:i:s',$time).'</h3>';

            $location1 = Http::get( env('Api_ISS') . $time)->json(); 

            echo'Latitude:'.$latitude1 = $location1[0]['latitude'];
            echo'<br></br>';
            echo'Longitude:'.$longitude1 = $location1[0]['longitude'];
            echo'<br></br>';
            $place1 = Http::get( env('Location') . $latitude1 .','.$longitude1)->json();

            echo'Timezoned:'.$zone1 = $place1['timezone_id'];
            echo"<br></br>";
            echo'country code:'.$country1 = $place1['country_code'];
            echo"<br></br>";
            echo'<button><a href="'.$map1 = $place1['map_url'].'">Maps</a></button></center>';
    
        }
        echo"<br></br>";
        echo"<br></br>";

        // Return the search view with the resluts compacted
        return view('test', compact('longitude2','latitude2','longitude','latitude','longitude1','latitude1','zone','zone1','zone2'));
    }


}
