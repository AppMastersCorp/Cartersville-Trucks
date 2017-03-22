<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\FooterSetting;
use App\Headersetting;
use App\Pagesetting;
use App\Contactsetting;

class contactController extends Controller {

    public function index() {

        /*  $cttrucklisting = DB::table('cttrucklisting')->get(); */
        //$cttrucklisting = DB::table('cttrucklisting')->where('featured','1')->whereNull('deleted_at')->get();

        $contactsetting = DB::table('contactsetting')->get();
        $headersetting = DB::table('headersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $footersetting = DB::table('footersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $pagesetting = DB::table('pagesetting')->whereNull('deleted_at')->get();
        return view('frontend.pages.contact', compact('contactsetting', 'headersetting', 'footersetting', 'pagesetting'));
    }

}
