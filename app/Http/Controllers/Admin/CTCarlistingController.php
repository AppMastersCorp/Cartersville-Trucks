<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CTCarlisting;
use App\Http\Requests\CreateCTCarlistingRequest;
use App\Http\Requests\UpdateCTCarlistingRequest;
use Illuminate\Http\Request;

class CTCarlistingController extends Controller {

    /**
     * Display a listing of ctcarlisting
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctcarlisting = CTCarlisting::all();
        return view('admin.ctcarlisting.index', compact('ctcarlisting'));
    }

    /**
     * Show the form for creating a new ctcarlisting
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.ctcarlisting.create');
    }

    /**
     * Store a newly created ctcarlisting in storage.
     *
     * @param CreateCTCarlistingRequest|Request $request
     */
    public function store(CreateCTCarlistingRequest $request) {
        CTCarlisting::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting.index');
    }

    /**
     * Show the form for editing the specified ctcarlisting.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctcarlisting = CTCarlisting::find($id);
        return view('admin.ctcarlisting.edit', compact('ctcarlisting'));
    }

    /**
     * Update the specified ctcarlisting in storage.
     * @param UpdateCTCarlistingRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCTCarlistingRequest $request) {
        $ctcarlisting = CTCarlisting::findOrFail($id);
        $ctcarlisting->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting.index');
    }

    /**
     * Remove the specified ctcarlisting from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CTCarlisting::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting.index');
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
            CTCarlisting::destroy($toDelete);
        } else {
            CTCarlisting::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting.index');
    }

}
