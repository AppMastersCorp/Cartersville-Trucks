<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Testtbl;
use App\Http\Requests\CreateTesttblRequest;
use App\Http\Requests\UpdateTesttblRequest;
use Illuminate\Http\Request;
use App\CTCarlisting;

class TesttblController extends Controller {

    /**
     * Display a listing of testtbl
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $testtbl = Testtbl::with("ctcarlisting")->get();

        return view('admin.testtbl.index', compact('testtbl'));
    }

    /**
     * Show the form for creating a new testtbl
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $ctcarlisting = CTCarlisting::pluck("text_field", "id")->prepend('Please select', null);


        return view('admin.testtbl.create', compact("ctcarlisting"));
    }

    /**
     * Store a newly created testtbl in storage.
     *
     * @param CreateTesttblRequest|Request $request
     */
    public function store(CreateTesttblRequest $request) {

        Testtbl::create($request->all());

        return redirect()->route(config('quickadmin.route') . '.testtbl.index');
    }

    /**
     * Show the form for editing the specified testtbl.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $testtbl = Testtbl::find($id);
        $ctcarlisting = CTCarlisting::pluck("text_field", "id")->prepend('Please select', null);


        return view('admin.testtbl.edit', compact('testtbl', "ctcarlisting"));
    }

    /**
     * Update the specified testtbl in storage.
     * @param UpdateTesttblRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateTesttblRequest $request) {
        $testtbl = Testtbl::findOrFail($id);



        $testtbl->update($request->all());

        return redirect()->route(config('quickadmin.route') . '.testtbl.index');
    }

    /**
     * Remove the specified testtbl from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        Testtbl::destroy($id);

        return redirect()->route(config('quickadmin.route') . '.testtbl.index');
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
            Testtbl::destroy($toDelete);
        } else {
            Testtbl::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route') . '.testtbl.index');
    }

}
