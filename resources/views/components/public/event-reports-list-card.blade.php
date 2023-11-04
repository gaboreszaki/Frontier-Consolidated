<div class="card" >
@if($report->op_cover_img)
    <img src="{{asset('storage/cards/'.$report->op_cover_img)}}" class="card-img-top" alt="{{$report->title}}">
    @else
    <x-tools.image-placeholder/>
    @endif
        <div class="card-body">
        <h5 class="card-title">{{$report->title}}</h5>
        <small class="text-secondary">{{$report->op_date}}</small>
        <a href="#" class="btn btn-primary " disabled="disabled">Read report </a>
    </div>
</div>