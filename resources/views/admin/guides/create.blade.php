<x-layouts.admin>

    <div class="float-end">
        <a href="">Create News or announcement</a>


    </div>
    <h2>Create Guide</h2>
    <hr>

    <form method="post" action="{{ action([\App\Http\Controllers\Admin\GuideController::class, 'store']) }}"  class="needs-validation">
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
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('video_url') is-invalid @enderror" id="video_url" placeholder="Video Url:" name="video_url" value="{{ old('video_url') }}">
                            <label for="video_url">Video Url</label>

                            @error('video_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">

                        {{-- Categories --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="category-label">Category:</span>
                            <select class="form-select form-select @error('category') is-invalid @enderror" aria-label="category-label" name="category_id" id="category_id">
                                <option selected>Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- is_announcement: --}}
                        {{--                        <div class="form-check @error('is_announcement') is-invalid @enderror">--}}
                        {{--                            <input class="form-check-input" type="checkbox" value="1" id="is_announcement" name="is_announcement" @checked(old("is_announcement") == true)>--}}
                        {{--                            <label class="form-check-label" for="is_announcement">--}}
                        {{--                                Announcement--}}
                        {{--                            </label>--}}
                        {{--                        </div>--}}
                    </div>

                    <div class="col-12">
                        <label for="news_content">Description: </label>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('description') is-invalid @enderror" id="description" name="description">
                    {{ old('description') }}
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