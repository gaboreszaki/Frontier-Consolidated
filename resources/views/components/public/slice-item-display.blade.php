    <div class="row mb-3 border border-1 border-gray-800">

        {{-- Todo: create a more elegant solution --}}


        {{--LEFT--}}
        @if($item->layout === "left")
            <div class="col-5 p-5">
                <h3>{{$item->title}}</h3>
                <div>{{$item->content}}</div>
            </div>
            <div class="col-7"></div>
        @endif


        {{--RIGHT--}}
        @if($item->layout === "right")
            <div class="col-7"></div>
            <div class="col-5">
                <h3>{{$item->title}}</h3>
                <div>{{$item->content}}</div>
            </div>

        @endif

        {{--CENTER--}}
        @if($item->layout === "center")
            <div class="col-6 offset-md-3" >
                <h3>{{$item->title}}</h3>
                <div>{{$item->content}}</div>
            </div>

        @endif


    </div>
