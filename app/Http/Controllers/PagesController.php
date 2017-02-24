<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.welcome');
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
