<x-layouts.admin>


    <h2>News Update page</h2>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.news.update', ['news' => $news])}}" method="post">
        {{ method_field('PUT') }}
        @csrf

        <div class="card shadow-md">
            <div class="card-body ">


                <div class="row">
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="news_title" placeholder="Title" name="title" value="{{$news->title}}">
                            <label for="news_title">News title</label>
                        </div>
                    </div>
                    <div class="col-4">
                        {{-- is_announcement: --}}
{{--                        @dump($news->)--}}
                        <div class="form-check @error('is_announcement') is-invalid @enderror">
                            <input class="form-check-input" type="checkbox" value="1" id="is_announcement" name="is_announcement" @checked($news->is_announcement == true)>
                            <label class="form-check-label" for="is_announcement">
                                Announcement
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="news_content">Content</label>
                        <textarea class="tmce" id="news_content" name="content" aria-label="news_content">{{$news->content}}</textarea>
                    </div>
                </div>


            </div>


            <div class="card-footer text-end">

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>