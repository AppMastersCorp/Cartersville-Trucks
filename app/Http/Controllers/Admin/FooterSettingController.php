<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FooterSetting;
use App\Http\Requests\CreateFooterSettingRequest;
use App\Http\Requests\UpdateFooterSettingRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class FooterSettingController extends Controller {

	/**
	 * Display a listing of footersetting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $footersetting = FooterSetting::all();

		return view('admin.footersetting.index', compact('footersetting'));
	}

	/**
	 * Show the form for creating a new footersetting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.footersetting.create');
	}

	/**
	 * Store a newly created footersetting in storage.
	 *
     * @param CreateFooterSettingRequest|Request $request
	 */
	public function store(CreateFooterSettingRequest $request)
	{
	    $request = $this->saveFiles($request);
		FooterSetting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.footersetting.index');
	}

	/**
	 * Show the form for editing the specified footersetting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$footersetting = FooterSetting::find($id);
	    
	    
		return view('admin.footersetting.edit', compact('footersetting'));
	}

	/**
	 * Update the specified footersetting in storage.
     * @param UpdateFooterSettingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFooterSettingRequest $request)
	{
		$footersetting = FooterSetting::findOrFail($id);

        $request = $this->saveFiles($request);

		$footersetting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.footersetting.index');
	}

	/**
	 * Remove the specified footersetting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FooterSetting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.footersetting.index');
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
            FooterSetting::destroy($toDelete);
        } else {
            FooterSetting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.footersetting.index');
    }

}
