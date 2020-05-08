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
		$wordObj =  $model->GetWord($word);
		$len = strlen($wordObj->word);
		$classWordSize = 'w3-jumbo';
		if($len>=7) $classWordSize = 'w3-xxxlarge';
		if($len>=10) $classWordSize = 'w3-xxlarge';
		if($len>=13) $classWordSize = 'w3-xlarge';
		$data= array(
			'wordObj'=> $wordObj,
			'classWordSize'=> $classWordSize,
		);
		
		echo view('Header');
		echo view('Word',$data);
		echo view('Footer');
	}
	
}
