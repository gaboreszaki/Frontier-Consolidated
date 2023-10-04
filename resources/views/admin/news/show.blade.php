<x-layouts.admin>

    <div class="float-end">

        <a href="{{route('admin.news.index')}}">Back</a>

    </div>
    <h2>News page</h2>
    <hr>

        <div class="card shadow mb-3">
            <div class="card-body ">
                <div class="card-title">
                    <div class="float-end">
                        <a href="{{route('admin.news.edit', ['news' => $news->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                        <a href="admin/news/{{$news->id}}" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('delete-form-{{$news->id}}').submit();">
                            <i class="bi bi-trash"></i>
                        </a>
                        <form method="POST" id="delete-form-{{$news->id}}" action="{{route('admin.news.destroy', [$news->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                        </form>

                    </div>
                    <h5 >{{$news->title}}</h5>

                </div>
                <hr>
                {!! $news->content !!}

            </div>
        </div>


</x-layouts.admin>