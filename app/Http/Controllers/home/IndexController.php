<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\Lunbo;

class IndexController extends Controller
{
    public function index()
    {
    	$Lunbo = Lunbo::where('status','2')->first();
    	// 
    	if ($Lunbo) {
    		$Lunbo->url = explode('|',$Lunbo->url); 
    		
    		return view('home.index',['Lunbo'=>$Lunbo]);
    	}else{
    		$Lunbo= ['url'=>array('/homes/images/5.jpg','/homes/images/8.jpg','/homes/images/3.jpg')];
    		// echo '<pre>';
    		// var_dump($Lunbo['url'][0]);die;
			return view('home.index',['Lunbo'=>$Lunbo]);
    	}
    	
		

    	
    	
    	
    }
}
