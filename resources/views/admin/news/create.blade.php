<x-layouts.admin>

    <div class="float-end">
        <a href="">Create News or announcement</a>


    </div>
    <h2>News create page</h2>
    <hr>

    <form action="/admin/news" method="post">
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">
                <div class="card-title">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="news_title" placeholder="Title" name="title">
                        <label for="news_title">News title</label>
                    </div>

                </div>
                <label>Content</label>



                <textarea id="tmce" name="content"></textarea>

            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>