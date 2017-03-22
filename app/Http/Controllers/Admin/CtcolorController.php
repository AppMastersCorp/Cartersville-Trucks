<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ctcolor;
use App\Http\Requests\CreateCtcolorRequest;
use App\Http\Requests\UpdateCtcolorRequest;
use Illuminate\Http\Request;



class CtcolorController extends Controller {

	/**
	 * Display a listing of ctcolor
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ctcolor = Ctcolor::all();

		return view('admin.ctcolor.index', compact('ctcolor'));
	}

	/**
	 * Show the form for creating a new ctcolor
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ctcolor.create');
	}

	/**
	 * Store a newly created ctcolor in storage.
	 *
     * @param CreateCtcolorRequest|Request $request
	 */
	public function store(CreateCtcolorRequest $request)
	{
	    
		Ctcolor::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ctcolor.index');
	}

	/**
	 * Show the form for editing the specified ctcolor.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ctcolor = Ctcolor::find($id);
	    
	    
		return view('admin.ctcolor.edit', compact('ctcolor'));
	}

	/**
	 * Update the specified ctcolor in storage.
     * @param UpdateCtcolorRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCtcolorRequest $request)
	{
		$ctcolor = Ctcolor::findOrFail($id);

        

		$ctcolor->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ctcolor.index');
	}

	/**
	 * Remove the specified ctcolor from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ctcolor::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ctcolor.index');
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
            Ctcolor::destroy($toDelete);
        } else {
            Ctcolor::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ctcolor.index');
    }

}
