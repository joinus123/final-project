<?php
namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage.home');
    }
    public function abc()
    {
        dd("aaaaaaaabccccccc");
    }
}
