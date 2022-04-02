<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    } 
    public function sample(){
        return view('sample');
    }
    public function contact(){
        return view('contact', ['msg' => 'SVP completer le formulaire']);
    }
    public function contactForm(Request $request){
        //return $request->nom;
         return view('contact', ['data'=> $request,
                                 'msg' => 'Merci d\'avoir completé le formulaire'   
                                 ]);
    }

}
