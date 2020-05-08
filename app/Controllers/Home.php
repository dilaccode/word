<?php namespace App\Controllers;

use App\Models\WordModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new WordModel();
		$data = array(
			'LowSeeWords'=> $model->GetLowSeeWords(),
		);

		echo view('Header');
		echo view('Home',$data);
		echo view('Footer');
	}

	public function word($word='empty')
	{
		$model = new WordModel();
		$data= array(
			'wordObj'=> $model->GetWord($word),
		);
		
		echo view('Header');
		echo view('Word',$data);
		echo view('Footer');
	}
	
}
