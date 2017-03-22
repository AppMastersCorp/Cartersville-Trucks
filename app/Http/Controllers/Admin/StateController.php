<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\State;
use App\Http\Requests\CreateStateRequest;
use App\Http\Requests\UpdateStateRequest;
use Illuminate\Http\Request;



class StateController extends Controller {

	/**
	 * Display a listing of state
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $state = State::all();

		return view('admin.state.index', compact('state'));
	}

	/**
	 * Show the form for creating a new state
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.state.create');
	}

	/**
	 * Store a newly created state in storage.
	 *
     * @param CreateStateRequest|Request $request
	 */
	public function store(CreateStateRequest $request)
	{
	    
		State::create($request->all());

		return redirect()->route(config('quickadmin.route').'.state.index');
	}

	/**
	 * Show the form for editing the specified state.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$state = State::find($id);
	    
	    
		return view('admin.state.edit', compact('state'));
	}

	/**
	 * Update the specified state in storage.
     * @param UpdateStateRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateStateRequest $request)
	{
		$state = State::findOrFail($id);

        

		$state->update($request->all());

		return redirect()->route(config('quickadmin.route').'.state.index');
	}

	/**
	 * Remove the specified state from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		State::destroy($id);

		return redirect()->route(config('quickadmin.route').'.state.index');
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
            State::destroy($toDelete);
        } else {
            State::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.state.index');
    }

}
