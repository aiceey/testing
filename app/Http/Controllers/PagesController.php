<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
       return view('welcome')->with([
        'foo' => 'First',
        'tasks' => ['some task']
    ]);

   }

   public function about(){
       return view('about');
   }
   public function contact(){
    return view('contact');
   }

}
