<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    $trains=Train::where('is_aviable',1)->get();
    // dd($trains);
    
    return view('home',compact('trains'));
   }
}
