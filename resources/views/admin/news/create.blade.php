<x-layouts.admin>

    <div class="float-end">
        <a href="">Create News or announcement</a>


    </div>
    <h2>Create News or Announcement</h2>
    <hr>

    <form action="/admin/news" method="post" class="needs-validation">
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">

                <x-forms.alert-display-error-list :errors="$errors"/>

                <div class="card-title">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="news_title" placeholder="Title" name="title" value="{{ old('title') }}">
                        <label for="news_title">News title</label>

                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <label for="news_content">Content</label>
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                <textarea class="tmce @error('title') is-invalid @enderror" id="news_content" name="content" >
                    {{ old('content') }}
                </textarea>

            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>