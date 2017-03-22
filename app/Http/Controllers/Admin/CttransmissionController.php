<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Cttransmission;
use App\Http\Requests\CreateCttransmissionRequest;
use App\Http\Requests\UpdateCttransmissionRequest;
use Illuminate\Http\Request;



class CttransmissionController extends Controller {

	/**
	 * Display a listing of cttransmission
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $cttransmission = Cttransmission::all();

		return view('admin.cttransmission.index', compact('cttransmission'));
	}

	/**
	 * Show the form for creating a new cttransmission
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.cttransmission.create');
	}

	/**
	 * Store a newly created cttransmission in storage.
	 *
     * @param CreateCttransmissionRequest|Request $request
	 */
	public function store(CreateCttransmissionRequest $request)
	{
	    
		Cttransmission::create($request->all());

		return redirect()->route(config('quickadmin.route').'.cttransmission.index');
	}

	/**
	 * Show the form for editing the specified cttransmission.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$cttransmission = Cttransmission::find($id);
	    
	    
		return view('admin.cttransmission.edit', compact('cttransmission'));
	}

	/**
	 * Update the specified cttransmission in storage.
     * @param UpdateCttransmissionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCttransmissionRequest $request)
	{
		$cttransmission = Cttransmission::findOrFail($id);

        

		$cttransmission->update($request->all());

		return redirect()->route(config('quickadmin.route').'.cttransmission.index');
	}

	/**
	 * Remove the specified cttransmission from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Cttransmission::destroy($id);

		return redirect()->route(config('quickadmin.route').'.cttransmission.index');
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
            Cttransmission::destroy($toDelete);
        } else {
            Cttransmission::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.cttransmission.index');
    }

}
