<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Posts extends Controller
{

	public function index(){

		$posts = Http::get("https://gorest.co.in/public-api/posts");
		return view('index', ['posts' => $posts['data']]);

	}

	public function add(){

		//return view('add');

	}

}
