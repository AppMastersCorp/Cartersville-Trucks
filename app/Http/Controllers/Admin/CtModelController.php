<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CtModel;
use App\Http\Requests\CreateCtModelRequest;
use App\Http\Requests\UpdateCtModelRequest;
use Illuminate\Http\Request;
use App\CtMake;

class CtModelController extends Controller {

    /**
     * Display a listing of ctmodel
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctmodel = CtModel::with("ctmake")->get();
        return view('admin.ctmodel.index', compact('ctmodel'));
    }

    /**
     * Show the form for creating a new ctmodel
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $ctmake = CtMake::pluck("id", "id")->prepend('Please select', null);
        return view('admin.ctmodel.create', compact("ctmake"));
    }

    /**
     * Store a newly created ctmodel in storage.
     *
     * @param CreateCtModelRequest|Request $request
     */
    public function store(CreateCtModelRequest $request) {
        CtModel::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmodel.index');
    }

    /**
     * Show the form for editing the specified ctmodel.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctmodel = CtModel::find($id);
        $ctmake = CtMake::pluck("id", "id")->prepend('Please select', null);
        return view('admin.ctmodel.edit', compact('ctmodel', "ctmake"));
    }

    /**
     * Update the specified ctmodel in storage.
     * @param UpdateCtModelRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCtModelRequest $request) {
        $ctmodel = CtModel::findOrFail($id);
        $ctmodel->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmodel.index');
    }

    /**
     * Remove the specified ctmodel from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CtModel::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctmodel.index');
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
            CtModel::destroy($toDelete);
        } else {
            CtModel::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctmodel.index');
    }

}
