<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\PageSettting;
use App\Http\Requests\CreatePageSetttingRequest;
use App\Http\Requests\UpdatePageSetttingRequest;
use Illuminate\Http\Request;



class PageSetttingController extends Controller {

	/**
	 * Display a listing of pagesettting
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $pagesettting = PageSettting::all();

		return view('admin.pagesettting.index', compact('pagesettting'));
	}

	/**
	 * Show the form for creating a new pagesettting
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.pagesettting.create');
	}

	/**
	 * Store a newly created pagesettting in storage.
	 *
     * @param CreatePageSetttingRequest|Request $request
	 */
	public function store(CreatePageSetttingRequest $request)
	{
	    
		PageSettting::create($request->all());

		return redirect()->route(config('quickadmin.route').'.pagesettting.index');
	}

	/**
	 * Show the form for editing the specified pagesettting.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$pagesettting = PageSettting::find($id);
	    
	    
		return view('admin.pagesettting.edit', compact('pagesettting'));
	}

	/**
	 * Update the specified pagesettting in storage.
     * @param UpdatePageSetttingRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePageSetttingRequest $request)
	{
		$pagesettting = PageSettting::findOrFail($id);

        

		$pagesettting->update($request->all());

		return redirect()->route(config('quickadmin.route').'.pagesettting.index');
	}

	/**
	 * Remove the specified pagesettting from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		PageSettting::destroy($id);

		return redirect()->route(config('quickadmin.route').'.pagesettting.index');
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
            PageSettting::destroy($toDelete);
        } else {
            PageSettting::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.pagesettting.index');
    }

}
