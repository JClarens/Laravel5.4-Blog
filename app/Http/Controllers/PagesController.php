<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.welcome')->withPostspagecontroller($posts);
    }
    public function getAbout(){
        $first= 'Jay';
        $last= 'Clarens';
        $full= $first . " " . $last;
        $email='Clarens.Jay@gmail.com';
        $phone='+6287868528695';
        return view('pages.about',compact('full','email','phone'));
    }
    
    public function getContact(){
        return view('pages.contact');
    }    
}
