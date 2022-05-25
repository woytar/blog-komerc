<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
	{
    if (! is_file(APPPATH . 'Views/posts/' . $page . '.php')) {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }
	//<h1>Blog programistyczny, zastosowanie PHP / CodeIgniter4</h1>
    $data['title'] = ucfirst($page); // Capitalize the first letter

    echo view('templates/header', $data);
    echo view('posts/' . $page, $data);
    echo view('templates/footer', $data);
	}
	
	public function viewfiles() {
		helper('filesystem');
		helper('auth');
		$arr = directory_map('uploads');
		$title = "Lista załadowanych plików";
		
		$data = [
			'arr'  => $arr,
			'title' => $title,

		];
		
		echo view('templates/header');
		echo view('posts/031-read', $data);
		echo view('templates/footer');
	}
	
		public function readEnvVar() {
		$title = "Zmienne odczytane z .env";
		$data = [

			'title' => $title,
			'srodowisko' => getenv('CI_ENVIRONMENT'),
			'any_key' => getenv('ANY_SECRET_KEY'),
		];
		
		echo view('templates/header');
		echo view('posts/041-read-from-env', $data);
		echo view('templates/footer');
	}
		public function readtxt() {
		$title = "Zmienne odczytane z .txt";
		$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
		$txtcontent = fread($myfile,filesize("sample.txt"));
		fclose($myfile);
		$data = [
			'title' => $title,
			'txtcontent' => $txtcontent,
		];
		echo view('templates/header');
		echo view('posts/042-read-from-txt', $data);
		echo view('templates/footer');
	}
}