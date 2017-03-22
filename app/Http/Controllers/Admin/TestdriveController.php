<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\TestDrive;
use App\Http\Requests\CreateTestDriveRequest;
use App\Http\Requests\UpdateTestDriveRequest;
use Illuminate\Http\Request;



class TestdriveController extends Controller {

	/**
	 * Display a listing of testdrive
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $testdrive = TestDrive::all();

		return view('admin.testdrive.index', compact('testdrive'));
	}

	/**
	 * Show the form for creating a new testdrive
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.testdrive.create');
	}

	/**
	 * Store a newly created testdrive in storage.
	 *
     * @param CreateTestDriveRequest|Request $request
	 */
	public function store(CreateTestDriveRequest $request)
	{
	    
		TestDrive::create($request->all());

		return redirect()->route(config('quickadmin.route').'.testdrive.index');
	}

	/**
	 * Show the form for editing the specified testdrive.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$testdrive = TestDrive::find($id);
	    
	    
		return view('admin.testdrive.edit', compact('testdrive'));
	}

	/**
	 * Update the specified testdrive in storage.
     * @param UpdateTestDriveRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTestDriveRequest $request)
	{
		$testdrive = TestDrive::findOrFail($id);

        

		$testdrive->update($request->all());

		return redirect()->route(config('quickadmin.route').'.testdrive.index');
	}

	/**
	 * Remove the specified testdrive from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		TestDrive::destroy($id);

		return redirect()->route(config('quickadmin.route').'.testdrive.index');
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
            TestDrive::destroy($toDelete);
        } else {
            TestDrive::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.testdrive.index');
    }

}
