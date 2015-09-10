<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    
    public function index(){
        // $items = [
        //     'Pack luggage',
        //     'Go to airport',
        //     'Arrive in San Juan'
        // ];
    	//sort($items);

        // return view('welcome');

    	//return view('welcome')->with('name','San Juan Vacation');

    	//$name = 'San Juan Vacation';
    	//return view('welcome')->withName($name);

    	//$data = array('name' => 'San Juan', 'date' => date('Y-m-d'));
    	//return view('welcome')->with($data);

    	//return view('welcome')->with('name','San Juan Vacation')
    	//->with('date',date('Y-m-d'));

    	$name = 'San Juan Vacation';
    	$date =date('Y-m-d');
    	//return view ('welcome',compact('name','date'));

    	$lists = array('Vacation Planning','Grocery Shopping','Camping Trip');
    	//return view('welcome')->with('lists', $lists);
        return view('welcome',compact('lists','name','date'));

        //About Mono Log
        // $monolog = \Log::getMonolog();
        // $items = ['Pack luggage','Go To Airport', 'Arrive in Sua Jan'];
        // $monolog->pushHandler(new \Monolog\Handler\FirePHPHandler());
        // $monolog->addInfo('Log Message',array('items'=>$items));
        //About Debug Bar
        //\Debugbar::error('Something is definitly going wrong');
    	//return view('home.welcome');
    }
}
