<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return "Hello from index method";
    }

    public function create(){
        return "Hello from create method";
    }

    public function show($curso){
        return "Hello from show method and course is: $curso";
    }
}
