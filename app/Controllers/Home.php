<?php namespace App\Controllers;

use App\Models\WordModel;

class Home extends BaseController
{
	public function index()
	{
		echo view('Header');
		echo view('Home');
		echo view('Footer');

		$model = new WordModel();
		var_dump($model->getWords());
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
