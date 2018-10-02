<?php

/**
 * 
 */
namespace App\Http\Controllers;
use App\Controllers;

class FansController extends Controller
{
	
	public function welcomepage(){
		return view("celeluxwelcome");
	}


	public function showsignup(){

		return view("fans.signuppage");
	}

	public function showsignin(){
		return view('fans.signinpage');
	}

	public function showsignupmessage(){
		return view('fans.signupmessage');

	}

	public function showauthpage(){
		return view('fans.showauthpage');
	}

	public function showfanpage($fan_id){

		$fan=$fan_id;
		return view('fans.page.fandashboard',compact('fan'));

	}

	public function showcelebcollections($fan_id,$celeb_id){

		return view('fans.page.celebcollections',compact('fan_id','celeb_id'));


	}

	public function showitembidroom($fan_id,$celeb_id,$item_id){
		return view('fans.page.itembidroom',compact('fan_id','celeb_id','item_id'));
	}

	public function showfansettings($fan_id){
		return view('fans.page.settings',compact('fan_id'));
	}


	




}

?>