<section >
<div class="row">
    <h2>Event Reports</h2>
</div>

    <div class="row">
        @foreach($reports as $report)
            <div class="col-4">

                <x-public.event-reports-list-card :report="$report"/>
            </div>
        @endforeach

    </div>
</section>