<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="float-end">
                <a href="/admin/news/create" class="btn btn-primary">Create News or announcement</a>
            </div>
            <h2>News Index page</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            @foreach ($news as $item)
                <div class="card shadow mb-3">
                    <div class="card-body ">
                        <div class="card-title">
                            <div class="float-end">
                                <a href="{{route('admin.news.show', ['news' => $item->id])}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.news.edit', ['news' => $item->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            </div>
                            <h5>{{$item->title}}</h5>
                        </div>
                        <hr>
                        <div class="">
                            {!! mb_substr($item->content, 0, 200) !!}...
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.admin>