<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackviewController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('/backview/paket');
        } else {
            return view('backview/pages.login');
        }
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/backview/paket');
        }

        return back()->with('error', 'We have received your message and would like to thank you for writing to us.');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('backview/pages.dashboard');
        } else {
            return view('backview/pages.login');
        }
    }

    public function kontak()
    {
        if (Auth::check()) {
            $kontakAll = DB::select('select * from contacts order BY id DESC limit 1');
            return view('backview/pages.kontak')->with(compact('kontakAll'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function bonus()
    {
        if (Auth::check()) {
            $bonusList = DB::select('select * from bonus_list');
            $bonusHighlight = DB::select('select * from bonus_highlight order BY id DESC limit 1');
            return view('backview/pages.bonus')
                ->with(compact('bonusList'))
                ->with(compact('bonusHighlight'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function bonusedit($id)
    {
        $bonusAll =  DB::select("SELECT * FROM bonus_list where id = $id");
        return view('backview/pages.bonusedit')->with(compact('bonusAll'));
    }

    public function faq()
    {
        if (Auth::check()) {
            $dataFaq = DB::select('SELECT * FROM faq order by id DESC');
            return view('backview/pages.faq')->with(compact('dataFaq'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function faqedit($id)
    {
        $faqAll =  DB::select("SELECT * FROM faq where id = $id");
        return view('backview/pages.faqedit')->with(compact('faqAll'));
    }

    public function paket()
    {
        if (Auth::check()) {
            $paketAll = DB::select('select * from paket order BY id DESC');
            return view('backview/pages.paket')->with(compact('paketAll'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function paketedit($id)
    {
        $paketAll =  DB::select("SELECT * FROM paket where id = $id");
        return view('backview/pages.paketedit')->with(compact('paketAll'));
    }

    public function testimoni()
    {
        if (Auth::check()) {
            $testimoni = DB::select('select * from testimoni order BY id DESC');
            return view('backview/pages.testimoni')->with(compact('testimoni'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function testimoniedit($id)
    {
        $testimoni =  DB::select("SELECT * FROM testimoni where id = $id");
        return view('backview/pages.testimoniedit')->with(compact('testimoni'));
    }

    public function dokumentasi()
    {
        if (Auth::check()) {
            $dokumentasi = DB::select('select * from dokumentasi order BY id DESC');
            return view('backview/pages.dokumentasi')->with(compact('dokumentasi'));
        } else {
            return view('backview/pages.login');
        }
    }

    public function daftaragen()
    {
        if (Auth::check()) {
            $daftaragen = DB::select('select * from daftar_agen order BY id DESC');
            $statusForm = DB::select('select * from cta_update where id_type = 1');
            return view('backview/pages.daftaragen')->with(compact('daftaragen'))->with(compact('statusForm'));
        }else{
            return view('backview/pages.login');
        }
    }

    public function daftarhaji()
    {
        if(Auth::check()){
            $daftarhaji = DB::select('select * from daftar_haji order BY id DESC');
            $statusForm = DB::select('select * from cta_update where id_type = 2');
            return view('backview/pages.daftarhaji')->with(compact('daftarhaji'))->with(compact('statusForm'));
        }else {
            return view('backview/pages.login');
        }
    }

    public function upagencta(Request $request)
    {
        $id = $request->id_type;
        DB::table('cta_update')->where('id_type', $id)
        ->update([
                'type' => $request->type
            ]);
        return redirect('/backview/daftaragen')
            ->with('success', 'You have successfully updated data');
    }

    public function uphajicta(Request $request)
    {
        $id = $request->id_type;
        DB::table('cta_update')->where('id_type', $id)
        ->update([
                'type' => $request->type
            ]);
        return redirect('/backview/daftarhaji')
            ->with('success', 'You have successfully updated data');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
