<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CtMake;
use App\Http\Requests\CreateCtMakeRequest;
use App\Http\Requests\UpdateCtMakeRequest;
use Illuminate\Http\Request;

class CtMakeController extends Controller {

    /**
     * Display a listing of ctmake
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctmake = CtMake::all();
        return view('admin.ctmake.index', compact('ctmake'));
    }

    /**
     * Show the form for creating a new ctmake
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.ctmake.create');
    }

    /**
     * Store a newly created ctmake in storage.
     *
     * @param CreateCtMakeRequest|Request $request
     */
    public function store(CreateCtMakeRequest $request) {
        CtMake::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmake.index');
    }

    /**
     * Show the form for editing the specified ctmake.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctmake = CtMake::find($id);
        return view('admin.ctmake.edit', compact('ctmake'));
    }

    /**
     * Update the specified ctmake in storage.
     * @param UpdateCtMakeRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCtMakeRequest $request) {
        $ctmake = CtMake::findOrFail($id);
        $ctmake->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmake.index');
    }

    /**
     * Remove the specified ctmake from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CtMake::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctmake.index');
    }

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request) {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            CtMake::destroy($toDelete);
        } else {
            CtMake::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctmake.index');
    }

}
