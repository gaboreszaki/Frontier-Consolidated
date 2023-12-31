<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuideGameVersionsRequest;
use App\Http\Requests\UpdateGuideGameVersionsRequest;
use App\Models\GameVersions;

class GuideGameVersionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideGameVersionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GameVersions $guideGameVersions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GameVersions $guideGameVersions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuideGameVersionsRequest $request, GameVersions $guideGameVersions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GameVersions $guideGameVersions)
    {
        //
    }
}
