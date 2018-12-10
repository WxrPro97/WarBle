<?php

namespace App\Http\Controllers;

use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }

    public function index(){
        $title = 'Welcome to WARBLE!';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function contact(){

        $config['center'] = '53.348918, -6.243051';
        $config['zoom'] = '18';

        $this->gmap->initialize($config);

        $marker['position'] = '53.348918, -6.243051';
        $marker['infowindow_content'] = 'National College of Ireland';

        $this->gmap->add_marker($marker);

        $map = $this->gmap->create_map();

        $title = 'Contact Us';
        
        return view('pages.contact')->with('title', $title)->with('map', $map);
    }

    public function news(){
        $title = 'News';
        return view('pages.news')->with('title', $title);
    }
}
