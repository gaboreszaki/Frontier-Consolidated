<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<h2>Latest News:</h2>

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