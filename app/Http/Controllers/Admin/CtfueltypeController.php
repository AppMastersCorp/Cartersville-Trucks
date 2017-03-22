<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctfueltype;
use App\Http\Requests\CreateCtfueltypeRequest;
use App\Http\Requests\UpdateCtfueltypeRequest;
use Illuminate\Http\Request;



class CtfueltypeController extends Controller {

	/**
	 * Display a listing of ctfueltype
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctfueltype = Ctfueltype::all();

		return view('admin.ctfueltype.index', compact('ctfueltype'));
	}

	/**
	 * Show the form for creating a new ctfueltype
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctfueltype.create');
	}

	/**
	 * Store a newly created ctfueltype in storage.
	 *
     * @param CreateCtfueltypeRequest|Request $request
	 */
	public function store(CreateCtfueltypeRequest $request)
	{
	    
		Ctfueltype::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctfueltype.index');
	}

	/**
	 * Show the form for editing the specified ctfueltype.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctfueltype = Ctfueltype::find($id);
	    
	    
		return view('admin.ctfueltype.edit', compact('ctfueltype'));
	}

	/**
	 * Update the specified ctfueltype in storage.
     * @param UpdateCtfueltypeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtfueltypeRequest $request)
	{
		$ctfueltype = Ctfueltype::findOrFail($id);

        

		$ctfueltype->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctfueltype.index');
	}

	/**
	 * Remove the specified ctfueltype from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctfueltype::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctfueltype.index');
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
            Ctfueltype::destroy($toDelete);
        } else {
            Ctfueltype::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctfueltype.index');
    }

}
