<?php

namespace App\Http\Controllers;
use App\Controllers;

/**
 * 
 */
class CelebController extends Controller
{
	
	

	public function showcelebindex(){
		return view('celeb.celebindex'); 

		/*
			show index page
		**/
	}

	public function showcelebsignin(){
		return view('celeb.signinpage');

		/*
		1. show sign in page for celeb

		**/
	}

	public function showuploads($celeb_id){
		
		return view('celeb.showuploads',compact('celeb_id'));

		/*
			1. show the uploads done by celeb_id with the status of the uploads
			2. display on view with buttons on relevant information based on status

		**/
	}

	public function showlivebids($celeb_id){
		return view('celeb.showlivebids',compact('celeb_id'));
		/*

			1. show live bids concerning the celeb_id
			2. this is shown from only the table celeb_luxury_bidtb which is joined with celeb_luxurytb to show live bids concerning celeb_id
			3.also joined with fan_signuptb to show the details of the fans doing the live bids
		**/



	}

	public function uploadluxuryform($celeb_id){
		return view('celeb.showuploadform',compact('celeb_id'));

		/*
			show form for upload, then the request input will save in celeb_luxurytb with the id; celeb_id
		**/

	}

	public function showfananalytics($celeb_id){
		return view('celeb.fananalyticspage',compact('celeb_id'));

		/*

			1. pull only the fans data that bid the maximum when the time of bid elapsed for all the item celeb_id 

			2. DB::table('celeb_luxury_bidtb') 
				-> join('fan_signuptb') to pull fan details
				->join('celeb_luxurytb')  to show for only the celeb_id
				->where('celeb_luxury_bidtb.celeb_id','celeb_luxurytb.celeb_id')

			3. push the data to view

		**/
	}


}

?>