<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAfterEventReportRequest;
use App\Http\Requests\UpdateAfterEventReportRequest;
use App\Models\AfterEventReport;

class AfterEventReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.event_report.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event_report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAfterEventReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AfterEventReport $afterEventReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AfterEventReport $afterEventReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAfterEventReportRequest $request, AfterEventReport $afterEventReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AfterEventReport $afterEventReport)
    {
        //
    }
}
