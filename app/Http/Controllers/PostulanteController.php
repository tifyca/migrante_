<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostulanteController extends Controller
{
    public function index(){
    	return view('postulante.index');
    }
}
