<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Put here the actions.
    public function index() {
        $title = "Welcome to Laravel Framework!";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function Home() {
        return view('pages.home');
    }
    public function About() {
        return view('pages.about');
    }
    public function Services() {
        $data = array(
            'title' => 'Welcome to Services Page!',
            'heading' => "this is the service",
            'webdesign' => ['php', 'js', 'python']
        );

        return view('pages.services')->with($data);
    }

    public function signup() {
        return view('pages.signup');
    }
    public function login() {
        return view('pages.login');
    }
}
