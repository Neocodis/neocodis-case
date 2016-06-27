<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controler;


class SiteController extends Controller{
    
    function tropical_pl(){
        $element = array();
        $element['Helper']['site'] = 'tropical';
        $element['Helper']['lang'] = 'pl';
        
        return view('site.tropical_pl', [ 'element' => $element ]);
    }
    function tropical_en(){
        $element = array();
        $element['Helper']['site'] = 'tropical';
        $element['Helper']['lang'] = 'en';
        
        return view('site.tropical_en', [ 'element' => $element ]);
    }
    function zss6_pl(){
        $element = array();
        $element['Helper']['site'] = 'zss6';
        $element['Helper']['lang'] = 'pl';
        
        return view('site.zss6_pl', [ 'element' => $element ]);
    }
    function zss6_en(){
        $element = array();
        $element['Helper']['site'] = 'zss6';
        $element['Helper']['lang'] = 'en';
        
        return view('site.zss6_en', [ 'element' => $element ]);
    }
    function shecco_pl(){
        $element = array();
        $element['Helper']['site'] = 'shecco';
        $element['Helper']['lang'] = 'pl';
        
        return view('site.shecco_pl', [ 'element' => $element ]);
    }
    function shecco_en(){
        $element = array();
        $element['Helper']['site'] = 'shecco';
        $element['Helper']['lang'] = 'en';
        
        return view('site.shecco_en', [ 'element' => $element ]);
    }
    
    
}