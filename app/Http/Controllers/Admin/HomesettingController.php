<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Homesetting;
use App\Http\Requests\CreateHomesettingRequest;
use App\Http\Requests\UpdateHomesettingRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class HomesettingController extends Controller {

	/**
	 * Display a listing of homesetting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $homesetting = Homesetting::all();

		return view('admin.homesetting.index', compact('homesetting'));
	}

	/**
	 * Show the form for creating a new homesetting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.homesetting.create');
	}

	/**
	 * Store a newly created homesetting in storage.
	 *
     * @param CreateHomesettingRequest|Request $request
	 */
	public function store(CreateHomesettingRequest $request)
	{
	    $request = $this->saveFiles($request);
		Homesetting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.homesetting.index');
	}

	/**
	 * Show the form for editing the specified homesetting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$homesetting = Homesetting::find($id);
	    
	    
		return view('admin.homesetting.edit', compact('homesetting'));
	}

	/**
	 * Update the specified homesetting in storage.
     * @param UpdateHomesettingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHomesettingRequest $request)
	{
		$homesetting = Homesetting::findOrFail($id);

        $request = $this->saveFiles($request);

		$homesetting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.homesetting.index');
	}

	/**
	 * Remove the specified homesetting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Homesetting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.homesetting.index');
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
            Homesetting::destroy($toDelete);
        } else {
            Homesetting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.homesetting.index');
    }

}
