<section >
<div class="row">
    <div class="col-12">
    <a href="#" class="float-end btn btn-link mb-0">Show all</a>
    <h2 class="mb-0">Event Reports</h2>
    <hr class="mt-1">
    </div>
</div>
    <div class="row">
        @foreach($reports as $report)
            <div class="col-sm-12 col-md-6 ">
                <x-public.event-reports-list-card :report="$report"/>
            </div>
        @endforeach

    </div>
</section>