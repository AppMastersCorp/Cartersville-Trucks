<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctexteriorcolor;
use App\Http\Requests\CreateCtexteriorcolorRequest;
use App\Http\Requests\UpdateCtexteriorcolorRequest;
use Illuminate\Http\Request;



class CtexteriorcolorController extends Controller {

	/**
	 * Display a listing of ctexteriorcolor
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctexteriorcolor = Ctexteriorcolor::all();

		return view('admin.ctexteriorcolor.index', compact('ctexteriorcolor'));
	}

	/**
	 * Show the form for creating a new ctexteriorcolor
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctexteriorcolor.create');
	}

	/**
	 * Store a newly created ctexteriorcolor in storage.
	 *
     * @param CreateCtexteriorcolorRequest|Request $request
	 */
	public function store(CreateCtexteriorcolorRequest $request)
	{
	    
		Ctexteriorcolor::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctexteriorcolor.index');
	}

	/**
	 * Show the form for editing the specified ctexteriorcolor.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctexteriorcolor = Ctexteriorcolor::find($id);
	    
	    
		return view('admin.ctexteriorcolor.edit', compact('ctexteriorcolor'));
	}

	/**
	 * Update the specified ctexteriorcolor in storage.
     * @param UpdateCtexteriorcolorRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtexteriorcolorRequest $request)
	{
		$ctexteriorcolor = Ctexteriorcolor::findOrFail($id);

        

		$ctexteriorcolor->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctexteriorcolor.index');
	}

	/**
	 * Remove the specified ctexteriorcolor from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctexteriorcolor::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctexteriorcolor.index');
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
            Ctexteriorcolor::destroy($toDelete);
        } else {
            Ctexteriorcolor::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctexteriorcolor.index');
    }

}
