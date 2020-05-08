<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Header');
		echo view('Home');
		echo view('Footer');
	}

	public function word($word='empty')
	{
		$data= array(
			'word'=>$word,
		);
		echo view('Header');
		echo view('Word',$data);
		echo view('Footer');
	}
	
}
