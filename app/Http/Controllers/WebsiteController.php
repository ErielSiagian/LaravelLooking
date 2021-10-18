<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Websites;

class WebsiteController extends Controller
{
    public function index($id){
    	return view('current.details',['id'=> $id]);
    }

    public function show(){
    	
    }
}
