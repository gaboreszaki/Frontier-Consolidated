<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAfterEventReportRequest;
use App\Http\Requests\UpdateAfterEventReportRequest;
use App\Models\AfterEventReport;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AfterEventReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = AfterEventReport::all();
        return view('admin.event_report.index', compact('reports'));
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
    public function store(StoreAfterEventReportRequest $request) :RedirectResponse
    {
        $valid = $request->validated();
        $valid['author'] = 'admin_user'; ///Todo: replace user with authed user



        AfterEventReport::create($valid);

        return redirect('/admin/reports');
    }

    /**
     * Display the specified resource.
     */
    public function show(AfterEventReport $report) :View
    {
        return view('admin.event_report.show', [
            'report' => $report
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = AfterEventReport::find($id);
        return view('admin.event_report.edit', ['report' => $report]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAfterEventReportRequest $request, AfterEventReport $report) : RedirectResponse
    {


        $valid = $request->validated();

        $report->updateOrCreate(
            [
                'id' => $report['id']
            ],
            [
            'title' => $valid['title'],
            'op_leader' => $valid['op_leader'],
            'op_date' => $valid['op_date'],
            'op_summary' => $valid['op_summary'],
            'op_went_well' => $valid['op_went_well'],
            'op_can_be_improved' => $valid['op_can_be_improved'],
//            'op_cover_img' => $valid['op_cover_img'],
            'author' => 'admin_user' //Todo: replace me
            ],
        );



        return to_route('admin.reports.index')
            ->withStatus('Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AfterEventReport::destroy($id);
        return to_route('admin.reports.index')
            ->withStatus('News deleted successfully.');

    }
}
