<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctsubmodels;
use App\Http\Requests\CreateCtsubmodelsRequest;
use App\Http\Requests\UpdateCtsubmodelsRequest;
use Illuminate\Http\Request;

use App\CtModels;
use DB;


class CtsubmodelsController extends Controller {

	/**
	 * Display a listing of ctsubmodels
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctsubmodels = Ctsubmodels::with("ctmodels")->get();

		
foreach($ctsubmodels as $ctsubmodel){		
 $ctmodel_id=$ctsubmodel->ctmodel_id;
 $modelid=DB::table('ctmodels')->Where('id', $ctmodel_id)->limit(1)->get();
 
$models=$modelid[0]->model;
$ctsubmodel->ctmodels= $models;

$submodel_make=$ctsubmodel->submodel_make;
$makeid=DB::table('ctmake')->Where('id', $submodel_make)->limit(1)->get();
$makeid=$makeid[0]->make;
$ctsubmodel->make= $makeid;
 

 
}
 

 
 
		
		return view('admin.ctsubmodels.index', compact('ctsubmodels'));
	}

	/**
	 * Show the form for creating a new ctsubmodels
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    

		$ctmake =   DB::table('ctmake')->whereNull('deleted_at')->get();
		$ctmodels =   DB::table('ctmodels')->whereNull('deleted_at')->get(); 
	    
	    return view('admin.ctsubmodels.create', compact("ctmodels","ctmake"));
	}

	/**
	 * Store a newly created ctsubmodels in storage.
	 *
     * @param CreateCtsubmodelsRequest|Request $request
	 */
	public function store(CreateCtsubmodelsRequest $request)
	{
	    
		Ctsubmodels::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctsubmodels.index');
	}

	/**
	 * Show the form for editing the specified ctsubmodels.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctsubmodels = Ctsubmodels::find($id);
		$ctmake =   DB::table('ctmake')->whereNull('deleted_at')->get();
		$ctmodels =   DB::table('ctmodels')->whereNull('deleted_at')->get(); 
 

		
		return view('admin.ctsubmodels.edit', compact('ctsubmodels', "ctmake","ctmodels"));
	}

	/**
	 * Update the specified ctsubmodels in storage.
     * @param UpdateCtsubmodelsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtsubmodelsRequest $request)
	{
		$ctsubmodels = Ctsubmodels::findOrFail($id);

        

		$ctsubmodels->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctsubmodels.index');
	}

	/**
	 * Remove the specified ctsubmodels from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctsubmodels::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctsubmodels.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Ctsubmodels::destroy($toDelete);
        } else {
            Ctsubmodels::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctsubmodels.index');
    }

}
