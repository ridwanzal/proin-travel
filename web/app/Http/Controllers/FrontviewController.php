<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontviewController extends Controller
{
   public function index()
   {
      return view('frontview/pages.home');
   }

   public function hajiKhusus()
   {
      return view('frontview/pages.haji-khusus');
   }

   public function jadiAgen()
   {
      return view('frontview/pages.jadi-agen');
   }

   public function paketUmroh()
   {
      return view('frontview/pages.paket-umroh');
   }

   public function paketUmrohDetail()
   {
      return view('frontview/pages.detail.paket-umroh-detail');
   }
}
