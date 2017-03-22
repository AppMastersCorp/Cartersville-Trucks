<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MaxSeating;
use App\Http\Requests\CreateMaxSeatingRequest;
use App\Http\Requests\UpdateMaxSeatingRequest;
use Illuminate\Http\Request;



class MaxSeatingController extends Controller {

	/**
	 * Display a listing of maxseating
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $maxseating = MaxSeating::all();

		return view('admin.maxseating.index', compact('maxseating'));
	}

	/**
	 * Show the form for creating a new maxseating
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.maxseating.create');
	}

	/**
	 * Store a newly created maxseating in storage.
	 *
     * @param CreateMaxSeatingRequest|Request $request
	 */
	public function store(CreateMaxSeatingRequest $request)
	{
	    
		MaxSeating::create($request->all());

		return redirect()->route(config('quickadmin.route').'.maxseating.index');
	}

	/**
	 * Show the form for editing the specified maxseating.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$maxseating = MaxSeating::find($id);
	    
	    
		return view('admin.maxseating.edit', compact('maxseating'));
	}

	/**
	 * Update the specified maxseating in storage.
     * @param UpdateMaxSeatingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMaxSeatingRequest $request)
	{
		$maxseating = MaxSeating::findOrFail($id);

        

		$maxseating->update($request->all());

		return redirect()->route(config('quickadmin.route').'.maxseating.index');
	}

	/**
	 * Remove the specified maxseating from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MaxSeating::destroy($id);

		return redirect()->route(config('quickadmin.route').'.maxseating.index');
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
            MaxSeating::destroy($toDelete);
        } else {
            MaxSeating::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.maxseating.index');
    }

}
