<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\AppointmentSchedule;
use App\Http\Requests\CreateAppointmentScheduleRequest;
use App\Http\Requests\UpdateAppointmentScheduleRequest;
use Illuminate\Http\Request;

class AppointmentScheduleController extends Controller {

    /**
     * Display a listing of appointmentschedule
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $appointmentschedule = AppointmentSchedule::all();

        return view('admin.appointmentschedule.index', compact('appointmentschedule'));
    }

    /**
     * Show the form for creating a new appointmentschedule
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.appointmentschedule.create');
    }

    /**
     * Store a newly created appointmentschedule in storage.
     *
     * @param CreateAppointmentScheduleRequest|Request $request
     */
    public function store(CreateAppointmentScheduleRequest $request) {
        AppointmentSchedule::create($request->all());
        return redirect()->route(config('quickadmin.route') . '.appointmentschedule.index');
    }

    /**
     * Show the form for editing the specified appointmentschedule.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $appointmentschedule = AppointmentSchedule::find($id);
        return view('admin.appointmentschedule.edit', compact('appointmentschedule'));
    }

    /**
     * Update the specified appointmentschedule in storage.
     * @param UpdateAppointmentScheduleRequest|Request $request
     *
     * @param  int  $id
     */
    public function update($id, UpdateAppointmentScheduleRequest $request) {
        $appointmentschedule = AppointmentSchedule::findOrFail($id);
        $appointmentschedule->update($request->all());
        return redirect()->route(config('quickadmin.route') . '.appointmentschedule.index');
    }

    /**
     * Remove the specified appointmentschedule from storage.
     *
     * @param  int  $id
     */
    public function destroy($id) {
        AppointmentSchedule::destroy($id);
        return redirect()->route(config('quickadmin.route') . '.appointmentschedule.index');
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
            AppointmentSchedule::destroy($toDelete);
        } else {
            AppointmentSchedule::whereNotNull('id')->delete();
        }
        return redirect()->route(config('quickadmin.route') . '.appointmentschedule.index');
    }

}
