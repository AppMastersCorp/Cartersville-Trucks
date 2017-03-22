<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ourteam;
use App\Http\Requests\CreateOurteamRequest;
use App\Http\Requests\UpdateOurteamRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class OurteamController extends Controller {

	/**
	 * Display a listing of ourteam
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ourteam = Ourteam::all();

		return view('admin.ourteam.index', compact('ourteam'));
	}

	/**
	 * Show the form for creating a new ourteam
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ourteam.create');
	}

	/**
	 * Store a newly created ourteam in storage.
	 *
     * @param CreateOurteamRequest|Request $request
	 */
	public function store(CreateOurteamRequest $request)
	{
	    $request = $this->saveFiles($request);
		Ourteam::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ourteam.index');
	}

	/**
	 * Show the form for editing the specified ourteam.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ourteam = Ourteam::find($id);
	    
	    
		return view('admin.ourteam.edit', compact('ourteam'));
	}

	/**
	 * Update the specified ourteam in storage.
     * @param UpdateOurteamRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOurteamRequest $request)
	{
		$ourteam = Ourteam::findOrFail($id);

        $request = $this->saveFiles($request);

		$ourteam->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ourteam.index');
	}

	/**
	 * Remove the specified ourteam from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ourteam::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ourteam.index');
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
            Ourteam::destroy($toDelete);
        } else {
            Ourteam::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ourteam.index');
    }

}
