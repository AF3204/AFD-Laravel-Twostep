<?php

class TwoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// echo'<pre>';
		$secret=Twostep::generateSecret();
		// echo'Generated Secret: ';
		// var_dump($secret);
	
		$user = Input::get('username');
		// var_dump($user);
		//The user page
		$hostname ='test' ;
		
		// https://github.com/abelorosz/twostep/blob/master/README.md
		
		/* $test2=Twostep::checkCode(code, $secret);
		echo'Check Secret: ';
		var_dump($test2);
		die; */
		
		$nextWeek = floor(time()/30);
		// echo($nextWeek);
		
		$test2=Twostep::getCode($secret, $nextWeek);
		
		$test3=Twostep::checkCode($test2,$secret);
	
		$test4=Twostep::getUrl($user,$hostname,$secret);
		
		//$test4 = '<img alt="abc26666" src="'.$test4.'" />';
		// var_dump($test4);
		// echo $test4;
		// echo '<img src='.$test4.'></img>';
		// echo'</pre>';
		
		if($test3==true)
			{
				return View::make('test',['test4'=>$test4]);
			}
		else{ return Redirect::to('/'); }
		// $data = array($test4);
		/* 
		if($test3==true)
			{
			echo'true';
			//return Redirect::to('imagetest');}
			// {return Redirect::to('imagetest',$data);}
		else
		{echo 'false';}
		 */
		// echo '<img src="data:image/png,' . $test4=Twostep::getUrl($user,$hostname,$secret); . '" alt="qrcode"   />';
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
