<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAfterEventReportRequest;
use App\Http\Requests\UpdateAfterEventReportRequest;
use App\Models\AfterEventReport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Services\FileHandlingService;

class AfterEventReportController extends Controller
{
    
    public function __construct(public FileHandlingService $fileHandlingService)
    {
    }
    
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


//        dd(isset($request->op_cover_img));

        /// Check


        /// If We have an image lets store it
        $fileName = $this->fileHandlingService->storeOriginal($request->file('op_cover_img'));
        $this->fileHandlingService->processImageByType('thumbnail', $fileName);
        $this->fileHandlingService->processImageByType('card', $fileName);
        
        $valid['op_cover_img'] = $fileName;
//         $file = $request->file('op_cover_img');
//        if ($file){
//            $name = $file->hashName();
//            Storage::put("public/thumbnails", $request->file('op_cover_img'));
//
//            $valid['op_cover_img'] = "thumbnails/".$name;
//        }

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

        /// Check and process image:



        /// Store Record
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
