<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CtTrucklisting;
use DB;
use App\FooterSetting;
use App\Headersetting;
use App\Pagesetting;
use App\Ctfueltype;

class inventoryController extends Controller {

    //

    public function index() {

        /*  $cttrucklisting = DB::table('cttrucklisting')->get(); */
        //$cttrucklisting = DB::table('cttrucklisting')->where('featured','1')->whereNull('deleted_at')->get();
        /*
          echo "<pre>";
          print_r($_REQUEST);
          echo "</pre>"; /* */

        if (isset($_REQUEST['sortby'])) {

            $sortby = $_REQUEST['sortby'];
            $sortvar = 'price_int';
        } else {

            $sortby = 'desc';
            $sortvar = 'id';
        }
        $val['deleted_at'] = NULL;
        $query = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("enginesize")->with("cttransmission")->where('status', '1')->whereNull('deleted_at');

        if (!empty($_REQUEST['make'][0])) {

            $query = $query->whereIn('ctmake_id', $_REQUEST['make']);
        }
        if (!empty($_REQUEST['year'][0])) {

            $query = $query->whereIn('ctregistered_id', $_REQUEST['year']);
        }
        if (!empty($_REQUEST['type'][0])) {

            $query = $query->whereIn('ctbodystyle_id', $_REQUEST['type']);
        }
        $query = $query->orderBy('' . $sortvar . '', '' . $sortby . '');

        /* $query->get(); */

        $cttrucklisting = $query->paginate(15);
        $headersetting = DB::table('headersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $footersetting = DB::table('footersetting')->where('id', '1')->whereNull('deleted_at')->get();
        $pagesetting = DB::table('pagesetting')->whereNull('deleted_at')->get();
        $ctmake = DB::table('ctmake')->whereNull('deleted_at')->get();
        $ctregistered = DB::table('ctregistered')->whereNull('deleted_at')->get();
        $ctbodystyle = DB::table('ctbodystyle')->whereNull('deleted_at')->get();
        $ctfueltype = DB::table('ctfueltype')->whereNull('deleted_at')->get();
        $ctfeatures = DB::table('ctfeatures')->whereNull('deleted_at')->get();
        $cttransmission = DB::table('cttransmission')->whereNull('deleted_at')->get();
        $ctcolor = DB::table('ctcolor')->whereNull('deleted_at')->get();
        $img_arr_small = '';
        $img_arr_large = '';
        require 'Admin/PhotoAlbum/main.php';
        foreach ($cttrucklisting as $row) {
            if ($row->public_id) {
                $img_arr_small[$row->id] = cl_image_tag($row->public_id, array_merge($thumbs_params, array("width" => 200, "height" => 150, "crop" => "scale", 'html_width' => '', 'html_height' => '', 'class' => 'img-responsive')));

                /* $img_arr_large[$row->id]= cl_image_tag($row->public_id, array_merge($thumbs_params, array("width"=>905,"height"=>700,"crop" => "fill",'html_width' => '','html_height' => '','class'=>'img-responsive' ))); */
            }
        }



        return view('frontend.pages.inventory', compact('cttrucklisting', 'headersetting', 'footersetting', 'pagesetting', 'ctmake', 'ctregistered', 'ctbodystyle', 'ctfueltype', 'ctfeatures', 'cttransmission', 'ctcolor', 'img_arr_small'));
    }

    public function loadMore(Request $request) {

        if (isset($_REQUEST['sortby'])) {

            $sortby = $_REQUEST['sortby'];
            $sortvar = 'price_int';
        } else {

            $sortby = 'desc';
            $sortvar = 'id';
        }


        $val['deleted_at'] = NULL;
        $query = CtTrucklisting::with("ctcondition")->with("ctmake")->with("ctmodels")->with("ctregistered")->with("ctcolor")->with("ctexteriorcolor")->with("ctfueltype")->with("ctbodystyle")->with("enginesize")->with("cttransmission")->where('status', '1')->whereNull('deleted_at');

        if (!empty($_REQUEST['make'][0])) {

            $query = $query->whereIn('ctmake_id', $_REQUEST['make']);
        }

        if (!empty($_REQUEST['year'][0])) {

            $query = $query->whereIn('ctregistered_id', $_REQUEST['year']);
        }

        if (!empty($_REQUEST['type'][0])) {

            $query = $query->whereIn('ctbodystyle_id', $_REQUEST['type']);
        }

        $query = $query->orderBy('' . $sortvar . '', '' . $sortby . '');

        /* $query->get(); */

        $cttrucklisting = $query->paginate(15);
        $listing = '';
        if ($cttrucklisting->count()) {

            foreach ($cttrucklisting as $row) {
                $listing.='<div class="col-md-3 col-sm-6 col-xs-12 clearfix equalheight" style="height: 375px; visibility: visible; animation-name: rotateIn;">';

                $HTTP_HOST = 'http://' . $_SERVER['HTTP_HOST'];

                $listing.='<p class="featured-on-image">';
                if ($row->seo_url != '') {
                    $listing.='<a href="' . $HTTP_HOST . '/truck/' . $row->seo_url . '">';
                } else {

                    $listing.='<a href="' . $HTTP_HOST . '/truck/' . $row->id . '">';
                }

                if ($row->image) {

                    $listing.='<img src="' . $HTTP_HOST . '/public/uploads/thumb/' . $row->image . '">';
                } else {
                    $listing.='<img src="' . $HTTP_HOST . '/images/no_image.png">';
                }

                $listing.='</a>';
                $listing.='</p>';


                $listing.='<div class="feature-information"> <h4 class="featureheading">';

                if (isset($row->ctregistered->year)) {
                    $listing.=" " . $row->ctregistered->year . " ";
                }


                if (isset($row->ctmake->make)) {
                    $listing.=" " . $row->ctmake->make . " ";
                }
                if (isset($row->ctmodels->model)) {
                    $listing.=" " . $row->ctmodels->model . " ";
                }


                $listing.='</h4>
                            <p class="price-dollar"> $ ' . $row->price . '</p>
                            <p class="color-grey-text">
								Mileage: ' . $row->mileage . '<br>
								Engine: - ' . $row->enginesize->engine_size . '<br>';
                $listing.='</p>';


                if ($row->seo_url != '') {
                    $listing.='<a href="' . $HTTP_HOST . '/truck/' . $row->seo_url . '">';
                } else {
                    $listing.='<a href="' . $HTTP_HOST . '/truck/' . $row->id . '">';
                }
                $listing.='<button> details</button>';
                $listing.='</a>

                        </div>
                    </div>';
            }
        }

        $listing2 = '';
        if ($cttrucklisting->count()) {

            foreach ($cttrucklisting as $row) {

                $listing2.='<li class="clearfix">
                            <div class="inventory2 cleaerfix">';


                if ($row->seo_url != '') {

                    $listing2.='<a href="' . $HTTP_HOST . '/truck/' . $row->seo_url . '">';
                } else {

                    $listing2.='<a href="' . $HTTP_HOST . '/truck/' . $row->id . '">';
                }

                if ($row->image) {
                    $listing2.='<img src="' . $HTTP_HOST . '/public/uploads/thumb/' . $row->image . '">';
                } else {
                    $listing2.='<img src="' . $HTTP_HOST . '/images/no_image.png">';
                }

                $listing2.='</a>';

                $listing2.='<div class="clearfix right2">
                                    <h4 class="clearfix">
                                        <span class="pull-left">';

                if (isset($row->ctregistered->year)) {
                    $listing2.=" " . $row->ctregistered->year . " ";
                }

                if (isset($row->ctmake->make)) {
                    $listing2.=" " . $row->ctmake->make . " ";
                }


                if (isset($row->ctmodels->model)) {
                    $listing2.=" " . $row->ctmodels->model . " ";
                }

                if (isset($row->engine_size)) {
                    $listing2.=" " . $row->engine_size . " ";
                }

                $listing2.='</span>';

                $listing2.='<span class="pull-right">$ ' . $row->price . '</span>';

                $listing2.='</h4>
                                    <div class="button-information clearfix">
                                        <p>';

                if ($row->ctmake['make']) {

                    $listing2.='<span>
                                               <i class="fa fa-make" aria-hidden="true"></i><br>
                                               ' . $row->ctmake->make . '
                                            </span>';
                }

                if ($row->ctmodels['model']) {

                    $listing2.='<span>
                                              <i class="fa fa-model" aria-hidden="true"></i>  <br>
                                              ' . $row->ctmodels->model . '
                                            </span>';
                }


                if ($row->ctregistered['year']) {

                    $listing2.='<span>
                                                 <i class="fa fa-year" aria-hidden="true"></i> <br>
                                                ' . $row->ctregistered->year . '
                                            </span>';
                }

                if ($row->enginesize) {

                    $listing2.='<span>
                                                <i class="fa fa-enginesize" aria-hidden="true"></i><br>
                                               ' . $row->enginesize->engine_size . '
                                            </span>';
                }

                if ($row->mileage) {
                    $listing2.='<span>
                                               <i class="fa fa-mileage" aria-hidden="true"></i> <br>
                                               ' . $row->mileage . '
                                            </span>';
                }

                $listing2.= '</p>';


                $listing2.='<div class="clearfix inventorybutton">';

                if ($row->seo_url != '') {

                    $listing2.='<a href="' . $HTTP_HOST . '/truck/' . $row->seo_url . '">';
                } else {
                    $listing2.='<a href="' . $HTTP_HOST . '/truck/' . $row->id . '">';
                }

                $listing2.='<button>details</button></a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>';
            }
        }



        /*         * *************** */



        $output[0] = $listing;
        $output[1] = $listing2;

        echo json_encode($output);
    }

    public function postinventory(Request $request) {
        
    }

}
