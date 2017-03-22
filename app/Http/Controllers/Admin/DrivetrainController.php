<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Drivetrain;
use App\Http\Requests\CreateDrivetrainRequest;
use App\Http\Requests\UpdateDrivetrainRequest;
use Illuminate\Http\Request;



class DrivetrainController extends Controller {

	/**
	 * Display a listing of drivetrain
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $drivetrain = Drivetrain::all();

		return view('admin.drivetrain.index', compact('drivetrain'));
	}

	/**
	 * Show the form for creating a new drivetrain
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.drivetrain.create');
	}

	/**
	 * Store a newly created drivetrain in storage.
	 *
     * @param CreateDrivetrainRequest|Request $request
	 */
	public function store(CreateDrivetrainRequest $request)
	{
	    
		Drivetrain::create($request->all());

		return redirect()->route(config('quickadmin.route').'.drivetrain.index');
	}

	/**
	 * Show the form for editing the specified drivetrain.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$drivetrain = Drivetrain::find($id);
	    
	    
		return view('admin.drivetrain.edit', compact('drivetrain'));
	}

	/**
	 * Update the specified drivetrain in storage.
     * @param UpdateDrivetrainRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDrivetrainRequest $request)
	{
		$drivetrain = Drivetrain::findOrFail($id);

        

		$drivetrain->update($request->all());

		return redirect()->route(config('quickadmin.route').'.drivetrain.index');
	}

	/**
	 * Remove the specified drivetrain from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Drivetrain::destroy($id);

		return redirect()->route(config('quickadmin.route').'.drivetrain.index');
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
            Drivetrain::destroy($toDelete);
        } else {
            Drivetrain::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.drivetrain.index');
    }

}
