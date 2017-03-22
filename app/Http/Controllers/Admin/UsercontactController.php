<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Usercontact;
use App\Http\Requests\CreateUsercontactRequest;
use App\Http\Requests\UpdateUsercontactRequest;
use Illuminate\Http\Request;



class UsercontactController extends Controller {

	/**
	 * Display a listing of usercontact
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $usercontact = Usercontact::all();

		return view('admin.usercontact.index', compact('usercontact'));
	}

	/**
	 * Show the form for creating a new usercontact
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.usercontact.create');
	}

	/**
	 * Store a newly created usercontact in storage.
	 *
     * @param CreateUsercontactRequest|Request $request
	 */
	public function store(CreateUsercontactRequest $request)
	{
	    
		Usercontact::create($request->all());

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
	}

	/**
	 * Show the form for editing the specified usercontact.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$usercontact = Usercontact::find($id);
	    
	    
		return view('admin.usercontact.edit', compact('usercontact'));
	}

	/**
	 * Update the specified usercontact in storage.
     * @param UpdateUsercontactRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateUsercontactRequest $request)
	{
		$usercontact = Usercontact::findOrFail($id);

        

		$usercontact->update($request->all());

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
	}

	/**
	 * Remove the specified usercontact from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Usercontact::destroy($id);

		return redirect()->route(config('quickadmin.route').'.usercontact.index');
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
            Usercontact::destroy($toDelete);
        } else {
            Usercontact::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.usercontact.index');
    }

}
