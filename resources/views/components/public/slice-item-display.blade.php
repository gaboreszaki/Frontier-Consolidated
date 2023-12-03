<div class="row mb-0">

    {{-- Todo: create a more elegant solution --}}
    <figure class="image">

        <img class="img-fluid " src="{{url('images/temp/'.$item->background_image)}}" alt="background-test">


            <div class="figcaption {{$item->layout}} ">
                <div class="indicator">
                    <h2>{{$item->title}}</h2>
                    <div>{{$item->content}}</div>
                </div>
            </div>


    </figure>
</div>
