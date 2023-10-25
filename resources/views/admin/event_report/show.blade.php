<x-layouts.admin>

    <div class="float-end">

        <a href="{{route('admin.reports.index')}}">Back</a>

    </div>
    <h2>reports page</h2>
    <hr>
    @if($report)
        <div class="card shadow mb-3">
            <div class="card-body ">

                <div class="card-title">
                    <div class="float-end">
                        <a href="{{route('admin.reports.edit', ['report' => $report->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                        <a href="admin/reports/{{$report->id}}" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('delete-form-{{$report->id}}').submit();">
                            <i class="bi bi-trash"></i>
                        </a>
                        <form method="POST" id="delete-form-{{$report->id}}" action="{{route('admin.reports.destroy', [$report->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                        </form>

                    </div>
                    <h5 class="text-primary"><strong>{{$report->title}}</strong></h5>
                        <small class="text-secondary">{{$report->op_date}} - {{$report->op_leader}}</small>



                </div>

                <div class="row">
                    <div class="col-12">
                        <h5>Post Op Summary:</h5><hr>
                        {!! $report->op_summary !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h5 class="text-success">What went well?</h5><hr>
                        {!! $report->op_went_well !!}
                    </div>
                    <div class="col-6">
                        <h5 class="text-warning">What could we do better?</h5><hr>
                        {!! $report->op_can_be_improved !!}
                    </div>
                </div>


            </div>
        </div>
    @endif


</x-layouts.admin>