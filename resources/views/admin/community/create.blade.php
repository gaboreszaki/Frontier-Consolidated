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
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="news_title" placeholder="Title" name="title" value="{{ old('title') }}">
                            <label for="news_title" class="form-label">Event title:</label>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="col-4">

                        {{--                        <input type="text" class="form-control @error('op_leader') is-invalid @enderror" id="op_leader" placeholder="Operation Leader" name="op_leader" value="{{ old(op_leader }}">--}}
                        {{--                        <label for="layout">Layout:</label>--}}

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Layout:</span>


                            <select class="form-select form-select-lg @error('layout') is-invalid @enderror" aria-label="layout" name="layout" id="layout">
                                <option selected>Select layout</option>

                                @foreach($layouts as $layout)

                                    <option value="{{ $layout }}" @selected(old('layout') == $layout)>
                                        {{ $layout }}
                                    </option>
                                @endforeach


                                {{--                            <select name="version">--}}
                                {{--                                @foreach ($product->versions as $version)--}}
                                {{--                                    <option value="{{ $layout }}" @selected(old('layout') == $layout)>--}}
                                {{--                                        {{ $layout }}--}}
                                {{--                                    </option>--}}
                                {{--                                @endforeach--}}
                                {{--                            </select>--}}


                            </select>


                            @error('layout')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-8">

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
                                @error('op_cover_img')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <input type="file" class="form-control @error('op_cover_img') is-invalid @enderror" id="op_image_url" placeholder="Operation Thumbnail" name="op_cover_img" value="{{ old("op_cover_img") }}">
                                <label for="op_cover_img">Thumbnail - TODO: add image Uploader</label>
                            </div>
                        @endif


                    </div>
                    <div class="col-4">

                        <div class="form-check @error('is_pinned') is-invalid @enderror">
                            <input class="form-check-input" type="checkbox" value="true" id="is_pinned" @checked(old("is_pinned") == true)>
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
                        <label for="content">Content:</label>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('content') is-invalid @enderror" id="content" name="content">
                            {{ old("content")  }}
                        </textarea>
                    </div>

                </div>

            <div class="card-footer text-end mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>