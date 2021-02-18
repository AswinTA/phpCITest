<?php namespace App\Controllers;
use App\Models\UserModel;
class UserController extends BaseController
{
	public function index()
	{
		$model = new UserModel();
        $data['user'] = $model->getUser();
		echo view('templates/header');
        echo view('pages/userList',$data);
		echo view('templates/footer');
	}

}
//--------------------------------------------------------------------