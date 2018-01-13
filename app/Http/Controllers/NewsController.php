<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function News()
	{
		return view('news');
	}

	public function News_Razer()
	{
		return view('news_smartphone_razerPhone');
	}

	public function News_Xiaomi()
	{
		return view('news_smartphone_xiaoMi4A');
	}

	public function News_IphoneX()
	{
		return view('news_smartphone_iphoneX');
	}
}
