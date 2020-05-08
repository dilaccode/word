<?php namespace App\Controllers;

use App\Models\WordModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new WordModel();
		$data = array(
			'LowSeeWords'=> $model->GetLowSeeWords(),
			'Stats' => $model->GetStats(),
		);

		// print_r($data);die();

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
		// process mean with link
		// $meanArrayRaw=array();
		$meanArrayRaw = explode(" ",$wordObj->mean);
		$meanArrayRawResult = array();
		foreach($meanArrayRaw as $WordRaw){
			$WordRawResult="";
			foreach($wordObj->meanArrayStatus as $WordHaveStatus){
				// check contain
				if(strpos($WordRaw, $WordHaveStatus->word) !== false){
					if($WordHaveStatus->isExist){
						$link = "<a href='/public/home/word/$WordHaveStatus->word'>$WordHaveStatus->word</a>";
						$WordRawResult = str_replace($WordHaveStatus->word,$link,$WordRaw);
					}
				}else{ 
					// skip
				}				
			}
			array_push($meanArrayRawResult,$WordRawResult);
		}
		
		$wordObj->meanWithLinks = implode(" ",$meanArrayRawResult);
		//
		$data= array(
			'wordObj'=> $wordObj,
			'classWordSize'=> $classWordSize,
			'LowSeeWords'=> $model->GetLowSeeWords(3),
			'Stats' => $model->GetStats(),
		);

		// print_r($data);die();
		
		echo view('Header');
		echo view('Word',$data);
		echo view('Footer');
	}
	
}
