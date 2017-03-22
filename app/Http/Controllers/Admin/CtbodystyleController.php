<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctbodystyle;
use App\Http\Requests\CreateCtbodystyleRequest;
use App\Http\Requests\UpdateCtbodystyleRequest;
use Illuminate\Http\Request;



class CtbodystyleController extends Controller {

	/**
	 * Display a listing of ctbodystyle
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctbodystyle = Ctbodystyle::all();

		return view('admin.ctbodystyle.index', compact('ctbodystyle'));
	}

	/**
	 * Show the form for creating a new ctbodystyle
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctbodystyle.create');
	}

	/**
	 * Store a newly created ctbodystyle in storage.
	 *
     * @param CreateCtbodystyleRequest|Request $request
	 */
	public function store(CreateCtbodystyleRequest $request)
	{
	    
		Ctbodystyle::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctbodystyle.index');
	}

	/**
	 * Show the form for editing the specified ctbodystyle.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctbodystyle = Ctbodystyle::find($id);
	    
	    
		return view('admin.ctbodystyle.edit', compact('ctbodystyle'));
	}

	/**
	 * Update the specified ctbodystyle in storage.
     * @param UpdateCtbodystyleRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtbodystyleRequest $request)
	{
		$ctbodystyle = Ctbodystyle::findOrFail($id);

        

		$ctbodystyle->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctbodystyle.index');
	}

	/**
	 * Remove the specified ctbodystyle from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctbodystyle::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctbodystyle.index');
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
            Ctbodystyle::destroy($toDelete);
        } else {
            Ctbodystyle::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctbodystyle.index');
    }

}
