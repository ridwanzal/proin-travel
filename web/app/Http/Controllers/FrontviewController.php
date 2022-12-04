<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontviewController extends Controller
{
   public function index()
   {
      return view('frontview/pages.home');
   }

   public function products()
   {
      return view('frontview/pages.products');
   }

   public function about()
   {
      return view('frontview/pages.story');
   }

   public function sources()
   {
      return view('frontview/pages.sources');
   }

   public function facilities()
   {
      return view('frontview/pages.facilities');
   }

   public function contact()
   {
      return view('frontview/pages.contact');
   }
}
