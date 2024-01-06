<x-layouts.admin>


    <div class="float-end">
        <a href="{{route('admin.guides.index')}}"  class="btn btn-dark btn-sm"><i class="bi bi-arrow-left text-info"></i></a>
        <a href="{{route('admin.guides.edit', ['guide' => $guide->id])}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil text-info"></i></a>
        <a href="admin/guides/{{$guide->id}}" class="btn btn-dark btn-sm"
           onclick="event.preventDefault();document.getElementById('delete-form-{{$guide->id}}').submit();">
            <i class="bi bi-trash text-danger"></i>
        </a>
        <form method="POST" id="delete-form-{{$guide->id}}" action="{{route('admin.guides.destroy', [$guide->id])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
        </form>
    </div>
    <h2>{{$guide->title}}</h2>
    <hr>

        <div class="card shadow mb-3">
            <div class="card-body ">
                <div class="card-title">

                    <h5 >{{$guide->title}}</h5>

                </div>
                <hr>
                {!! $guide->content !!}

            </div>
        </div>


</x-layouts.admin>