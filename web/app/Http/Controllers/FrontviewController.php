<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontviewController extends Controller
{
   // public function index()
   // {
   //    return view('frontview/pages.home');
   // }

   public function index(Request $request)
   {
      $source = $request->query('source');
      $message = '';
      if ($source == 'facebook') {
         $message = "Assalamualaikum admin, saya dari iklan facebook mau tanya-tanya paket umroh nya bisa?";
      } else if ($source == 'google') {
         $message = "Assalamualaikum admin, saya dari iklan google mau tanya-tanya paket umroh nya bisa?";
      } else {
         $message = "Assalamualaikum Admin, Saya Ingin Tanya-Tanya Paket Umroh Boleh?";
      }

      return view('frontview/pages.home')->with('source', $message);
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

   public function paketUmrohDetailParam($param1)
   {
      $price = null;
      if ($param1 == 'januari') {
         $price = env('PRICE_JAN', '$$$');
      } else if ($param1 == 'februari') {
         $price = env('PRICE_FEB', '$$$');
      } else if ($param1 == 'maret') {
         $price = env('PRICE_MAR', '$$$');
      } else if ($param1 == 'april') {
         $price = env('PRICE_APR', '$$$');
      } else if ($param1 == 'mei') {
         $price = env('PRICE_MEI', '$$$');
      } else if ($param1 == 'juni') {
         $price = env('PRICE_JUN', '$$$');
      } else if ($param1 == 'juli') {
         $price = env('PRICE_JUL', '$$$');
      } else if ($param1 == 'agustus') {
         $price = env('PRICE_AG', '$$$');
      } else if ($param1 == 'september') {
         $price = env('PRICE_SEP', '$$$');
      } else if ($param1 == 'oktober') {
         $price = env('PRICE_OKT', '$$$');
      } else if ($param1 == 'november') {
         $price = env('PRICE_NOV', '$$$');
      } else if ($param1 == 'desember') {
         $price = env('PRICE_DES', '$$$');
      } else {
         $price = '$$$';
      }
      return view('frontview/pages.detail.paket-umroh-detail', ['price' => $price, 'month' => $param1]);
   }

   public function paketUmrohDetail()
   {
      return view('frontview/pages.detail.paket-umroh-detail');
   }
}
