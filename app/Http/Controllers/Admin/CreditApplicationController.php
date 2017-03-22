<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CreditApplication;
use App\Http\Requests\CreateCreditApplicationRequest;
use App\Http\Requests\UpdateCreditApplicationRequest;
use Illuminate\Http\Request;

class CreditApplicationController extends Controller {

    /**
     * Display a listing of creditapplication
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $creditapplication = CreditApplication::all();
        return view('admin.creditapplication.index', compact('creditapplication'));
    }

    /**
     * Show the form for creating a new creditapplication
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.creditapplication.create');
    }

    /**
     * Store a newly created creditapplication in storage.
     *
     * @param CreateCreditApplicationRequest|Request $request
     */
    public function store(CreateCreditApplicationRequest $request) {
        CreditApplication::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.creditapplication.index');
    }

    /**
     * Show the form for editing the specified creditapplication.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $creditapplication = CreditApplication::find($id);
        return view('admin.creditapplication.edit', compact('creditapplication'));
    }

    /**
     * Update the specified creditapplication in storage.
     * @param UpdateCreditApplicationRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCreditApplicationRequest $request) {
        $creditapplication = CreditApplication::findOrFail($id);
        $creditapplication->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.creditapplication.index');
    }

    /**
     * Remove the specified creditapplication from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CreditApplication::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.creditapplication.index');
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
            CreditApplication::destroy($toDelete);
        } else {
            CreditApplication::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.creditapplication.index');
    }

}
