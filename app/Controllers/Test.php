<?php namespace App\Controllers;

class Test extends BaseController
{
	public function index()
	{
		return 'Inside Test controller';
	}

	public function showme($page = 'home')
{

	// for error handling
	if(!is_file(APPPATH.'views/pages/'.$page.'.php')){
		// throw error
		throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
	}
	echo view('templates/header');
	echo view('pages/'.$page);
	echo view('templates/footer');
	
}
}
//--------------------------------------------------------------------