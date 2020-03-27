<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
	{
	    $client = new \GuzzleHttp\Client();
	    $request = $client->get('http://covid19.mathdro.id/api/countries/IN');
	    $response = $request->getBody()->getContents();
	   	$data = json_decode($response, true);
	   	return view('welcome')->with([
	   		'data' => $data
	   	]);
	}
}
