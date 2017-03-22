<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Horsepower;
use App\Http\Requests\CreateHorsepowerRequest;
use App\Http\Requests\UpdateHorsepowerRequest;
use Illuminate\Http\Request;



class HorsepowerController extends Controller {

	/**
	 * Display a listing of horsepower
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $horsepower = Horsepower::all();

		return view('admin.horsepower.index', compact('horsepower'));
	}

	/**
	 * Show the form for creating a new horsepower
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.horsepower.create');
	}

	/**
	 * Store a newly created horsepower in storage.
	 *
     * @param CreateHorsepowerRequest|Request $request
	 */
	public function store(CreateHorsepowerRequest $request)
	{
	    
		Horsepower::create($request->all());

		return redirect()->route(config('quickadmin.route').'.horsepower.index');
	}

	/**
	 * Show the form for editing the specified horsepower.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$horsepower = Horsepower::find($id);
	    
	    
		return view('admin.horsepower.edit', compact('horsepower'));
	}

	/**
	 * Update the specified horsepower in storage.
     * @param UpdateHorsepowerRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHorsepowerRequest $request)
	{
		$horsepower = Horsepower::findOrFail($id);

        

		$horsepower->update($request->all());

		return redirect()->route(config('quickadmin.route').'.horsepower.index');
	}

	/**
	 * Remove the specified horsepower from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Horsepower::destroy($id);

		return redirect()->route(config('quickadmin.route').'.horsepower.index');
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
            Horsepower::destroy($toDelete);
        } else {
            Horsepower::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.horsepower.index');
    }

}
