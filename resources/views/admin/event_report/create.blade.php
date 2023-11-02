<x-layouts.admin>

    <div class="float-end">
        <a href="{{route('admin.reports.index')}}">Back to reports</a>
    </div>
    <h2>Create Event Report</h2>
    <hr>
    <form action="/admin/reports" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        Error with inputs
                    </div>
                @endif
                <div class="row">
                <div class="col-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="news_title" placeholder="Title" name="title" value="{{ old('title') }}">
                        <label for="news_title" class="form-label">Event title:</label>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('op_leader') is-invalid @enderror" id="op_leader" placeholder="Operation Leader" name="op_leader" value="{{ old('op_leader') }}">
                        <label for="op_leader">Op Leader:</label>
                        @error('op_leader')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control @error('op_cover_img') is-invalid @enderror" id="op_cover_img" placeholder="Operation Thumbnail" name="op_cover_img" value="{{ old('op_cover_img') }}">



                            <label for="op_cover_img">Thumbnail - TODO: add image Uploader</label>
                            @error('op_cover_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                    <div class="col-4">

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control @error('op_date') is-invalid @enderror" id="op_date" placeholder="Operation Leader" name="op_date" value="{{ old('op_date') }}">
                            <label for="op_date">Operation Date:</label>
                            @error('op_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="op_summary">Operation Summary:</label>
                        @error('op_summary')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('op_summary') is-invalid @enderror" id="op_summary" name="op_summary" >
                            {{ old('op_summary') }}
                        </textarea>
                    </div>
                    <div class="col-3">
                        <label for="op_went_well">What went well: </label>
                        @error('op_went_well')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('op_went_well') is-invalid @enderror" id="op_went_well" name="op_went_well" >
                            {{ old('op_went_well') }}
                        </textarea>
                    </div>
                    <div class="col-3">
                        <label for="op_can_be_improved">What could we do better: </label>
                        @error('op_can_be_improved')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('op_can_be_improved') is-invalid @enderror" id="op_can_be_improved" name="op_can_be_improved" >
                            {{ old('op_can_be_improved') }}
                        </textarea>

                    </div>
                </div>

            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>