<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PostController extends BaseController
{
    
    public function index()
    {
        // return view('admin/posts/index');
        echo 'Index de posts';
    }



    public function show()
    {

    }

    

    public function new()
    {
        return view('admin/posts/create');
    }



    public function create()
    {

    }



    public function edit($id)
    {

    }



    public function update()
    {

    }


    public function delete($id)
    {

    }
}
