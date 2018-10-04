<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FansController extends Controller
{
    //
	public function welcomepage(){
		return view("celeluxwelcome");

		/*
			show welcome page
		**/
	}


	public function showsignup(){

		return view("fans.signuppage");

		/*
			show sign up page 
		**/
	}

	public function processsignup(Request $request){
		/*get all request input and store in table object
		$fans_data=new Fans()
		$fans_data->ig_name=$request->input('igname');

		then save the info

		**/
		return redirect('/fans/signupmessage/')->with([
			'return_val'=>$return_id,
			'message'=>"Successfully sign up",
		]);

		

	}

	public function showsignin(){
		return view('fans.signinpage');
		/*
			show sign in page
		**/
	}

	public function processsignin(Request $request){
		$ig_handle=$request->input('textid');
		$fan_password=$request->input('password');


		$this->validate($request,[
			'textid'=>'required',
			'password' =>'required']);

		//save to db

		//show fan page with the name of the fan


		

		return redirect('/fans/page/')->with('return_val',$ig_handle);

	}

	

	public function showsignupmessage(){
		
		
		return view('fans.signupmessage');

		/*
			show signup message after requests have been saved 
			return id immediately after saving requests input
			pass id to the showsignupmessage
			if the id is empty showsignupmessage with error variable saying 404 information
			else
			show signup accurate data with success message saying you should click on your mail to verify sign up
		**/

	}

	public function showauthpage(){
		return view('fans.showauthpage');
	}

	public function showfanpage(){

		//use db to fetch all the details of celebrities
		//send it here
		$fan_details=array([

			'name'=>"chioma",
			'phone'=>"0806045"
		],
		[
			'name'=>"king",
			'phone'=>"0899394"
		]
		);

		return view('fans.page.fandashboard',compact('fan_details',$fan_details));

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