<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
	    	$websites = [
			['type'=>'news','name'=>'daily chaser'],
			['type'=>'entertainment','name'=>'Tranker!'],
			['type'=>'search','name'=>'Looking.com']
			];


	    	return view('welcome',[
	  		'websites' => $websites,
		]);
	}

	public function details($id){
	   return view('details',['id' => $id]);
	}






}
