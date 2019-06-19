<?php

namespace Pms\Http\Controllers;

use Illuminate\Http\Request;

use Pms\Http\Requests;
use Pms\Http\Controllers\Controller;

class HomeController extends Controller
{
	/**
	 * Displays the index page of the app
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}
}
