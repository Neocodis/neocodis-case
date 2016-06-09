<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controler;

class SiteController extends Controller{
    
    function index($lang='PL'){
        $element = array();
        $element['Helper']['lang'] = $this->sessionf('add', $lang);
                
        
        
        return view('site.index', [ 'element' => $element ]);
    }
    
    public function sessionf($type='read', $lang="PL"){
        if($type=='add'){
            if($lang=='PL'){ $element['Lang'] = 'PL'; }else{ $element['Lang'] = 'EN'; }
            //Session::put('lang', $lang);
            return $lang;
        }else{
            return 1;//Session::get('lang');
        }
    }
}