<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CtClientReview;
use App\Http\Requests\CreateCtClientReviewRequest;
use App\Http\Requests\UpdateCtClientReviewRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;

class CtClientReviewController extends Controller {

    /**
     * Display a listing of ctclientreview
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $ctclientreview = CtClientReview::all();
        return view('admin.ctclientreview.index', compact('ctclientreview'));
    }

    /**
     * Show the form for creating a new ctclientreview
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.ctclientreview.create');
    }

    /**
     * Store a newly created ctclientreview in storage.
     *
     * @param CreateCtClientReviewRequest|Request $request
     */
    public function store(CreateCtClientReviewRequest $request) {
        $request = $this->saveFiles($request);
        CtClientReview::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctclientreview.index');
    }

    /**
     * Show the form for editing the specified ctclientreview.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $ctclientreview = CtClientReview::find($id);
        return view('admin.ctclientreview.edit', compact('ctclientreview'));
    }

    /**
     * Update the specified ctclientreview in storage.
     * @param UpdateCtClientReviewRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateCtClientReviewRequest $request) {
        $ctclientreview = CtClientReview::findOrFail($id);
        $request = $this->saveFiles($request);
        $ctclientreview->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.ctclientreview.index');
    }

    /**
     * Remove the specified ctclientreview from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        CtClientReview::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.ctclientreview.index');
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
            CtClientReview::destroy($toDelete);
        } else {
            CtClientReview::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.ctclientreview.index');
    }

}
