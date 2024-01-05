<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="float-end">
                <a href="{{route('admin.guides.create')}}" class="btn btn-primary">Create Guide</a>
            </div>
            <h2>Guides Index page</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            @foreach ($guides as $item)
                <div class="card shadow mb-3">
                    <div class="card-body ">
                        <div class="card-title">
                            <div class="float-end">
                                <a href="{{route('admin.guides.show', ['guide' => $item->id])}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.guides.edit', ['guide' => $item->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            </div>
                            <h5>{{$item->title}}</h5>
                        </div>
                        <hr>
                        <div class="">
                            {!! mb_substr($item->description, 0, 200) !!}...
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.admin>