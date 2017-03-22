<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Bodytype;
use App\Http\Requests\CreateBodytypeRequest;
use App\Http\Requests\UpdateBodytypeRequest;
use Illuminate\Http\Request;

class BodytypeController extends Controller {

    /**
     * Display a listing of bodytype
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $bodytype = Bodytype::all();

        return view('admin.bodytype.index', compact('bodytype'));
    }

    /**
     * Show the form for creating a new bodytype
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.bodytype.create');
    }

    /**
     * Store a newly created bodytype in storage.
     *
     * @param CreateBodytypeRequest|Request $request
     */
    public function store(CreateBodytypeRequest $request) {
        Bodytype::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.bodytype.index');
    }

    /**
     * Show the form for editing the specified bodytype.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $bodytype = Bodytype::find($id);
        return view('admin.bodytype.edit', compact('bodytype'));
    }

    /**
     * Update the specified bodytype in storage.
     * @param UpdateBodytypeRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateBodytypeRequest $request) {
        $bodytype = Bodytype::findOrFail($id);
        $bodytype->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.bodytype.index');
    }

    /**
     * Remove the specified bodytype from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        Bodytype::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.bodytype.index');
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
            Bodytype::destroy($toDelete);
        } else {
            Bodytype::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.bodytype.index');
    }

}
