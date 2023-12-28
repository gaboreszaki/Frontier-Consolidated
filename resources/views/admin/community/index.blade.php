<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="float-end">
                <a href="{{route('admin.community.create')}}" class="btn btn-primary">Create entry</a>
            </div>
            <h2>Community Page</h2>
        </div>
    </div>
    <hr>
    @foreach ($entries as $community)
        <div class="card shadow mb-3">
            <div class="row">
                <div class="col-2">
                    @isset($community->background_image)
                        <img src="{{asset("storage/thumbnails/".$community->background_image) }}" class="img-fluid img-thumbnail my-3 mx-2" alt="thumbnail">
                    @else
                        <x-tools.image-placeholder/>
                    @endisset


                </div>
                <div class="col-10">


                    <div class="card-body ">
                        <div class="card-title">
                            <div class="float-end">

                                <span class="badge bg-secondary">priority: {{$community->priority}} </span>

                                <a href="{{route('admin.community.show', $community)}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.community.edit', $community)}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                            </div>

                            <h5>{{$community->title}}</h5>
                            <small class="text-secondary">{{$community->op_date}}</small>
                        </div>
                        <hr>
                        <div class="card-text">
                            {!! mb_substr($community->content, 0, 200) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</x-layouts.admin>