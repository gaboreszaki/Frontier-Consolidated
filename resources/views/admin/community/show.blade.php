<x-layouts.admin>

    <div class="float-end">

        <a href="{{route('admin.community.index')}}">Back</a>

    </div>
    <h2>Community Page Entry - {{$community->title}}</h2>
    <hr>
    @if($community)

        <div class="row">
            <div class="col-2">
                <div class="card shadow mb-3">
                    @isset($community->background_image)
                        <img src="{{asset("storage/thumbnails/".$community->background_image) }}" class="img-fluid rounded shadow" alt="thumbnail">
                    @endisset
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <div class="float-end">
                            <a href="{{route('admin.community.edit', $community)}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            <a href="admin/community/{{$community->id}}" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('delete-form-{{$community->id}}').submit();">
                                <i class="bi bi-trash"></i>
                            </a>
                            <form method="POST" id="delete-form-{{$community->id}}" action="{{route('admin.community.destroy', [$community->id])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>

                        </div>
                        <h5 class="text-primary"><strong>{{$community->title}}</strong></h5>
                        <small class="text-secondary">Pinned: {{$community->is_pinned? "True": "False"}}</small><br>
                        <small class="text-secondary">Priority: {{$community->priority}}</small>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card shadow mb-3">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-12">
                                <h5>Content</h5>
                                <hr>
                                {!! $community->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


</x-layouts.admin>