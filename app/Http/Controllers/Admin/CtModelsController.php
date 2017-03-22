<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CtModels;
use App\Http\Requests\CreateCtModelsRequest;
use App\Http\Requests\UpdateCtModelsRequest;
use Illuminate\Http\Request;
use App\CtMake;
use DB;

class CtModelsController extends Controller {

    /**
     * Display a listing of ctmodels
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctmodels = CtModels::with("ctmake")->get();
        return view('admin.ctmodels.index', compact('ctmodels'));
    }

    /**
     * Show the form for creating a new ctmodels
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $ctmake = DB::table('ctmake')->whereNull('deleted_at')->get();
        return view('admin.ctmodels.create', compact("ctmake"));
    }

    /**
     * Store a newly created ctmodels in storage.
     *
     * @param CreateCtModelsRequest|Request $request
     */
    public function store(CreateCtModelsRequest $request) {
        CtModels::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmodels.index');
    }

    /**
     * Show the form for editing the specified ctmodels.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctmodels = CtModels::find($id);
        $ctmake = DB::table('ctmake')->whereNull('deleted_at')->get();
        return view('admin.ctmodels.edit', compact('ctmodels', "ctmake"));
    }

    /**
     * Update the specified ctmodels in storage.
     * @param UpdateCtModelsRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCtModelsRequest $request) {
        $ctmodels = CtModels::findOrFail($id);
        $ctmodels->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctmodels.index');
    }

    /**
     * Remove the specified ctmodels from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CtModels::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctmodels.index');
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
            CtModels::destroy($toDelete);
        } else {
            CtModels::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctmodels.index');
    }

}
