<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome to my Blog';
    	return view('pages.index', compact('title'));
    }

    public function about(){
    	$data = 'About Me';
    	return view('pages.about', compact('data'));
    }

    public function services(){
    	$data = [
    		'title' => 'Services',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	];
    	return view('pages.services', compact('data'));
    }
}
