<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctregistered;
use App\Http\Requests\CreateCtregisteredRequest;
use App\Http\Requests\UpdateCtregisteredRequest;
use Illuminate\Http\Request;



class CtregisteredController extends Controller {

	/**
	 * Display a listing of ctregistered
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctregistered = Ctregistered::all();

		return view('admin.ctregistered.index', compact('ctregistered'));
	}

	/**
	 * Show the form for creating a new ctregistered
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctregistered.create');
	}

	/**
	 * Store a newly created ctregistered in storage.
	 *
     * @param CreateCtregisteredRequest|Request $request
	 */
	public function store(CreateCtregisteredRequest $request)
	{
	    
		Ctregistered::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctregistered.index');
	}

	/**
	 * Show the form for editing the specified ctregistered.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctregistered = Ctregistered::find($id);
	    
	    
		return view('admin.ctregistered.edit', compact('ctregistered'));
	}

	/**
	 * Update the specified ctregistered in storage.
     * @param UpdateCtregisteredRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtregisteredRequest $request)
	{
		$ctregistered = Ctregistered::findOrFail($id);

        

		$ctregistered->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctregistered.index');
	}

	/**
	 * Remove the specified ctregistered from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctregistered::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctregistered.index');
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
            Ctregistered::destroy($toDelete);
        } else {
            Ctregistered::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctregistered.index');
    }

}
