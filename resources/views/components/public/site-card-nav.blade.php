<div class="row">
    <div class="col-3">
        <div class="card">

                <img src="{{asset('storage/cards/'.$report->op_cover_img)}}" class="card-img-top card-img-bottom" alt="{{$report->title}}">

                <div class="floating-title shadow">

                    <h5 class="mb-0">
                        <a href="#" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#{{'report-'.$report->id}}" >{{$report->title}}</a>
                    </h5>
                    <small class="text-secondary">{{$report->op_date}}</small>
                </div>

        </div>


    </div>
</div>