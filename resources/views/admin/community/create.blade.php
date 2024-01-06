<x-layouts.admin>

    <div class="float-end">
        <a href="{{route('admin.community.index')}}">Back to community</a>
    </div>
    <h2>Create Event Report</h2>
    <hr>
    <form action="/admin/community" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">

                <x-forms.alert-display-error-list :errors="$errors"/>


                <div class="row">
                    <div class="col-8">
                        {{-- Title:--}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="news_title" placeholder="Title" name="title" value="{{ old('title') }}">
                            <label for="news_title" class="form-label">Event title:</label>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- background image --}}
                        @if( old("background_image") )
                            <div class="row">
                                <div class="col-8">
                                    {{  old("background_image")  }}
                                </div>
                                <div class="col-4 text-end">
                                    <a href="" class="btn btn-danger">delete image</a>
                                </div>
                            </div>

                        @else
                            <div class="form-floating mb-3">
                                @error('background_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <input type="file" class="form-control @error('background_image') is-invalid @enderror" id="background_image" placeholder="background imagel" name="background_image" value="{{ old("background_image") }}">
                                <label for="background_image">Thumbnail - TODO: add image Uploader</label>
                            </div>
                        @endif

                    </div>
                    <div class="col-4">
                        {{-- Layout selection:--}}
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Layout:</span>
                            <select class="form-select form-select @error('layout') is-invalid @enderror" aria-label="layout" name="layout" id="layout">
                                <option selected>Select layout</option>
                                @foreach($layouts as $layout)
                                    <option value="{{ $layout }}" @selected(old('layout') == $layout)>
                                        {{ $layout }}
                                    </option>
                                @endforeach
                            </select>
                            @error('layout')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Priority --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('priority') is-invalid @enderror" id="priority" placeholder="Priority" name="priority" value="{{ old('priority') }}">
                            <label for="priority" class="form-label">Priority:</label>
                            @error('priority')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Is Pinned: --}}
                        <div class="form-check @error('is_pinned') is-invalid @enderror">
                            <input class="form-check-input" type="checkbox" value="1" id="is_pinned" name="is_pinned" @checked(old("is_pinned") == true)>
                            <label class="form-check-label" for="is_pinned">
                                Pinned
                            </label>
                        </div>
                        @error('is_pinned')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        {{-- Content: --}}
                        <label for="content">Content:</label>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('content') is-invalid @enderror" id="content" name="content">
                            {{ old("content")  }}
                        </textarea>

                    </div>
                </div>

            </div>
            <div class="card-footer text-end mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>