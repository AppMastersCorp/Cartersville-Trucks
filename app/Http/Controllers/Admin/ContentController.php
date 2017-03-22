<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Content;
use App\Http\Requests\CreateContentRequest;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;

class ContentController extends Controller {

    /**
     * Display a listing of content
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $content = Content::all();
        return view('admin.content.index', compact('content'));
    }

    /**
     * Show the form for creating a new content
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.content.create');
    }

    /**
     * Store a newly created content in storage.
     *
     * @param CreateContentRequest|Request $request
     */
    public function store(CreateContentRequest $request) {
        $request = $this->saveFiles($request);
        Content::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.content.index');
    }

    /**
     * Show the form for editing the specified content.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $content = Content::find($id);
        return view('admin.content.edit', compact('content'));
    }

    /**
     * Update the specified content in storage.
     * @param UpdateContentRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateContentRequest $request) {
        $content = Content::findOrFail($id);
        $request = $this->saveFiles($request);
        $content->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.content.index');
    }

    /**
     * Remove the specified content from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        Content::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.content.index');
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
            Content::destroy($toDelete);
        } else {
            Content::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.content.index');
    }

}
