<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class clo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
		$response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=1c2ac73708e9cbf45fdd7dda8c396412&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&pag');
		$responseBody = $response->getBody()->getContents();
		$apiResponse = json_decode($responseBody, true);
		
		echo '<h3 align="center">Enterprise Aplication INtegraton</h3>
			  <p align="center"> the moviedb.org API Integration using Laravel </p>
		';
		
		foreach ($apiResponse['results'] as $res)
			{
			echo "<p align='center'>". $res['title'] ."</p><br>";
			};
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
