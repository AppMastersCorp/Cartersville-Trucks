<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctcondition;
use App\Http\Requests\CreateCtconditionRequest;
use App\Http\Requests\UpdateCtconditionRequest;
use Illuminate\Http\Request;



class CtconditionController extends Controller {

	/**
	 * Display a listing of ctcondition
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctcondition = Ctcondition::all();

		return view('admin.ctcondition.index', compact('ctcondition'));
	}

	/**
	 * Show the form for creating a new ctcondition
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctcondition.create');
	}

	/**
	 * Store a newly created ctcondition in storage.
	 *
     * @param CreateCtconditionRequest|Request $request
	 */
	public function store(CreateCtconditionRequest $request)
	{
	    
		Ctcondition::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctcondition.index');
	}

	/**
	 * Show the form for editing the specified ctcondition.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctcondition = Ctcondition::find($id);
	    
	    
		return view('admin.ctcondition.edit', compact('ctcondition'));
	}

	/**
	 * Update the specified ctcondition in storage.
     * @param UpdateCtconditionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtconditionRequest $request)
	{
		$ctcondition = Ctcondition::findOrFail($id);

        

		$ctcondition->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctcondition.index');
	}

	/**
	 * Remove the specified ctcondition from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctcondition::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctcondition.index');
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
            Ctcondition::destroy($toDelete);
        } else {
            Ctcondition::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctcondition.index');
    }

}
