<!--suppress ALL -->
<div>
    <div class="row mb-3">
        <div class="col-8">
            <label for="exampleDataList" class="form-label visually-hidden">Search</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Search for titles</span>
                <datalist id="datalistOptions">
                    @foreach($guides as $guide)
                        <option value={{$guide->title}}>
                    @endforeach
                </datalist>
                <input type="text" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." wire:model.live="searchTerm">
            </div>
        </div>
        <div class="col-2">
            {{-- Pages --}}
            <div class=" input-group">
                <span class="input-group-text" id="basic-addon1">Pages</span>
                <select class="form-select" aria-label="Default select example" wire:model.live="shownPagesNum">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>

                </select>
            </div>
        </div>
        <div class="col-2">
            {{-- Sort--}}
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Sort</span>
                <select class="form-select" aria-label="Default select example" wire:model.live="sortBy">
                    <option value="title">Title</option>
                    <option value="created_at">Date</option>

                </select>
                <select class="form-select" aria-label="Default select example" wire:model.live="sortDirection">
                    <option>Asc</option>
                    <option>Desc</option>
                </select>
            </div>
        </div>
    </div>

    @isset($guides)
        @foreach ($guides as $item)
            <div class="card shadow mb-3">
                <div class="card-body ">
                    <div class="card-title">
                        <div class="float-end">
                            <a href="{{route('admin.guides.show', ['guide' => $item->id])}}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{route('admin.guides.edit', ['guide' => $item->id])}}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                        </div>
                        <h5>{{$item->title}}</h5>
                    </div>
                    <hr>
                    <div class="">
                        {!! mb_substr($item->description, 0, 200) !!}...
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>