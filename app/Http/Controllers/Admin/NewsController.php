<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(public NewsService $newsService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request): RedirectResponse
    {
        $this->newsService->createNews(
            $request
        );

        return to_route('admin.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateNewsRequest $request, News $news ): RedirectResponse
    {


        $this->newsService->updateNews(
            $news,
            $request
        );

        return to_route('admin.news.index')
            ->withStatus('News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::destroy($id);
        return to_route('admin.news.index')
            ->withStatus('News deleted successfully.');
    }
}
