<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function sign_in()
    {
        return view("sign-in");
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function master_fitur_web()
    {
        return view("master_fitur_web.master_fitur_web");
    }

    public function add_master_fitur_web()
    {
        return view('master_fitur_web.add_master_fitur_web');
    }

    public function project()
    {
        return view('create_project.project');
    }

    public function create_project()
    {
        return view('create_project.create_project');
    }

}
