<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CtTrucklisting;
use DB;
use App\FooterSetting;
use App\Headersetting;
use App\Pagesetting;

class truckdetails extends Controller {

    public function index($value) {
        $headersetting = DB::table('headersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $footersetting = DB::table('footersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $pagesetting = DB::table('pagesetting')->whereNull('deleted_at')->get();

        $current_id = $value;

        $cttrucklisting = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("cttransmission")->with("horsepower")->with("torque")->with("drivetrain")->with("maxseating")->with("bodytype")->where('id', $value)->whereNull('deleted_at')->get();
        $datavalue = 0;
        foreach ($cttrucklisting as $data) {

            $datavalue = 1;
            $iid = $data->id;
            $ctsubmodels_id = $data->ctsubmodels_id;
        }

        if ($datavalue == 0) {

            $cttrucklisting = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("cttransmission")->with("horsepower")->with("torque")->with("drivetrain")->with("bodytype")->with("maxseating")->where('seo_url', $value)->whereNull('deleted_at')->get();
        }

        foreach ($cttrucklisting as $data) {
            $datavalue = 1;
            $current_id = $iid = $data->id;
            $ctsubmodels_id = $data->ctsubmodels_id;
        }

        /* next truck */

        $resultnext = DB::table('cttrucklisting')->where('id', ">", $current_id)->whereNull('deleted_at')->get();

        if (isset($resultnext)) {

            if (isset($resultnext[0])) {
                
            } else {
                $resultnext = 0;
            }
        }


        /*
          $resultnext = DB::select("SELECT * FROM cttrucklisting WHERE `id` >'".$current_id."' and `status`=1   ORDER BY id LIMIT 1"); */

        if ($resultnext) {
            if ($resultnext[0]->id) {
                $nextpage = $resultnext[0]->id;
            }
        } else {
            $nextpage = 0;
        }
        /* next truck */

        if ($datavalue == 1) {
            /* img */

            $trucklisting_img = DB::table('trucklisting_img')->where('truckid', $iid)->whereNull('deleted_at')->get();

            /* img */
            $ctsubmodels = DB::table('ctsubmodels')->where('id', "=", $ctsubmodels_id)->whereNull('deleted_at')->get();
            if (isset($ctsubmodels[0])) {
                $cttrucklisting->ctsubmodels = $ctsubmodels[0]->submodels;
            } else {
                $cttrucklisting->ctsubmodels = 'N/A';
            }


            $img_arr_small = '';
            $img_arr_large = '';

            require 'Admin/PhotoAlbum/main.php';
            foreach ($cttrucklisting as $row) {

                if ($row->public_id) {

                    $img_arr_small[$row->id] = cl_image_tag($row->public_id, array_merge($thumbs_params, array("width" => 166, "height" => 104, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));

                    $img_arr_large[$row->id] = cl_image_tag($row->public_id, array_merge($thumbs_params, array("width" => 829, "height" => 540, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));
                }
                $fetchData = DB::select('select * from photo_truck where truck_id="' . $row->id . '" order by id desc ');
                foreach ($fetchData as $data) {
                    $all_img_arr_small[$row->id][] = cl_image_tag($data->public_id, array_merge($thumbs_params, array("width" => 166, "height" => 104, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));

                    $all_img_arr_large[$row->id][] = cl_image_tag($data->public_id, array_merge($thumbs_params, array("width" => 829, "height" => 540, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));
                }
            }
            return view('frontend.pages.truck', compact('cttrucklisting', 'headersetting', 'footersetting', 'pagesetting', 'trucklisting_img', 'nextpage', 'img_arr_small', 'img_arr_large', 'all_img_arr_small', 'all_img_arr_large'));
        } else {

            return view('errors.404', compact('headersetting', 'footersetting', 'pagesetting'));
        }
    }

}
