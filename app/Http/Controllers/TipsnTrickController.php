<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsnTrickController extends Controller
{
    //
    public function GuideToBuy()
	{
		return view('TipsnTrick_GuideToBuy');
	}

	public function Maintanance()
	{
		return view('TipsnTrick_Maintanance');
	}
}
