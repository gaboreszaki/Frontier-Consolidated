<x-layouts.admin>

    <div class="float-end">
        <a href="{{route('admin.reports.index')}}">Back to reports</a>
    </div>
    <h2>Create Event Report</h2>
    <hr>
    <form action="/admin/reports" method="post">
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">

                <div class="row">
                <div class="col-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="news_title" placeholder="Title" name="title">
                        <label for="news_title">Event title:</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="op_leader" placeholder="Operation Leader" name="op_leader">
                        <label for="op_leader">Op Leader:</label>
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="op_image_url" placeholder="Operation Thumbnail" name="op_cover_img">
                            <label for="op_cover_img">Thumbnail - TODO: add image Uploader</label>
                        </div>
                        </div>
                    <div class="col-4">

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="op_date" placeholder="Operation Leader" name="op_date">
                            <label for="op_date">Operation Date:</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label for="op_summary">Operation Summary:</label>
                        <textarea class="tmce" id="op_summary" name="op_summary"></textarea>
                    </div>
                    <div class="col-3">
                        <label for="op_went_well">What went well: </label>
                        <textarea class="tmce" id="op_went_well" name="op_went_well">
                        </textarea>
                    </div>
                    <div class="col-3">
                        <label for="op_can_be_improved">What could we do better: </label>
                        <textarea class="tmce" id="op_can_be_improved" name="op_can_be_improved"></textarea>

                    </div>
                </div>

            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>