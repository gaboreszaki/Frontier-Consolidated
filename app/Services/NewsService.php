<?php

namespace App\Services;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsService
{
    public function createNews(StoreNewsRequest $request): News
    {
        

        $valid = $request->validated();
        $valid['author'] = Auth::user() ? Auth::user()->name : 'test_user'; ///Todo: replace user with authed user

        return News::create($valid);
    }

    public function updateNews(News $news, UpdateNewsRequest $request): News
    {

        $valid = $request->validated();

        $news->updateOrInsert(
            [
                'id' => $news['id']
            ],
            [
                'title' => $valid['title'],
                'content' => $valid['content'],
                'author' => 'admin_user', ///Todo: replace user with authed user
                'is_announcement' => 0
            ]
        )->touch();

        return $news;
    }
}