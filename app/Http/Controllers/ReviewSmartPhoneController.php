<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewSmartPhoneController extends Controller
{
    //
    public function Review_Smartphone()
	{
		return view('review_smartphone');
	}

	public function Review_IphoneX()
	{
		return view('review_smartphone_iphoneX');
	}

	public function Review_Samsung()
	{
		return view('review_smartphone_galaxyS8');
	}

	public function Review_Lumia()
	{
		return view('review_smartphone_lumia');
	}


}
