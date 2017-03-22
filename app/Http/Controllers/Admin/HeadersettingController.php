<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Headersetting;
use App\Http\Requests\CreateHeadersettingRequest;
use App\Http\Requests\UpdateHeadersettingRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class HeadersettingController extends Controller {

	/**
	 * Display a listing of headersetting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $headersetting = Headersetting::all();

		return view('admin.headersetting.index', compact('headersetting'));
	}

	/**
	 * Show the form for creating a new headersetting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.headersetting.create');
	}

	/**
	 * Store a newly created headersetting in storage.
	 *
     * @param CreateHeadersettingRequest|Request $request
	 */
	public function store(CreateHeadersettingRequest $request)
	{
	    $request = $this->saveFiles($request);
		Headersetting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.headersetting.index');
	}

	/**
	 * Show the form for editing the specified headersetting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$headersetting = Headersetting::find($id);
	    
	    
		return view('admin.headersetting.edit', compact('headersetting'));
	}

	/**
	 * Update the specified headersetting in storage.
     * @param UpdateHeadersettingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHeadersettingRequest $request)
	{
		$headersetting = Headersetting::findOrFail($id);

        $request = $this->saveFiles($request);

		$headersetting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.headersetting.index');
	}

	/**
	 * Remove the specified headersetting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Headersetting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.headersetting.index');
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
            Headersetting::destroy($toDelete);
        } else {
            Headersetting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.headersetting.index');
    }

}
