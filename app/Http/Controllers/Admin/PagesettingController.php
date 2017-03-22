<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Pagesetting;
use App\Http\Requests\CreatePagesettingRequest;
use App\Http\Requests\UpdatePagesettingRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class PagesettingController extends Controller {

	/**
	 * Display a listing of pagesetting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $pagesetting = Pagesetting::all();

		return view('admin.pagesetting.index', compact('pagesetting'));
	}

	/**
	 * Show the form for creating a new pagesetting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.pagesetting.create');
	}

	/**
	 * Store a newly created pagesetting in storage.
	 *
     * @param CreatePagesettingRequest|Request $request
	 */
	public function store(CreatePagesettingRequest $request)
	{
	    $request = $this->saveFiles($request);
		Pagesetting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.pagesetting.index');
	}

	/**
	 * Show the form for editing the specified pagesetting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$pagesetting = Pagesetting::find($id);
	    
	    
		return view('admin.pagesetting.edit', compact('pagesetting'));
	}

	/**
	 * Update the specified pagesetting in storage.
     * @param UpdatePagesettingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePagesettingRequest $request)
	{
		$pagesetting = Pagesetting::findOrFail($id);

        $request = $this->saveFiles($request);

		$pagesetting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.pagesetting.index');
	}

	/**
	 * Remove the specified pagesetting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Pagesetting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.pagesetting.index');
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
            Pagesetting::destroy($toDelete);
        } else {
            Pagesetting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.pagesetting.index');
    }

}
