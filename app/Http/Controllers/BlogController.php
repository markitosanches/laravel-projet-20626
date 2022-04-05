<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function testConnection(){
        $con = DB::connection()->getPdo();
            if($con){
                return "connecté à la base de donnée ".DB::connection()->getDatabaseName();
            }else{
                return "No n'est pas connecté ! :(";
            }
    }
}
