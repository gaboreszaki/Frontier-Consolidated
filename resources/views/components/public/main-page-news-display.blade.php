<section>
    <div class="row">
        <div class="col-12">
            <a href="#" class="float-end btn btn-link mb-0">Show all</a>
            <h2 class="mb-0">Latest News:</h2>
            <hr class="mt-1">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @foreach($latestNews as $news)
                <div class="card mb-3 rounded-0">
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <p class="card-text">{!!  $news->content !!}</p>
                        <div class="small text-end text-muted">

                            {{$news->updated_at->diffForHumans()}}
                            {{$news->updated_at}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>