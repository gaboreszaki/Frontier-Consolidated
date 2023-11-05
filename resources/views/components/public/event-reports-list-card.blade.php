<div class="card shadow mb-3" >
    @if($report->op_cover_img)
        <img src="{{asset('storage/cards/'.$report->op_cover_img)}}" class="card-img-top card-img-bottom" alt="{{$report->title}}">
    @else
        <x-tools.image-placeholder/>
    @endif
        <div class="floating-title shadow">

            <h5 class="mb-0">
                <a href="#" class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#{{'report-'.$report->id}}" >{{$report->title}}</a>
            </h5>
        <small class="text-secondary">{{$report->op_date}}</small>
        </div>


        {{-- MODAL--}}


        <div class="modal fade" id="{{'report-'.$report->id}}" tabindex="-1" aria-labelledby="{{'report-'.$report->id.'-label'}}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-header" >
                        <img src="{{asset('storage/cards/'.$report->op_cover_img)}}" alt="Cover image" class="me-3" height="100">
                        <h1 class="modal-title fs-5" id="{{'report-'.$report->id.'-label'}}">{{$report->title}}</h1>
                        <br>
                        <br>
                        <small>{{$report->op_date}}</small>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        {!!  $report->op_summary!!}
                        <div class="row">

                            <div class="col-6">
                                <h5>What went well?</h5>
                                {!!  $report->op_went_well!!}
                            </div>
                            <div class="col-6">
                                <h5>What could we do better?</h5>
                                {!!  $report->op_can_be_improved!!}
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


</div>