<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CtTrucklisting;
use DB;
use App\Content;
use App\CtClientReview;
use App\Homesetting;
use App\FooterSetting;
use App\Headersetting;
use App\Pagesetting;

class homeController extends Controller {
    public function index() {

        /*  $cttrucklisting = DB::table('cttrucklisting')->get(); */
        //$cttrucklisting = DB::table('cttrucklisting')->where('featured','1')->whereNull('deleted_at')->get();

        $cttrucklisting = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("cttransmission")->with("enginesize")->where('status', '1')->where('featured', '1')->whereNull('deleted_at')->get();

        $show_gallery = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("cttransmission")->where('show_gallery', '1')->whereNull('deleted_at')->get();
        $why_choose = DB::table('homesetting')->where('id', '1')->whereNull('deleted_at')->get();
        $clientReviews = CtClientReview::where('status', '1')->whereNull('deleted_at')->get();
        $headersetting = DB::table('headersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $footersetting = DB::table('footersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $pagesetting = DB::table('pagesetting')->whereNull('deleted_at')->get();
        $img_arr_small = '';
        $img_arr_large = '';
        require 'Admin/PhotoAlbum/main.php';
        foreach ($cttrucklisting as $row) {

            if ($row->public_id) {
                $img_arr_small[$row->id] = cl_image_tag($row->public_id, array_merge($thumbs_params, array("width" => 200, "height" => 150, "crop" => "scale", 'html_width' => '', 'html_height' => '')));

                $img_arr_large[$row->id] = cl_image_tag($row->public_id, array_merge($thumbs_params, array("width" => 905, "height" => 700, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));
            }
        }
        return view('frontend.pages.home', compact('cttrucklisting', 'why_choose', 'clientReviews', 'headersetting', 'footersetting', 'pagesetting', 'show_gallery', 'img_arr_small', 'img_arr_large'));
    }

}
