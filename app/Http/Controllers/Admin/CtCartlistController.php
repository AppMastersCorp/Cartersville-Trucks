<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CtCartlist;
use App\Http\Requests\CreateCtCartlistRequest;
use App\Http\Requests\UpdateCtCartlistRequest;
use Illuminate\Http\Request;
use App\CTCarlisting;

class CtCartlistController extends Controller {

    /**
     * Display a listing of ctcartlist
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctcartlist = CtCartlist::with("ctcarlisting")->get();
        return view('admin.ctcartlist.index', compact('ctcartlist'));
    }

    /**
     * Show the form for creating a new ctcartlist
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $ctcarlisting = CTCarlisting::pluck("email_field", "id")->prepend('Please select', null);
        return view('admin.ctcartlist.create', compact("ctcarlisting"));
    }

    /**
     * Store a newly created ctcartlist in storage.
     *
     * @param CreateCtCartlistRequest|Request $request
     */
    public function store(CreateCtCartlistRequest $request) {
        CtCartlist::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcartlist.index');
    }

    /**
     * Show the form for editing the specified ctcartlist.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctcartlist = CtCartlist::find($id);
        $ctcarlisting = CTCarlisting::pluck("email_field", "id")->prepend('Please select', null);
        return view('admin.ctcartlist.edit', compact('ctcartlist', "ctcarlisting"));
    }

    /**
     * Update the specified ctcartlist in storage.
     * @param UpdateCtCartlistRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCtCartlistRequest $request) {
        $ctcartlist = CtCartlist::findOrFail($id);
        $ctcartlist->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcartlist.index');
    }

    /**
     * Remove the specified ctcartlist from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CtCartlist::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctcartlist.index');
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
            CtCartlist::destroy($toDelete);
        } else {
            CtCartlist::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctcartlist.index');
    }

}
