<div class="row mb-0">

    {{-- Todo: create a more elegant solution --}}
    <figure class="image">

        <img class="img-fluid " src="{{Storage::url('originals/'.$item->background_image)}}" alt="background-test">


        <div class="figcaption {{$item->layout}} ">
            <div class="float-end">
            <span class="badge rounded-pill text-bg-secondary">Priority:{{$item->priority}}</span>

            @if($item->is_pinned)
                <span class="badge rounded-pill text-bg-primary"> <i class="bi bi-flag"></i> </span>
            @endif
            </div>

            <div class="indicator">
                <h2>{{$item->title}}</h2>
                <div>{!!  $item->content !!}</div>
                </div>
            </div>


    </figure>
</div>
