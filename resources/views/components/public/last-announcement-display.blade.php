<div class="alert alert-primary alert-dismissible fade show rounded-0" role="alert">

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <h4 class="alert-heading">{{$lastAnnouncement->title}}</h4>
    <p>{{$lastAnnouncement->content}}</p>
    <hr>
    <div class="mb-0 small text-end ">
        <span class="pb-3 ps-5 ">Author: {{$lastAnnouncement->author}}</span>
        <span class="pb-3 ps-5">Created: {{$lastAnnouncement->created_at->diffForHumans()}}</span>
        @if(!$lastAnnouncement->created_at->eq($lastAnnouncement->updated_at) )
        <span class="pb-3 ps-5">Updated: {{$lastAnnouncement->updated_at}} </span>
        @endif
    </div>
</div>

