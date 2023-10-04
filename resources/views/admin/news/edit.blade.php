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
                <div class="card-title">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="news_title" placeholder="Title" name="title" value="{{$news->title}}">
                        <label for="news_title">News title</label>
                    </div>
                </div>
                <label>Content</label>
                <textarea id="tmce" name="content">{{$news->content}}</textarea>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>