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
    <div class="row">
        <div class="col-12">

            @foreach ($reports as $item)
{{--                @dump($item->toArray())--}}
                <div class="card shadow mb-3">
                    <div class="card-body ">
                        <div class="card-title">
                            <div class="float-end">
                                <a href="{{route('admin.reports.show', ['report' => $item->id])}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.reports.edit', ['report' => $item->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            </div>

                            <h5>{{$item->op_date}} - {{$item->title}}</h5>
                        </div>
                        <hr>
                        <div class="card-text">
                            {!! mb_substr($item->op_summary, 0, 200) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.admin>