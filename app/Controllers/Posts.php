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

    $data['title'] = ucfirst($page); // Capitalize the first letter

    echo view('templates/header', $data);
    echo view('posts/' . $page, $data);
    echo view('templates/footer', $data);
	}
}