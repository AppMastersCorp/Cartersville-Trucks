<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CtTrucklisting;
use App\CtMake;

class dashboard extends Controller {

    public function index() {
        $cttrucklisting = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("cttransmission")->orderBy('id', 'desc')->get();

        $ctmake = DB::table('ctmake')->whereNull('deleted_at')->get();
        $ctclientreview = DB::table('ctclientreview')->where('status', 1)->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $usercontact = DB::table('usercontact')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('admin.dashboard', compact('cttrucklisting', 'ctmake', 'ctclientreview', 'usercontact'));
    }

}
