<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctfeatures;
use App\Http\Requests\CreateCtfeaturesRequest;
use App\Http\Requests\UpdateCtfeaturesRequest;
use Illuminate\Http\Request;



class CtfeaturesController extends Controller {

	/**
	 * Display a listing of ctfeatures
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctfeatures = Ctfeatures::all();

		return view('admin.ctfeatures.index', compact('ctfeatures'));
	}

	/**
	 * Show the form for creating a new ctfeatures
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctfeatures.create');
	}

	/**
	 * Store a newly created ctfeatures in storage.
	 *
     * @param CreateCtfeaturesRequest|Request $request
	 */
	public function store(CreateCtfeaturesRequest $request)
	{
	    
		Ctfeatures::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctfeatures.index');
	}

	/**
	 * Show the form for editing the specified ctfeatures.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctfeatures = Ctfeatures::find($id);
	    
	    
		return view('admin.ctfeatures.edit', compact('ctfeatures'));
	}

	/**
	 * Update the specified ctfeatures in storage.
     * @param UpdateCtfeaturesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtfeaturesRequest $request)
	{
		$ctfeatures = Ctfeatures::findOrFail($id);

        

		$ctfeatures->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctfeatures.index');
	}

	/**
	 * Remove the specified ctfeatures from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctfeatures::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctfeatures.index');
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
            Ctfeatures::destroy($toDelete);
        } else {
            Ctfeatures::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctfeatures.index');
    }

}
