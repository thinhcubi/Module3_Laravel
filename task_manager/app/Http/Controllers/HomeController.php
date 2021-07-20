<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        return view('modules.customer.create');
    }
    public function index(){
        return view('modules.customer.index');
    }
    public function show(){
        return view('modules.customer.show');
    }
    public function edit(){

    }
}
