<!--suppress ALL -->
<x-layouts.admin>
    <div class="row">
        <div class="col-12">
            <div class="float-end">
                <a href="{{route('admin.guides.create')}}" class="btn btn-primary">New</a>
            </div>
            <h2>Guides</h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <livewire:guides-index  />
        </div>
    </div>
</x-layouts.admin>