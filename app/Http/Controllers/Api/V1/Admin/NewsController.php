<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Resources\Api\V1\Admin\NewsCollection;
use App\Http\Resources\Api\V1\Admin\NewsResource;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class NewsController extends Controller
{
    public function __construct(public NewsService $newsService)
    {
    }
    public function index():NewsCollection
    {
        $news = News::all();
        return new NewsCollection($news);
    }

    public function store(StoreNewsRequest $request): NewsResource
    {
        return json('OK');

        $response = $this->newsService->createNews($request->validated());
        return new NewsResource($response);
    }
    public function show(News $news): NewsResource
    {

        return new NewsResource($news);
    }

    public function update(UpdateNewsRequest $request, News $news): JsonResponse
    {
        $news = $this->newsService->updateNews(
            $news,
            $request->validated()
        );

        return (new NewsResource($news))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
