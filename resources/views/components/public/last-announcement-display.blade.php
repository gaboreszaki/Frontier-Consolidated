<div class="alert alert-primary alert-dismissible fade show" role="alert">

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <h4 class="alert-heading">{{$lastAnnouncement->title}}</h4>
    <p>{{$lastAnnouncement->content}}</p>
    <hr>
    <div class="mb-0 small text-end ">
        <span class="pb-3 ps-5 ">Author: {{$lastAnnouncement->author}}</span>
        <span class="pb-3 ps-5">Created: {{$lastAnnouncement->created_at}}</span>
        <span class="pb-3 ps-5">Updated: {{$lastAnnouncement->updated_at}} </span>

        {{--<div class="col text-start">Author: {{$lastAnnouncement->author}}</div>--}}
        {{--<div class="col text-center">Created: {{$lastAnnouncement->created_at}}</div>--}}
        {{--<div class="col text-end">Updated: {{$lastAnnouncement->updated_at}} </div>--}}
    </div>
</div>

