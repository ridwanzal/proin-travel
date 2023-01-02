<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontviewController extends Controller
{
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

      $faqAll = DB::select('select * from faq order BY id DESC');
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
      $documentation = DB::select('select * from dokumentasi order BY id DESC');
      $bonusList = DB::select('select * from bonus_list order BY id ASC');
      $bonusHighlight = DB::select('select * from bonus_highlight ORDER BY id DESC limit 1');
      $testimoni = DB::select('select * from testimoni ORDER BY id ASC');
      $paket = DB::select('select * from paket ORDER BY id DESC');
      return view('frontview/pages.home')->with('source', $message)
         ->with(compact('faqAll'))
         ->with(compact('contacts'))
         ->with(compact('documentation'))
         ->with(compact('bonusList'))
         ->with(compact('bonusHighlight'))
         ->with(compact('paket'))
         ->with(compact('testimoni'));
   }

   public function hajiKhusus()
   {
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
      return view('frontview/pages.haji-khusus')->with(compact('contacts'));
   }

   public function jadiAgen()
   {
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
      return view('frontview/pages.jadi-agen')->with(compact('contacts'));
   }

   public function paketUmroh()
   {
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
      $paket = DB::select('select * from paket ORDER BY id DESC');
      return view('frontview/pages.paket-umroh')->with(compact('paket'))->with(compact('contacts'));
   }

   public function paketUmrohDetailParam($param1)
   {
      $price = null;
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
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
      return view('frontview/pages.detail.paket-umroh-detail', ['price' => $price, 'month' => $param1])->with(compact('contacts'));
   }

   public function paketUmrohDetail()
   {
      $contacts = DB::select('select * from contacts order BY id DESC LIMIT 1');
      return view('frontview/pages.detail.paket-umroh-detail');
   }
}
