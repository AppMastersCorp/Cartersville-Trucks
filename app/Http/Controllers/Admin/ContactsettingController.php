<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Contactsetting;
use App\Http\Requests\CreateContactsettingRequest;
use App\Http\Requests\UpdateContactsettingRequest;
use Illuminate\Http\Request;

class ContactsettingController extends Controller {

    /**
     * Display a listing of contactsetting
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $contactsetting = Contactsetting::all();
        return view('admin.contactsetting.index', compact('contactsetting'));
    }

    /**
     * Show the form for creating a new contactsetting
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.contactsetting.create');
    }

    /**
     * Store a newly created contactsetting in storage.
     *
     * @param CreateContactsettingRequest|Request $request
     */
    public function store(CreateContactsettingRequest $request) {
        Contactsetting::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.contactsetting.index');
    }

    /**
     * Show the form for editing the specified contactsetting.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $contactsetting = Contactsetting::find($id);
        return view('admin.contactsetting.edit', compact('contactsetting'));
    }

    /**
     * Update the specified contactsetting in storage.
     * @param UpdateContactsettingRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateContactsettingRequest $request) {
        $contactsetting = Contactsetting::findOrFail($id);
        $contactsetting->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.contactsetting.index');
    }

    /**
     * Remove the specified contactsetting from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        Contactsetting::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.contactsetting.index');
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
            Contactsetting::destroy($toDelete);
        } else {
            Contactsetting::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.contactsetting.index');
    }

}
