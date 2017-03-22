<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\EngineSize;
use App\Http\Requests\CreateEngineSizeRequest;
use App\Http\Requests\UpdateEngineSizeRequest;
use Illuminate\Http\Request;



class EngineSizeController extends Controller {

	/**
	 * Display a listing of enginesize
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $enginesize = EngineSize::all();

		return view('admin.enginesize.index', compact('enginesize'));
	}

	/**
	 * Show the form for creating a new enginesize
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.enginesize.create');
	}

	/**
	 * Store a newly created enginesize in storage.
	 *
     * @param CreateEngineSizeRequest|Request $request
	 */
	public function store(CreateEngineSizeRequest $request)
	{
	    
		EngineSize::create($request->all());

		return redirect()->route(config('quickadmin.route').'.enginesize.index');
	}

	/**
	 * Show the form for editing the specified enginesize.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$enginesize = EngineSize::find($id);
	    
	    
		return view('admin.enginesize.edit', compact('enginesize'));
	}

	/**
	 * Update the specified enginesize in storage.
     * @param UpdateEngineSizeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateEngineSizeRequest $request)
	{
		$enginesize = EngineSize::findOrFail($id);

        

		$enginesize->update($request->all());

		return redirect()->route(config('quickadmin.route').'.enginesize.index');
	}

	/**
	 * Remove the specified enginesize from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		EngineSize::destroy($id);

		return redirect()->route(config('quickadmin.route').'.enginesize.index');
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
            EngineSize::destroy($toDelete);
        } else {
            EngineSize::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.enginesize.index');
    }

}
