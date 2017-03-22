<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CTCarlisting2;
use App\Http\Requests\CreateCTCarlisting2Request;
use App\Http\Requests\UpdateCTCarlisting2Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\CTCarlisting;

class CTCarlisting2Controller extends Controller {

    /**
     * Display a listing of ctcarlisting2
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctcarlisting2 = CTCarlisting2::with("ctcarlisting")->get();
        return view('admin.ctcarlisting2.index', compact('ctcarlisting2'));
    }

    /**
     * Show the form for creating a new ctcarlisting2
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $ctcarlisting = CTCarlisting::pluck("id", "id")->prepend('Please select', null);
        $enumfield = CTCarlisting2::$enumfield;
        return view('admin.ctcarlisting2.create', compact("ctcarlisting", "enumfield"));
    }

    /**
     * Store a newly created ctcarlisting2 in storage.
     *
     * @param CreateCTCarlisting2Request|Request $request
     */
    public function store(CreateCTCarlisting2Request $request) {
        $request = $this->saveFiles($request);
        CTCarlisting2::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting2.index');
    }

    /**
     * Show the form for editing the specified ctcarlisting2.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctcarlisting2 = CTCarlisting2::find($id);
        $ctcarlisting = CTCarlisting::pluck("id", "id")->prepend('Please select', null);
        $enumfield = CTCarlisting2::$enumfield;
        return view('admin.ctcarlisting2.edit', compact('ctcarlisting2', "ctcarlisting", "enumfield"));
    }

    /**
     * Update the specified ctcarlisting2 in storage.
     * @param UpdateCTCarlisting2Request|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCTCarlisting2Request $request) {
        $ctcarlisting2 = CTCarlisting2::findOrFail($id);
        $request = $this->saveFiles($request);
        $ctcarlisting2->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting2.index');
    }

    /**
     * Remove the specified ctcarlisting2 from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CTCarlisting2::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting2.index');
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
            CTCarlisting2::destroy($toDelete);
        } else {
            CTCarlisting2::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctcarlisting2.index');
    }

}
