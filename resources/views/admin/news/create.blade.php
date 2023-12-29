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


                <div class="row">
                    <x-forms.alert-display-error-list :errors="$errors"/>
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="news_title" placeholder="Title" name="title" value="{{ old('title') }}">
                            <label for="news_title">News title</label>

                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        {{-- is_announcement: --}}
                        <div class="form-check @error('is_announcement') is-invalid @enderror">
                            <input class="form-check-input" type="checkbox" value="1" id="is_announcement" name="is_announcement" @checked(old("is_announcement") == true)>
                            <label class="form-check-label" for="is_announcement">
                                Announcement
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="news_content">Content</label>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('title') is-invalid @enderror" id="news_content" name="content" >
                    {{ old('content') }}
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