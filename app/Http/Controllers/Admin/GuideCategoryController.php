<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuideCategoryRequest;
use App\Http\Requests\UpdateGuideCategoryRequest;
use App\Models\Category;

class GuideCategoryController extends Controller
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
    public function store(StoreGuideCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $guideCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $guideCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuideCategoryRequest $request, Category $guideCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $guideCategory)
    {
        //
    }
}
