<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Torque;
use App\Http\Requests\CreateTorqueRequest;
use App\Http\Requests\UpdateTorqueRequest;
use Illuminate\Http\Request;



class TorqueController extends Controller {

	/**
	 * Display a listing of torque
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $torque = Torque::all();

		return view('admin.torque.index', compact('torque'));
	}

	/**
	 * Show the form for creating a new torque
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.torque.create');
	}

	/**
	 * Store a newly created torque in storage.
	 *
     * @param CreateTorqueRequest|Request $request
	 */
	public function store(CreateTorqueRequest $request)
	{
	    
		Torque::create($request->all());

		return redirect()->route(config('quickadmin.route').'.torque.index');
	}

	/**
	 * Show the form for editing the specified torque.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$torque = Torque::find($id);
	    
	    
		return view('admin.torque.edit', compact('torque'));
	}

	/**
	 * Update the specified torque in storage.
     * @param UpdateTorqueRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTorqueRequest $request)
	{
		$torque = Torque::findOrFail($id);

        

		$torque->update($request->all());

		return redirect()->route(config('quickadmin.route').'.torque.index');
	}

	/**
	 * Remove the specified torque from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Torque::destroy($id);

		return redirect()->route(config('quickadmin.route').'.torque.index');
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
            Torque::destroy($toDelete);
        } else {
            Torque::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.torque.index');
    }

}
