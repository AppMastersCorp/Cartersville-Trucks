<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Suffix;
use App\Http\Requests\CreateSuffixRequest;
use App\Http\Requests\UpdateSuffixRequest;
use Illuminate\Http\Request;



class SuffixController extends Controller {

	/**
	 * Display a listing of suffix
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $suffix = Suffix::all();
		  

		return view('admin.suffix.index', compact('suffix'));
	}

	/**
	 * Show the form for creating a new suffix
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.suffix.create');
	}

	/**
	 * Store a newly created suffix in storage.
	 *
     * @param CreateSuffixRequest|Request $request
	 */
	public function store(CreateSuffixRequest $request)
	{
	    
		Suffix::create($request->all());

		return redirect()->route(config('quickadmin.route').'.suffix.index');
	}

	/**
	 * Show the form for editing the specified suffix.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$suffix = Suffix::find($id);
	    
	    
		return view('admin.suffix.edit', compact('suffix'));
	}

	/**
	 * Update the specified suffix in storage.
     * @param UpdateSuffixRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSuffixRequest $request)
	{
		$suffix = Suffix::findOrFail($id);

        

		$suffix->update($request->all());

		return redirect()->route(config('quickadmin.route').'.suffix.index');
	}

	/**
	 * Remove the specified suffix from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Suffix::destroy($id);

		return redirect()->route(config('quickadmin.route').'.suffix.index');
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
            Suffix::destroy($toDelete);
        } else {
            Suffix::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.suffix.index');
    }

}
