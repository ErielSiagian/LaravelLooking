<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//*********  Main Project *******//
    public function index(){
	    	$websites = [
			['type'=>'news','name'=>'daily chaser'],
			['type'=>'entertainment','name'=>'Tranker!'],
			['type'=>'search','name'=>'Looking.com']
			];



	    	return view('current.welcome',[
	  		'websites' => $websites,
	  		'name' => request('name'),
	  		'age' => request('age')
		]);
	}

	public function details($id){
	   return view('current.details',['id' => $id]);
	}


//*********  Other Courses *******//

	public function udemy(){
	   return view('htmludemy.index');
	}

	public function ecma(){
	   return view('ECMAninja.index');
	}

	public function jquery(){
	   return view('jQueryninja.index');
	}

}
