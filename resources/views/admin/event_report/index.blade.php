<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="float-end">
                <a href="{{route('admin.reports.create')}}" class="btn btn-primary">Create report</a>
            </div>
            <h2>After Event Reports</h2>
        </div>
    </div>
    <hr>
    @foreach ($reports as $item)
        <div class="card shadow mb-3">
    <div class="row">
        <div class="col-2">
            @isset($item->op_cover_img)
                <img src="{{asset("storage/".$item->op_cover_img) }}" class="img-fluid img-thumbnail my-3 mx-2" alt="thumbnail">
            @endisset


        </div>
        <div class="col-10">

               {{--                @dump($item->toArray())--}}

                    <div class="card-body ">
                        <div class="card-title">
                            <div class="float-end">
                                <a href="{{route('admin.reports.show', ['report' => $item->id])}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.reports.edit', ['report' => $item->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            </div>

                            <h5>{{$item->title}}</h5>
                            <small class="text-secondary">{{$item->op_date}}</small>
                        </div>
                        <hr>
                        <div class="card-text">
                            {!! mb_substr($item->op_summary, 0, 200) !!}
                        </div>
                    </div>
                </div>

        </div>
    </div>
    @endforeach
</x-layouts.admin>